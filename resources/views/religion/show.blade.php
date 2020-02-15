@include('partials.navbar')
<title>Religion</title>


    <section class="site-section py-lg">
            
        <div class="container">
                
          <div class="row blog-entries">
               
            <div class="col-md-12 col-lg-8 main-content">
              <h1 class="mb-4">{{ $relg->titre }}</h1>
              <div class="post-meta">
                 
                          <span class="mr-2">Créé le {{ $relg->created_at }} </span>
                         
                        </div>
              <div class="post-content-body">
                <img src="{{ asset('storage/'.$relg->image) }}" alt="" style="height : 300px ; width : 500px">
              <div class="row mb-5" style="text-align: justify ; color : black; font-family : Arial">
                {!! $relg->body !!}
              </div>
              </div>
            </div>
          </div>
        </div>
    </section>
