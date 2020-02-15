<?php

namespace App\Http\Controllers;
use App\Musulman;
use Illuminate\Http\Request;

class MusulmanController extends Controller
{
    public function blog($id = null) 
    {
        if($id)
        {
            $relg = Religion::orderBy('created_at','desc')
                            
                            ->paginate(2);
        }else
        {
            $relg = Religion::orderBy('created_at','desc')
                            
                            ->paginate(2);
        }
        $types = Type::all();

        return view('religion.blog',['id' => $id , 'myRelgs' => $relg , 'myTypes' =>$types]);
    }
}
