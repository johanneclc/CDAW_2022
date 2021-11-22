<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\category;
use Illuminate\Http\Request;

class MediasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name = null)
    {
        $medias = Media::with('category')->latest()->paginate(5);


        return view('medias.index',compact('medias'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    // $query = $name ? category::whereName($name)->firstOrFail()->medias() : Media::query();
    // $medias = $query->withTrashed()->oldest('title')->paginate(5);
    // $categories = category::all();
    // return view('index', compact('medias', 'categories', 'name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = category::all();
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
            'name' => 'required',
            'detail' => 'required',
            'annee' => 'required',
            'categorie' => 'required',
            'category_id' => 'required',
        ]);


        Media::create($request->all());

        return redirect()->route('Medias.index')->with('success','Film ajouté avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $medias
     * @return \Illuminate\Http\Response
     */
    public function show(media $Media)
    {
      //  $category = $medias->category->name;
        return view('medias.show',compact('media', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $medias
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $medias)
    {
        return view('medias.edit',compact('medias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $medias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $medias)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'annee' => 'required',
            'categorie' => 'required',
        ]);

        $medias->update($request->all());

        return redirect()->route('medias.index')->with('success','film modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $medias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $medias)
    {
        $medias->delete();

        return redirect()->route('medias.index')->with('success','film supprimé avec success');
    }
}
