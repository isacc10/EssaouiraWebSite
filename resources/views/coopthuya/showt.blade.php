@extends('master')
<title>Coopératives de bois de thuya</title> 
@section('content')
  

   
   
    
        <div class="container">
          
          <div class="row blog-entries">
                    <div class="col-md-12 text-right">
                            <a href="{{ url('/blogt') }}">Retour</a>
                    </div>
                <div class="col-md-12 col-lg-8 main-content">
                        <h1 class="mb-4">{{ $tcooperative->nom }}</h1>
                        
                        <div class="post-meta">
                            
                           
                            
                        </div>
    
                        
                        <img src="{{ asset('storage/'.$tcooperative->image) }}" alt="{{ $tcooperative->title }}"  style="height : 200px ; width : 500px" >  
                        
                        <br>
                        <div class="post-content-body"style="text-align: justify ; color : black; font-family : Arial">
                               
                           Nom :     {{ $tcooperative->nom }} <br>
                           Adresse :      {{ $tcooperative->adresse }} <br>
                           Description :      {{ $tcooperative->description }} <br>
                           Téléphone :      {{ $tcooperative->phone }} <br>
                           Site Web :      {{ $tcooperative->website }} <br>    
                        </div>
                </div>
          </div>
        </div>



@endsection