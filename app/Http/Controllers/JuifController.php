<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuifController extends Controller
{
    public function juif($id = null) 
    {
        if($id)
        {
            $relgi = Religion::orderBy('created_at','desc')
                            
                            ->paginate(2);
        }else
        {
            $relgi = Religion::orderBy('created_at','desc')
                            
                            ->paginate(2);
        }
        $types = Type::all();

        return view('religion.juif',['id' => $id , 'myRelgis' => $relgi ]);
    }
}
