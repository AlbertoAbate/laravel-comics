@extends ('layout/main')

@section('content')
    <main>
        <section class="comics-detail" style="background-image: url({{ $comic['image-hero'] }});">
            <div class="container">
                <img src=" {{ $comic['image-cover'] }} " alt="{{ $comic['title'] }}">
            </div>
        </section>
        <section class="details">
            <div class="container">
                <h1> {{ $comic['title'] }} </h1>
                <div class="price"> {{ $comic['price'] }} </div>
                <div class="text"> {!! $comic['body'] !!} </div>
            </div>
        </section>
    </main>    
@endsection