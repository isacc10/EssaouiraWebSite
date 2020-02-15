@extends('master')
<title>Arganier</title>
@section('content')

<div class="row">
    <div class="col-md-8">
        
     @foreach($myArgans as $argans)
        <div class="col-lg-12">
                        <h1 ><b>{{ $argans->titre }}</b></h2>
                            <img class="card-img-top" src="{{ asset('storage/'.$argans->image) }}" >
                            <div style="text-align: justify ; color : black; font-family : Arial">
                            {!! $argans->body !!}
                            </div>
                            
                            <div>
                                   
                            </div>

                           
                                
                                            
        @endforeach
    </div>  


@endsection