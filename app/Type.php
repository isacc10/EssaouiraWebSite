<?php

namespace App;
use App\Religion;
use Illuminate\Database\Eloquent\Model;


class Type extends Model
{
    public function religions()
    {
        return $this->hasMany(Religion::class);
    }
}
