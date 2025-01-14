<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    //
    public function books(): HashMany
    {
        return $this->HasMany(publisher::class);
    }

    protected $fillable = [
        'nama_penerbit',
    ];
}
