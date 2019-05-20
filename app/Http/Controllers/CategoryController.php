<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name')->paginate(10);
        return view('category.index', compact('categories'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $inputs = $request->only('name');
        Category::create($inputs);
        return Redirect::route('categories.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('category.edit', compact(['category']));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $request
     * @param $id
     * @return mixed
     */
    public function update(CategoryRequest $request, $id)
    {
        $input = $request->only('name');
        Category::where('id', $id)->update(['name' => $input['name']]);
        return Redirect::route('categories.index');
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
        Category::find($id)->delete();
        return Redirect::route('categories.index');
    }
}