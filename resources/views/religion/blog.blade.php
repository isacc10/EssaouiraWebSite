


@include('partials.navbar')
<title>Religion</title>
<section class="site-section py-sm">
        <div class="container">
          <div class="row">
            
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              
  
              
  
  
                <div class="row mb-5 mt-5">
  
                  <div class="col-md-12">
                    <h2 class="mb-4">Religions</h2>
                  </div>
            
                  <div class="col-md-12">
                        @foreach($myRelgs as $relg)
                    <div class="post-entry-horzontal">
                      <a href="{{ url('/relgion/'.$relg->slug) }}">
                        <img  src="{{ asset('storage/'.$relg->image) }}" style="width : 100px; height :100px;">
                        <span class="text">
                          <div class="post-meta">
                            <span class="category">{{ ($relg->type)->name }}</span>
                            <span class="mr-2"> {{ $relg->created_at }} </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                          </div>
                          <h2>{{ $relg->titre }}</h2>
                          <p> {!! str_limit($relg->description , 100) !!} </p>
                        </span>
                      </a>
                    </div>
                    @endforeach
                  <!-- END post -->
  
                 
                  <!-- END post -->
  
                  
                  <!-- END post -->
  
                </div>
              </div>
              
              <div class="row">
                    <div class="col-md-12 text-center">
                      <nav aria-label="Page navigation" class="text-center">
                        <ul class="pagination">
                          {{ $myRelgs->links() }}
                        </ul>
                      </nav>
                    </div>
                  </div>
              
  
            </div>
            
            <div class="col-md-12 col-lg-4 sidebar">
                    
                            
                            <!-- END sidebar-box -->
                            
                            <!-- END sidebar-box -->  
                            
                            <!-- END sidebar-box -->
                
                            <br><br><br>
                                    <h2> liste des categories </h2>
                                    <ul class="list-group">
                                    
                                        <li class="list-group-item @if(!$id) active @endif "><a class="list-group-item-action" href="{{ url('/religion/') }}">All</a></li>
                            
                                        @foreach($myTypes as $type)
                            
                                        <li class="list-group-item d-flex justify-content-between align-items-center @if($type->id == $id) active @endif">
                                        <a class="list-group-item-action" href="{{ url('/religion/'.$type->id) }}"> {{ $type->name }}</a>
                                           
                                        </li>
                                        
                                        @endforeach
                                    </ul>

                              </div>
                            <!-- END sidebar-box -->
                
                            
                          <!-- END sidebar -->
                
                        </div>
                      </div>  
  
            </div>
          
            
          </div>
        
        
          
        </div>
</section>
