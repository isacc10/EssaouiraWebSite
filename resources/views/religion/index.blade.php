@include('partials.navbar')

<div class="row">
    <div class="col-md-12">
    <h1>Welcome</h1>
    </div>
</div>

<div class="row">

    @foreach($myRegls as $relg)
    <div class="col-md-4 my-2">
        <div class="card">
            <img class="card-img-top" src="{{ asset('/storage/'.$relg->image) }}" alt="">
            <div class="card-body">
                <h4 class="card-title">{{ $relg->titre }}</h4>
                <p class="card-text">{{ str_limit($relg->excerpt,100) }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

