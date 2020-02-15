@include('partials.navbar')
    <!-- END header -->
<title>ACCEUIL</title>
    <section class="site-section pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="owl-carousel owl-theme home-slider">
              <div>
                @foreach($myArgans as $argans)
                <a href="{{ url('/desc/') }}" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/arganier.png'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      
                      <span class="mr-2"> {{ $argans->created_at }} </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> </span>
                    </div>
                  <h3>{{ $argans->titre }}</h3>
                    <p>{!! str_limit($argans->body , 130) !!}</p>
                  </div>
                </a>
                @endforeach
              </div>
              <div>
                @foreach ($myRelgs as $relg)
                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/cimetiere.jpg'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category"></span>
                      <span class="mr-2">{{ $relg->created_at }} </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> </span>
                    </div>
                  <h3>{{ $relg->titre }}</h3>
                    <p>{!! str_limit($relg->description , 130) !!}</p>
                  </div>
                </a>
                @endforeach
              </div>
              <div>
                @foreach($myPosts as $posts)
                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/dar-souiri.jpg'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      
                      <span class="mr-2">{{ $relg->created_at }} </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h3>{{ $posts->title }}</h3>
                    <p>{!! str_limit($posts->excerpt , 130) !!}</p>
                  </div>
                  @endforeach
                </a>
              </div>
            </div>
            
          </div>
        </div>
        
        
      </div>


    </section>
    <!-- END section -->

    <section class="site-section py-sm">
        <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                        <h2 class="mb-4">Les coopratives de bois de thuya</h2>
                        </div>
                    </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="row">
                        @foreach($myTcooperatives as $tcooperatives)
                            <div class="col-md-6">
                                <a href="{{ url('/showt/'.$tcooperatives->slug) }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                <img src="{{ asset('storage/'.$tcooperatives->image) }}" alt="Image placeholder" style="height :220px ; width :400px;">
                                <div class="blog-content-body">
                                    <div class="post-meta">
                                    <span class="category">Argan</span>
                                    <span class="mr-2">{{ $tcooperatives->created_at }} </span> &bullet;
                                    <span class="ml-2"><span class="fa fa-comments"></span> </span>
                                    </div>
                                    <h2>{{ $tcooperatives->nom }}</h2>
                                </div>
                                </a>
                            </div>
                        @endforeach
                            
                    </div>
                    </div>
                    <div class="col-md-12 col-lg-4 sidebar">
                      
                      <!-- END sidebar-box -->
                      
                      <!-- END sidebar-box -->  
                      
                      <!-- END sidebar-box -->
                    
                        <div class="sidebar-box">
                          <h3 class="heading">Categories</h3>
                          <ul class="categories">
                            @foreach($myTypes as $type)
                            <li><a href="{{ url('/religion/'.$type->id)}}">{{ $type->name }} <span></span></a></li>
                            
                            @endforeach
                            @foreach($myCategories as $category)
                            <li><a href= "{{ url('/blog/'.$category->id) }} "> {{ $category->name }}<span></span></a></li>
                            @endforeach
                            
                          </ul>
                        </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <h2 class="mb-4">Les coopratives d'arganier</h2>
                </div>
            </div>
    <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
            <div class="row">
                @foreach($myCooperatives as $cooperatives)
                    <div class="col-md-6">
                        <a href="{{ url('/showa/'.$cooperatives->slug) }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                        <img src="{{ asset('storage/'.$cooperatives->image) }}" alt="Image placeholder">
                        <div class="blog-content-body">
                            <div class="post-meta">
                            <span class="category">Argan</span>
                            <span class="mr-2">{{ $cooperatives->created_at }} </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> </span>
                            </div>
                            <h2>{{ $cooperatives->nom }}</h2>
                        </div>
                        </a>
                    </div>
                @endforeach
                    
            </div>
            </div>
            
    </div>
    <h2> La Carte d'Essaouira </h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27211.849239186384!2d-9.78005178918508!3d31.510942357832867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdad9a4e9f588ccf%3A0x57421a176d5d7d30!2sEssaouira!5e0!3m2!1sfr!2sma!4v1554329332855!5m2!1sfr!2sma" width="1100" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>

    </section>
            
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="/js/jquery-3.2.1.min.js "></script>
    <script src="{{ asset('js/jquery-migrate-3.0.0.js')}} "></script>
    <script src="{{ asset('js/popper.min.js')}} "></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="/js/owl.carousel.min.js "></script>
    <script src="{{ asset('js/jquery.waypoints.min.js')}} "></script>
    <script src="{{ asset('js/jquery.stellar.min.js')}} "></script>

    
    <script src="js/main.js"></script>
  </body>
</html>