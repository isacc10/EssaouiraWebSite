@include('partials.navbar')
    <!-- END header -->

   <title>Coopératives de bois de thuya</title> 
    <!-- END section -->

    <section class="site-section py-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-4">Les cooperatives de bois de thuya</h2>
          </div>
        </div>
        <div class="row blog-entries">
            
          <div class="col-md-12 col-lg-8 main-content">
              
            <div class="row">
              @foreach($myTcooperatives as $tcooperative)
              <div class="col-md-6">
                
                <a href="{{ url('/showt/'.$tcooperative->slug) }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="{{ asset('storage/'.$tcooperative->image) }}" alt="Image placeholder" style="width :350px; height :270px;">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Argan</span>
                      <span class="mr-2">{{ $tcooperative->created_at }} </span> &bullet;
                      
                    </div>
                    <h2>{{ $tcooperative->nom }}</h2>
                  </div>
                </a>
                
              </div>
              @endforeach
            </div>
                      <div class="row">
                          <div class="col-md-12 text-center">
                            <nav aria-label="Page navigation" class="text-center">
                              <ul class="pagination">
                                  {{ $myTcooperatives->links() }}
                              </ul>
                            </nav>
                          </div>
                        </div>
          </div>
         
        </div>
        
        </div>
        
      </div>
    </section>
     
              <!--<div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="images/img_6.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Travel</span>
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>

              <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="images/img_7.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Travel, Asia</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>
              <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="images/img_8.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Travel</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>

              <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="images/img_9.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Travel</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>
              <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="images/img_10.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Lifestyle</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>

              <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="images/img_11.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Lifestyle</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>
              <div class="col-md-6">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <img src="images/img_12.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Food</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 text-center">
                <nav aria-label="Page navigation" class="text-center">
                  <ul class="pagination">
                    <li class="page-item  active"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>
              </div>
            </div>-->


            
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