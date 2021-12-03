@extends('app')

@section('content')
    <div class="row">
        <div class="col-4">
            <img src="{{ $media->image }}" alt="">
        </div>
        <div class="col-8">
            <h2 class="text-white text-left">{{ $media->titre }}</h2>
            <p class="text-white text-left">{{ $media->annee }}</p>
            <span> {{ $media->description }}</span>
            <ul class="list-group list-group-flush">
                @if (count($media->comments))
                    @foreach ($media->comments as $comment)
                        <li class="list-group-item"><b>{{ $comment->user->name }}: </b>{{ $comment->content }}
                            @auth
                                <form action="{{ route('comments.destroy', $comment->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-link text-danger">Delete</button>
                                </form>
                            @endauth
                        </li>
                    @endforeach
                @else
                        No comments!
                @endif
            </ul>
            <form action="{{ url('/movies/'.$media->id_media.'/comments') }}" method="POST">
                @csrf
                <input type="text" name="comment" class="form-control" placeholder="say something...">
                <button type="submit" class="btn btn-primary mt-2 float-right">Comment</button>
            </form>
        </div>
    </div>



@endsection
