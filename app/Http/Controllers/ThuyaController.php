<?php

namespace App\Http\Controllers;
use App\Thuya;
use Illuminate\Http\Request;

class ThuyaController extends Controller
{
    public function blog($id = null) 
    {
        if($id)
        {
            $thuyas = Thuya::orderBy('created_at','desc')
                            ->whereStatus('PUBLISHED')
                            
                            ->paginate(2);
        }else
        {
            $thuyas = Thuya::orderBy('created_at','desc')
                            ->whereStatus('PUBLISHED')
                            ->paginate(2);
        }
      

        return view('thuya.desct',['id' => $id , 'myThuyas' => $thuyas ]);
    }
}
