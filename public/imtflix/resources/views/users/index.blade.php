@extends('template')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Ajouter un film</a>
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
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>
                    @foreach($user->categories as $categorie)
                        {{$categorie->nom_categorie}}
                    @endforeach
            </td>
            <td>{{ $user->titre }}</td>
            <td>{{ $user->description }}</td>
            <td>{{ $user->annee }}</td>

            <td>{{ $user->type->nom_type }}</td>
            <td>
                <form action="{{ route('users.destroy',$user->id_user) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('users.show',$user->id_user) }}">
                        <i class="fas fa-eye"></i>
                        Show
                    </a>

                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id_user) }}">
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

    {!! $users->links() !!}

@endsection
