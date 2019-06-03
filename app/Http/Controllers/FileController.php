<?php

namespace App\Http\Controllers;

use App\Category;
use App\File;
use App\Http\Requests\FileRequest;
use App\Queries\File\Edit;
use App\Queries\File\Destroy;
use App\Queries\File\Index;
use App\Queries\File\Store;
use App\Queries\File\Update;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FileRequest $request)
    {
        $category = $request->input('category');
        $categoryArr = explode(',', $category);
        $selectedTags = null;
        $files = (new Index())->filterBooks($categoryArr, $request);
        if (!empty($category)) {
            foreach ($categoryArr as $tagId) {
                $tag = Category::find($tagId);
                $selectedTags .= $tag->name . ' ,';
            }
        }
        $selectedTags = rtrim($selectedTags, ' ,');
        $categories = Category::all();
        return view('files.index', compact(['files', 'categories', 'selectedTags']));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('files.create', compact(['categories']));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\BookRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileRequest $request)
    {
        $inputs = $request->only('title',  'description', 'categories', 'file');
        (new Store())->run($inputs);
        return Redirect::route('files.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file = File::find($id);
//        $bookTitle = $file->title;
//        $fileName = last(explode('/', $book->path));
//        $contentType = Storage::mimeType($fileName);
//        if ($contentType == 'application/pdf' || $contentType == 'image/jpeg')
//            $link = $book->path;
//        else
//            $link = 'https://view.officeapps.live.com/op/embed.aspx?src=' . $book->path;



        return response()->download(storage_path('app/' . $file->filename));
//        return view('files.show', compact(['link', 'bookTitle']));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $file = (new Edit())->getBook($id);
        $categories = Category::all();

        return view('files.edit', compact(['file', 'categories']));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\BookRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(FileRequest $request, $id)
    {
        $inputs = $request->only('title', 'description', 'categories');
        (new Update())->run($id, $inputs);
        return Redirect::route('files.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        (new Destroy())->run($id);
        return Redirect::route('files.index');
    }
}
