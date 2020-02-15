@include('partials.navbar')
    <!-- END header -->
    <title>Coopératives d'Arganier</title> 

            
    <!-- END section -->

    <section class="site-section py-sm">
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
                                    <img src="{{ asset('storage/'.$cooperatives->image) }}" alt="Image placeholder" >
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

                        <div class="row">
                                <div class="col-md-12 text-center">
                                    <nav aria-label="Page navigation" class="text-center">
                                    <ul class="pagination">
                                            {{ $myCooperatives->links() }}
                                    </ul>
                                    </nav>
                                </div>
                        </div>



                                    <!-- END post -->

                                    
                                    <!-- END post -->
                                    
                    </div>
                    
                   
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>