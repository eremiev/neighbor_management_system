<?php

namespace App\Queries\File;

use App\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Update
{
    public function run($id, $inputs)
    {
        DB::beginTransaction();
        $book = File::find($id);
        //Rename file
        $ext = pathinfo(storage_path('app/' . $book->filename), PATHINFO_EXTENSION);

        $fileName = str_slug($inputs['title'], '-') . '.' . $ext;
        if ($book->filename != $fileName) {
            Storage::move($book->filename, $fileName);
        }
        $inputs['filename'] = $fileName;
        $categories = array_key_exists('categories',$inputs) ? $inputs['categories'] : [];
        $book->categories()->sync($categories);
        $book->update($inputs);
        \Session::flash('flash_message', 'Вашият файл"' . $book->title . '" беше редактиран успешно!');
        DB::commit();
    }
}