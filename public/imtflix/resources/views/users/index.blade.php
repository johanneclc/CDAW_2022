@extends('template')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('gestion_utilisateurs.create') }}"> Ajouter un utilisateur</a>
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
            <th>Nom</th>
            <th>Prénom</th>
            <th>Mail</th>
            <th>Role</th>
            <th>Genre</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td></td>

            <td></td>
            <td>
                <form action="{{ route('gestion_utilisateurs.destroy',$user->id_user) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('gestion_utilisateurs.show',$user->id_user) }}">
                        <i class="fas fa-eye"></i>
                        Show
                    </a>

                    <a class="btn btn-primary" href="{{ route('gestion_utilisateurs.edit',$user->id_user) }}">
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

    {{-- {!! $users->links() !!} --}}


@endsection
