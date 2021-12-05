@extends('app')

@section('content')
    <div class="row">
        <div class="col-4">
            <img src="{{ $media->image }}" alt="">
            <br>
            <span class="date text-white">{{ $count_jaime }}  <i class="fas fa-heart"></i></span>

        </div>
        
        <div class="col-8">
            <h2 class="text-white text-left">{{ $media->titre }}</h2>
            <p class="text-white text-left">{{ $media->annee }}</p>
            <span> {{ $media->description }}</span>
            <form action="{{url('addLike')}}">
            <textarea name="id" style="display:none">
            <?php echo $media->id_media; ?></textarea>
            
            @if($userRole['role']!=0)
                <button class="btn btn-primary" type="submit">Like</button>
            @endif
        </form>
            <ul class="list-group list-group-flush">
                @if (count($media->comments))
                    @foreach ($media->comments as $comment)
                        <li class="list-group-item text-left"><b>{{ $comment->user->name }} : </b>{{ $comment->content }}
                            <p class="text-grey text-right"><small>{{ $comment->updated_at }}</small> </p>
                            @auth
                                <form action="{{ route('comments.destroy', $comment->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    @if($comment->user->id == $userRole["user"]->id || $userRole["role"] ==2 || $userRole["role"] ==1)
                                        <button type="submit" class="btn btn-link text-danger text-right">Supprimer</button>
                                    @endif
                                </form>
                            @endauth
                        </li>
                    @endforeach
                @else
                        No comments!
                @endif
            </ul>
            @if($userRole['role']!=0)
                <form action="{{ url('/movies/'.$media->id_media.'/comments') }}" method="POST">
                    @csrf
                    <input type="text" name="comment" class="form-control" placeholder="say something...">
                    <button type="submit" class="btn btn-primary mt-2 float-right">Comment</button>
                </form>
            @endif
        </div>
    </div>



@endsection
