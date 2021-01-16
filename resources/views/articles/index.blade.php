@extends("layouts.app")

@section("content")
    <div class="container">
        @if($errors->any())
        <div class="alert alert-warning">
            <ol>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ol>
        </div>
        @endif

        @if(session('info'))
        <div class="alert alert-info">
            {{ session('info') }}
        </div>
        @endif
        
        <div class="mb-3">{{ $articles->links() }}</div>

        @foreach($articles as $article)
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                
                <div class="card-subtitle mb-2 text-muted small">
                    By {{ $article->user->name }},
                    {{ $article->created_at->diffForHumans() }}
                </div>

                <p class="card-text">{{ $article->body }}</p>
                <a class="card-link" href="{{ url("/articles/detail/$article->id") }}">View Detail &raquo;</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection