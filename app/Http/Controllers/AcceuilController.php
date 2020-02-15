<?php

namespace App\Http\Controllers;
use App\Argan, App\Category , App\Contact , App\Cooperative ,
 App\Post , App\Religion , App\Tcooperative , App\Thuya , App\Type;
use Illuminate\Database\Eloquent\Collection; 

use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    public function show($id = null) 
    {
            $argans = Argan::orderBy('created_at','desc')
                            ->whereStatus('PUBLISHED')
                            ->take(1)
                            ->get();

            
            
            $relg = Religion::orderBy('created_at','desc')
                            ->whereStatus('PUBLISHED')
                            ->take(1)
                            ->get();
        
            $cooperatives = Cooperative::orderBy('created_at','desc')
                            ->take(2)
                            ->get();

            $posts = Post::orderBy('created_at','desc')
                            ->whereStatus('PUBLISHED')
                            ->take(1)
                            ->get();
        
            $tcooperatives = Tcooperative::orderBy('created_at','desc')
                            
                            ->paginate(2);
            $types = Type::all();
            
            $categories = Category::all();

                            

        return view('welcome',['id' => $id , 'myArgans' => $argans  , 'myRelgs' => $relg ,
         'myCooperatives' => $cooperatives , 'myPosts' => $posts ,'myCategories' =>$categories ,
         'myTcooperatives' => $tcooperatives , 'myTypes' =>$types]);
    }
    
    /*public function blogr($id = null) 
    {
        
            $relge = Religion::orderBy('created_at','desc')
                            ->whereTypeId($id)
                            ->paginate(1);
        
        $types = Type::all();

        return view('welcome',['id' => $id , 'myRelges' => $relge , 'myTypes' =>$types]);
    }*/
    
}
