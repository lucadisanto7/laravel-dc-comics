<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
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
            'title' => 'required|max:255',
            'thumb' => 'max:255',
            'price' => 'required|max:10',
            'sale_date' => 'required|date',
            'type' => 'required|max:255',
        ], [
            'title.required' => 'Inserisci il titolo',
            'title.max' => 'Il titolo puo essere lungo al massimo :max',
            'thumb.max' => 'Il link puo essere lungo al massimo :max',
            'price.required' => 'Inserisci il prezzo',
            'price.max' => 'Il prezzo puo essere lungo al massimo :max',
            'sale_date.required' => 'Inserisci la data',
            'sale_date.max' => 'la data deve essere espressa in un formato valido',
            'type.required' => 'Inserisci il tipo',
            'type.max' => 'Il tipo puo essere lungo al massimo :max',
        ]);
        $forma_data = $request->all();
        $new_comic = new Comic();

        $new_comic = new Comic();
            $new_comic->title = $form_data['title'];
            $new_comic->description = $form_data['description'];
            $new_comic->thumb = $form_data['thumb'];
            $new_comic->price = $form_data['price'];
            $new_comic->sale_date = $form_data['sale_date'];
            $new_comic->type = $form_data['type'];
            $new_comic->artists = $form_data['artists'];
            $new_comic->writers = $form_data['writers'];
            $new_comic->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form_data = $request->all(); 

        $comic-> update($form_data);
        return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
