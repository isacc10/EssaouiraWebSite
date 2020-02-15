<?php

namespace App\Http\Controllers;
use App\Argan;
use Illuminate\Http\Request;


class ArganController extends Controller
{
    
    public function blog($id = null) 
    {
        if($id)
        {
            $argans = Argan::orderBy('created_at','desc')
                            ->whereStatus('PUBLISHED')
                            ->paginate(20);           
        }
        else
        {
            $argans = Argan::orderBy('created_at','desc')
                            ->whereStatus('PUBLISHED')
                            ->paginate(20);
        
        }
        return view('arganier.desc',['id' => $id , 'myArgans' => $argans ]);
        
    }

        
}
