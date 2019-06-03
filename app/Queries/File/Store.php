<?php

namespace App\Queries\File;

use App\File;
use DB;
use Illuminate\Support\Facades\Storage;

class Store
{
    public function run($inputs)
    {
        DB::beginTransaction();
        $file = $inputs['file'];
        $fileName = str_slug($inputs['title'], '-') .  '.' . $file->getClientOriginalExtension();
        Storage::put($fileName, file_get_contents($file), 'public');
        $inputs['filename'] = $fileName;
        $book = File::create($inputs);
        $categories = array_key_exists('categories',$inputs) ? $inputs['categories'] : [];
        $book->categories()->sync($categories);
        \Session::flash('flash_message', 'Вашият файл "' . $book->title . '" беше добавен!');
        DB::commit();
    }
}