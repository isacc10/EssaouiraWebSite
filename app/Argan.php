<?php

namespace App;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class Argan extends Model
{
    use Spatial;

    protected $spatial = ['point'];
   
    
}
