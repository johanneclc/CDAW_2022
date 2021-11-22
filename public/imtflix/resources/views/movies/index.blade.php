@extends('movies.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('movies.create') }}"> Ajouter un film</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nom</th>
            <th>Détails</th>
            <th>Année</th>
            <th>Genre</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($movies as $movie)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $movie->name }}</td>
            <td>{{ $movie->detail }}</td>
            <td>{{ $movie->annee }}</td>

            <td>{{ $movie->category->name }}</td>
            <td>
                <form action="{{ route('movies.destroy',$movie->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('movies.show',$movie->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('movies.edit',$movie->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $movies->links() !!}
      
@endsection