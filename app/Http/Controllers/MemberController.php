<?php

namespace App\Http\Controllers;

use App\CostType;
use App\Flat;
use App\People;
use App\Permission;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::id());

        $members = People::where('flat_id', $user->flat_id)->get();

        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $costs = CostType::get();

        return view('members.create', compact('costs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MemberRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request)
    {
        $inputs = $request->only('name', 'phone', 'costs');
        $user = Auth::user();
        $inputs['flat_id'] = $user->flat_id;

        $member = People::create($inputs);
        $costs = CostType::where('period', '<>', 'апартамент')->get();

        foreach ($costs as $cost) {
            $exist = false;
            foreach ($inputs['costs'] as $costInput) {
                if ($cost->id == $costInput)
                    $exist = true;
            }

            if ($exist)
                Permission::create([
                    'flat_id' => $inputs['flat_id'],
                    'people_id' => $member->id,
                    'cost_type_id' => $cost->id,
                    'permission' => $exist,
                ]);
        }

        return Redirect::route('members.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = People::with('permissions')->findOrFail($id);
        $permissions = Permission::where('people_id', $member->id)->get();
        $costs = CostType::get();

        $oldPermissions = [];
        foreach ($permissions as $permission) {
            if ($permission->permission == 1)
                array_push($oldPermissions, $permission->cost_type_id);

        }


        return view('members.edit', compact(['member', 'oldPermissions', 'costs']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param MemberRequest $request
     * @param $id
     * @return mixed
     */
    public function update(MemberRequest $request, $id)
    {
        $inputs = $request->only('name', 'phone');

        $member = People::find($id);
        $member->update($inputs);
        $costsInput = $request->only('costs');
        $costs = CostType::where('period', '<>', 'апартамент')->get();


        foreach ($costs as $cost) {
            $exist = false;
            foreach ($costsInput['costs'] as $costInput) {
                if ($cost->id == (int)$costInput)
                    $exist = true;
            }

            if($exist){
                $permissions = Permission::where([
                    'people_id' => $id,
                    'cost_type_id' => $cost->id
                ])->first();

                if(!$permissions)
                    Permission::create([
                        'flat_id' => $member->flat_id,
                        'people_id' => $member->id,
                        'cost_type_id' => $cost->id,
                        'permission' => $exist,
                    ]);
            }else{
                $permissions = Permission::where([
                    'people_id' => $id,
                    'cost_type_id' => $cost->id
                ])->first();

                if($permissions)
                    $permissions->delete();

            }
        }
        $permissions = Permission::where('people_id', $id)->get();


        return Redirect::route('members.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return mixed
     * @throws \Exception
     */
    public function destroy($id)
    {
        Permission::where('people_id', $id)->delete();
        People::find($id)->delete();
        return Redirect::route('members.index');
    }
}
