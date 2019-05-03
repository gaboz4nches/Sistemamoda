<?php

namespace App\Http\Controllers;

use App\ImageGallery;
use App\Http\Requests\ImageGalleryRequest;
use Illuminate\Http\Request;

class ImageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imgas = ImageGallery::all();
        return view('images_gallery.index')->with('imgas', $imgas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $imgas = ImageGallery::all();
        return view('images_gallery.create')->with('imgas', $imgas);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('imagen')) {
            $file = time().'.'.$request->imagen->extension();
            $request->imagen->move(public_path('imgs'), $file);
        }
        $imgas = new ImageGallery;
        $imgas->imagen    = "imgs/".$file;
        $imgas->titulo    = $request->input('titulo');
        $imgas->contenido = $request->input('contenido');
        if($imgas->save()) {
            return redirect('images_gallery')
                    ->with('status', 'El Evento '.$imgas->titulo.' se Adiciono con Exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('images_gallery.show')->with('imgas', ImageGallery::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('images_gallery.edit')->with('imgas', ImageGallery::find($id));
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
        $imgas = ImageGallery::find($id);
        if ($request->hasFile('imagen')) {
            $file = time().'.'.$request->imagen->extension();
            $request->imagen->move(public_path('imgs'), $file);
            $imgas->imagen = "imgs/".$file;
        }
        $imgas->titulo     = $request->input('titulo');
        $imgas->contenido  = $request->input('contenido');

        if($imgas->save()){
            return redirect('images_gallery')
                ->with('status', 'El Evento '.$imgas->titulo.' se actualizo con Exito.');
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imgas = ImageGallery::find($id);
        if($imgas->delete()){
            return redirect('images_gallery')
                ->with('status', 'El Evento '.$imgas->titulo.' se elimino con Exito.');
        };
    }
}
