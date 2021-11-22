<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\category;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name = null)
    {
        $movies = Movie::with('category')->latest()->paginate(5);

    
        return view('movies.index',compact('movies'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    // $query = $name ? category::whereName($name)->firstOrFail()->movies() : Movie::query();
    // $movies = $query->withTrashed()->oldest('title')->paginate(5);
    // $categories = category::all();
    // return view('index', compact('movies', 'categories', 'name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = category::all();
        return view('movies.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'annee' => 'required',
            'categorie' => 'required',
            'category_id' => 'required',
        ]);

    
        Movie::create($request->all());
     
        return redirect()->route('movies.index')->with('success','Film ajouté avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
      //  $category = $movie->category->name; 
        return view('movies.show',compact('movie', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit',compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'annee' => 'required',
            'categorie' => 'required',
        ]);
    
        $movie->update($request->all());
    
        return redirect()->route('movies.index')->with('success','film modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
    
        return redirect()->route('movies.index')->with('success','film supprimé avec success');
    }
}
