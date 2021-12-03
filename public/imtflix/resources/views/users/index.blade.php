@extends('template')

@section('content')
    <h2 class="text-white"> Gestion des utilisateurs </h2>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Ajouter un utilisateur</a>
            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered text-white">
        <tr>
            <th>Avatar</th>
            <th>Nom</th>
            <th>Mail</th>
            <th>Role</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>
                {{$user->id}}
                <img src="{{asset('chemin_avatar/'.$user->chemin_avatar)}}" alt="">
            </td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role->nom_role_utilisateur }}</td>
            <td>
                <form >

                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">
                        <i class="fas fa-eye"></i>
                        Show
                    </a>

                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">
                        <i class="fas fa-pen"></i>
                        Edit
                    </a>

                    @csrf
                    <!-- @method('DELETE')
                    <button type="submit" class="btn btn-danger" action="{{ route('users.destroy',$user->id) }}" method="POST">
                        <i class="fas fa-trash"></i>
                        Bannir
                    </button> -->
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{-- {!! $users->links() !!} --}}


@endsection
