@include('partials.navbar')
<title>Monument Historique</title>

    <div class="container">
      
      <div class="row blog-entries">
                <div class="col-md-12 text-right">
                        <a href="{{ url('/blog') }}">Retour</a>
                </div>
            <div class="col-md-12 col-lg-8 main-content">
                    <h1 class="mb-4">{{ $post->title }}</h1>
                    
                    <div class="post-meta">
                        
                        <span class="mr-2">{{ $post->created_at }}</span> &bullet;
                        <span class="ml-2">Culture<span class="fa fa-comments"></span></span>
                        
                    </div>

                    
                    <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}"  style="height : 200px ; width : 500px" >  
                    
                    
                    <div class="post-content-body"style="text-align: justify ; color : black; font-family : Arial">
                           
                            {!! $post->body !!}
                    </div>
            </div>
      </div>
    </div>

  