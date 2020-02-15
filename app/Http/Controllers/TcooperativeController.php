<?php

namespace App\Http\Controllers;
use App\Tcooperative;
use Illuminate\Http\Request;

class TcooperativeController extends Controller
{
    /*public function index()
    {
        $cooperatives = Tcooperative::orderBy('created_at','desc')
       
        ->take(6)
        ->get();
        return view('coopargan.index' ,['myCooperatives' => $cooperatives ]);
    }*/
    public function blog($id = null) 
    {
        if($id)
        {
            $tcooperatives = Tcooperative::orderBy('created_at','desc')
                            
                            
                            ->paginate(4);
        }else
        {
            $tcooperatives = Tcooperative::orderBy('created_at','desc')
                           
                            ->paginate(4);
        }
        

        return view('coopthuya.blogt',['id' => $id , 'myTcooperatives' => $tcooperatives]);
    }

    public function show($slug)
    {
        $tcooperative = Tcooperative::whereSlug($slug)->first();
       

        $tcooperative->save();

        return view('coopthuya.showt' , ['tcooperative' => $tcooperative]);
    }
}
