<?php

namespace App\Http\Controllers;
use App\Religion , App\Type;
use Illuminate\Http\Request;

class ReligionController extends Controller
{
    public function index()
    {
        $relg = Religion::orderBy('created_at','desc')
        
        ->take(6)
        ->get();
        return view('religion.index' ,['myRelgs' => $relg ]);
    }
    public function blog($id = null) 
    {
        if($id)
        {
            $relg = Religion::orderBy('created_at','desc')
                            ->whereTypeId($id)
                            ->paginate(2);
        }else
        {
            $relg = Religion::orderBy('created_at','desc')
                            
                            ->paginate(2);
        }
        $types = Type::all();

        return view('religion.blog',['id' => $id , 'myRelgs' => $relg , 'myTypes' =>$types]);
    }
    

    public function show($slug)
    {
        $relg = Religion::whereSlug($slug)->first();
        $types= Type::all();
        $relg->save();

        return view('religion.show' , ['relg' => $relg ,'myTypes' =>$types ]);
    }
   /* public function store(Request $request)
    {   
           $contact = new Contact();
           $contact->sujet = $request->input('sujet');
           $contact->email = $request->input('email');
           $contact->message = $request->input('message');

           $contact->save();

           return redirect('/contact')->with('success', 'Le message a été bien envoyé');
    }*/
}
