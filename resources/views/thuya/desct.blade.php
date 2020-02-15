@extends('master')
<title>Bois de thuya</title>
@section('content')

<div class="row">
    <div class="col-md-8">
        
        @foreach($myThuyas as $thuyas)
        
                        <h1 >{{ $thuyas->titre }}</h2>
                            <img class="card-img-top" src="{{ asset('storage/'.$thuyas->image) }}" >
                            <div style="text-align : justify">
                            {!! $thuyas->body !!}
                            </div>
                       
                            
                                
                                            
        @endforeach
    </div>
    
    <div class="col-md-4">
            <br><br>
        

    </div>

@endsection