<?php

namespace App\Http\Controllers;
use App\Cooperative;
use Illuminate\Http\Request;

class CooperativeController extends Controller
{
    public function index()
    {
        $cooperatives = Cooperative::orderBy('created_at','desc')
       
        ->take(6)
        ->get();
        
        return view('coopargan.index' ,['myCooperatives' => $cooperatives ]);
    }
    public function blog($id = null) 
    {
        
        if($id)
        {
            $cooperatives = Cooperative::orderBy('created_at','desc')
                            
                            
                            ->paginate(4);
        }else   
        {
            $cooperatives = Cooperative::orderBy('created_at','desc')
                           
                            ->paginate(4);
        }
        

        return view('coopargan.bloga',['id' => $id , 'myCooperatives' => $cooperatives]);
    }

    public function show($slug)
    {
        $cooperatives = Cooperative::whereSlug($slug)->first();
        
        
        $cooperatives->save();

        return view('coopargan.showa' , ['cooperatives' => $cooperatives]);
    }
    
}
