@extends('template')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-white">Modifier l'utilisateur {{$user->name}}</h2>
            </div>

        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Vous avez des erreurs!! .<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('changer_role',$user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="text-white">Rôle :</strong>
                <select name="role" id="role" class="form-select form-control" aria-label="Default select example">
                    @foreach($roles as $role)
                        <option  value="{{ $role->id_role_utilisateur }}">
                            {{ $role->nom_role_utilisateur }}
                        </option>
                    @endforeach
                  </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Retour</a>
            <button type="submit" class="btn btn-primary">Confirmer</button>
        </div>
    </div>

    </form>
@endsection
