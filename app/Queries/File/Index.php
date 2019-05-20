<?php

namespace App\Queries\File;

use App\File;
use App\Http\Requests\Request;

class Index
{
    public function filterBooks($categoryArr, Request $request)
    {
        $books = (new File())->newQuery();
        if ($request->has('title')) {
            $books->where('title', 'like', '%' . $request->input('title') . '%');
        }
        if ($request->has('category')) {
            $books->whereHas('categories',
                function ($query) use ($categoryArr) {
                    $query->whereIn('category_id', $categoryArr);
                });
        }
        $books = $books->orderBy('title')->paginate(10);
        return $books;
    }
}