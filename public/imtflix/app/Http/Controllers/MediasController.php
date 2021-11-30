<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Categorie;
use App\Models\CategorieMedia;
use App\Models\Type;
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
        $medias = Media::with('categories','type')->latest()->paginate(5);

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
        $types = Type::all();

        return view('medias.create',compact('categories','types'));
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
            // 'image' => 'required',
            'id_type'=> 'required',
        ]);

        Media::create($request->all());
        $id_media = Media::latest()->first()->id_media;;

        $categories = Categorie::all();

        foreach($categories as $categorie){
            if($request->input($categorie->id_categorie)){
                CategorieMedia::create(['id_media'=>$id_media,
                'id_categorie'=> $categorie->id_categorie]);
            }
        }

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
        $media = $media->load('categories');

        return view('medias.show',compact('media'));
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
        //attention destray aussi le donnée de categorie_media

        return redirect()->route('medias.index')->with('success','film supprimé avec success');
    }

    public function afficherFilms(){
        $films = Media::where('id_type',"1")->orderBy('annee','desc')->get();
        return view("films", compact('films'));
    }

    public function afficherSeries(){
        $series = Media::where('id_type',"2")->orderBy('annee','desc')->get();
        return view("series", compact('series'));
    }

    public function afficherAnimes(){
        $animes = Media::where('id_type',"3")->orderBy('annee','desc')->get();
        return view("animes", compact('animes'));
    }
    public function detailfilm(){
        return view('detailfilm');
    }
}
