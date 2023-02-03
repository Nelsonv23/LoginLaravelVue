<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use App\Http\Requests\StoreSongsRequest;
use App\Http\Requests\UpdateSongsRequest;
use Inertia\Inertia;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Se traen todos los registros de DB y se muestran en el index
        $songs = Songs::all();
        return Inertia::render('Songs/Index',['songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSongsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSongsRequest $request)
    {
        //Validamos datos requeridos
        $request-> validate(([
            'title' => 'required',
            'autor' => 'required',
            'album' => 'required'
        ]));
        //Creamos el registro con todos los datos
        $song = new Songs($request->input());
        $song->save();
        return redirect('song');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Songs  $songs
     * @return \Illuminate\Http\Response
     */
    public function show(Songs $songs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Songs  $songs
     * @return \Illuminate\Http\Response
     */
    public function edit(Songs $songs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSongsRequest  $request
     * @param  \App\Models\Songs  $songs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSongsRequest $request, Songs $songs, $id)
    {

        $song = Songs::find($id);
        $song->fill($request->input())->saveOrFail();
        return redirect('song');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Songs  $songs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $song = Songs::find($id);
        $song->delete();
        return redirect('song');
    }
}
