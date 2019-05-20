<?php

namespace App\Queries\File;

use App\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Destroy
{

    public function run($id)
    {
        DB::beginTransaction();
        $file = File::find($id);
        $path = explode('/', $file->path);
        Storage::delete(end($path));
        $file->delete();
        \Session::flash('flash_message', 'Вашият файл "' . $file->title . '" беше изтрит!');
        DB::commit();
    }
}