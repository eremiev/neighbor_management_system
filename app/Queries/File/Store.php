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
        $inputs['path'] = Storage::url($fileName);
        $book = File::create($inputs);
        $book->categories()->sync($inputs['categories']);
        \Session::flash('flash_message', 'Вашият файл "' . $book->title . '" беше добавен!');
        DB::commit();
    }
}