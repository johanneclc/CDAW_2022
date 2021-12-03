@extends('template')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('medias.create') }}"> Ajouter un film</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered text-white">
        <tr>
            <th>No</th>
            <th>Catégorie</th>
            <th>Titre</th>
            <th>Déscription</th>
            <th>Année</th>
            <th>Genre</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($medias as $media)
        <tr>
            <td>{{ ++$i }}</td>
            <td>
                    @foreach($media->categories as $categorie)
                        {{$categorie->name}}
                    @endforeach
            </td>
            <td>{{ $media->titre }}</td>
            <td>{{ $media->description }}</td>
            <td>{{ $media->annee }}</td>

            <td>{{ $media->type->nom_type }}</td>
            <td>
                <form action="{{ route('medias.destroy',$media->id_media) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('medias.show',$media->id_media) }}">
                        <i class="fas fa-eye"></i>
                        Show
                    </a>

                    <a class="btn btn-primary" href="{{ route('medias.edit',$media->id_media) }}">
                        <i class="fas fa-pen"></i>
                        Edit
                    </a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $medias->links() !!}

@endsection
