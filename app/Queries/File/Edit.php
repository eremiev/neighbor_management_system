<?php
/**
 * Created by PhpStorm.
 * User: emil
 * Date: 24.06.17
 * Time: 17:27
 */

namespace App\Queries\File;

use App\File;

class Edit
{
    public function getBook($id)
    {
        return File::where('id', $id)
            ->with([
                'categories' => function ($query) {
                    $query->select('category_id');
                }
            ])
            ->first();
    }
}