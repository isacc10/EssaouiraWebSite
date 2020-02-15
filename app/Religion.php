<?php

namespace App;
use App\Type;
use Illuminate\Database\Eloquent\Model;


class Religion extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
