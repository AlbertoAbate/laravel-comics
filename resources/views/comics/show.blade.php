@extends ('layout/main')

@section('content')
    <main>
        <section class="comics-detail">
            <div class="container">
                <img src="{{ asset('img/cover-home.jpg') }}" alt="">
            </div>
        </section>
        <section class="details">
            <div class="container">
                <h1> {{ $comic['title'] }} </h1>
            </div>
        </section>
    </main>    
@endsection