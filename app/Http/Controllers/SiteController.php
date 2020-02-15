<?php

namespace App\Http\Controllers;

use App\Post , App\Category , App\Contact;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')
        ->whereStatus('PUBLISHED')
        ->take(6)
        ->get();
        return view('blog.index' ,['myPosts' => $posts ]);
    }
    public function blog($id = null) 
    {
        if($id)
        {
            $posts = Post::orderBy('created_at','desc')
                            ->whereStatus('PUBLISHED')
                            ->whereCategoryId($id)
                            ->paginate(2);
        }else
        {
            $posts = Post::orderBy('created_at','desc')
                            ->whereStatus('PUBLISHED')
                            
                            ->paginate(2);
        }
        $categories = Category::all();

        return view('blog.blog',['id' => $id , 'myPosts' => $posts ,'myCategories' =>$categories]);
    }

    public function show($slug)
    {
        $post = Post::whereSlug($slug)->first();
        $post->nb_visite++;

        $post->save();

        return view('blog.show' , ['post' => $post]);
    }
    public function store(Request $request)
    {   
        $this->validate($request ,[ 
    		
    		'email'=> 'required|email',
            'sujet' => 'required',
    		'message' => 'required'
    	]);
           $contact = new Contact();
           $contact->sujet = $request->input('sujet');
           $contact->email = $request->input('email');
           $contact->message = $request->input('message');

           $contact->save();

           return redirect('/contact')->with('success', 'Le message a été bien envoyé');
    }
}
