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
        $ext = pathinfo($book->path, PATHINFO_EXTENSION);
        $oldFileName = last(explode('/', $book->path));
        $fileName = str_slug($inputs['title'], '-') . '.' . $ext;
        if ($oldFileName != $fileName) {
            Storage::move($oldFileName, $fileName);
        }
        $inputs['path'] = Storage::url($fileName);
        $book->categories()->sync($inputs['categories']);
        $book->update($inputs);
        \Session::flash('flash_message', 'Вашият файл"' . $book->title . '" беше редактиран успешно!');
        DB::commit();
    }
}