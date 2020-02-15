@extends('master')
<title>Contact</title>
@section('content')

@if(session('success'))
<div class="row">
    <div class="col-md-6 mx-auto text-center">
    <div class="alert alert-success">{{ session('success') }}</div>
    </div>
</div>
@endif
<div class="row" >
    <!--<div class="col-md-3"></div>-->
    <div class="col-md-6">
        <form action="{{ url('/contact') }}" method="POST">
            @csrf

            <div class="form-group @if($errors->get('sujet')) alert alert-warning alert-dismissible fade show  @endif">
            <label for="sujet">Sujet</label>
            <input type="text" name="sujet" id="sujet" class="form-control" placeholder="" aria-describedby="helpId" value="{{ old('sujet') }}">
                    @if($errors->get('sujet'))
                        @foreach($errors->get('sujet') as $message)
                            <li> {{$message}}</li>
                        @endforeach
                    @endif
            </div>

            <div class="form-group @if($errors->get('email')) alert alert-warning alert-dismissible fade show @endif">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId" value="{{ old('email') }}">
                @if($errors->get('email'))
                    @foreach($errors->get('email') as $message)
                        <li> {{$message}}</li>
                    @endforeach
                @endif
            </div>

            <div class="form-group @if($errors->get('message')) alert alert-warning alert-dismissible fade show @endif">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control" value="{{ old('message') }}"></textarea>
                @if($errors->get('message'))
                    @foreach($errors->get('message') as $message)
                        <li> {{$message}}</li>
                    @endforeach
                @endif            
            </div>

            <button class="btn btn-primary btn-block">Envoyer</button>
        </form>
    </div>
    <div class="col-md-6" style="text-align :center;">
        <h1 >Contactez-Nous  </h1>
        <br><br>
        <h3>  &#64; EMAIL :  {{setting('contact.email')}} </h3>
        <h3>  &#9742; TELEPHONE :  {{setting('contact.Phone')}} </h3>
        <br><br><br>
        <p style="text-align :justify;">
            &#9888;
            Pour ajouté vos coopératives d'argan ou de bois de thuya contactez le support du site pour vous-aidez .
        </p>
    </div>
</div>
@endsection