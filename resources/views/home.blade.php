@extends ('layout/main')

@section('content')
    <main>
        <section class="first-section">
            <div class="container">
                <img src="{{ asset('img/cover-home.jpg') }}" alt="">
            </div>
        </section>
        <section class="second-section">
            <div class="container">
                <ul class="comics-list">
                    @foreach ($comics as $comic)
                        <li>
                            <a href="{{ route('comic-detail', $comic['id']) }}">
                                <img src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}">
                                <h3>{{ $comic['title'] }}</h3>
                            </a>
                        </li>
                    @endforeach 
                 </ul>
            </div>
        </section>
    </main>    
@endsection