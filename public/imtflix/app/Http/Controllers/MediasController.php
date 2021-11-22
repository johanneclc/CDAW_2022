<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Categorie;
use Illuminate\Http\Request;

class MediasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::with('getCategoriesOfMedias')->latest()->paginate(5);


        return view('medias.index',compact('medias'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('medias.create',compact('categories'));
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
            'titre' => 'required',
            'description' => 'required',
            'annee' => 'required',
            'image' => 'required',
            'id_categorie' => 'required',
        ]);


        Media::create($request->all());

        return redirect()->route('medias.index')->with('success','Film ajouté avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
      //  $category = $movie->category->name;
        return view('medias.show',compact('media', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        return view('medias.edit',compact('media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'annee' => 'required',
            'id_categorie' => 'required',
        ]);

        $media->update($request->all());

        return redirect()->route('medias.index')->with('success','film modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        $media->delete();

        return redirect()->route('medias.index')->with('success','film supprimé avec success');
    }
}
