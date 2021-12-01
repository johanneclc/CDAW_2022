@extends('app')

@section('content')

bonjour 

<h3>Comments</h3>
            <ul class="list-group list-group-flush">
                @if (count($movie->comments))
                    @foreach ($movie->comments as $comment)
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
            <form action="{{ route('movies.comments.store', $movie->id) }}" method="POST">
                @csrf
                <input type="text" name="comment" class="form-control" placeholder="say something...">
                <button type="submit" class="btn btn-primary mt-2 float-right">Comment</button>
            </form>
            
@endsection
