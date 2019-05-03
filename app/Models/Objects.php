<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objects extends Model
{
    public $timestamps = false;
    
    public function getItem($id)
    {
        return Objects::where('id', $id)->get();
    }
}
