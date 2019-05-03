<?php

namespace App\Http\Controllers;

use App\Tiding;
use App\Http\Requests\TidingRequest;
use Illuminate\Http\Request;

class TidingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tidings.index')
        ->with('tids', Tiding::paginate(9)
        ->setPath('tidings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tids = Tiding::all();
        return view('tidings.create')->with('tids', $tids);
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
        $tids = new Tiding;
        $tids->imagen    = "imgs/".$file;
        $tids->titulo    = $request->input('titulo');
        $tids->contenido = $request->input('contenido');
        if($tids->save()) {
            return redirect('tidings')
                    ->with('status', 'La Noticia '.$tids->titulo.' se Adiciono con Exito!');
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
        return view('tidings.show')->with('tids', Tiding::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('tidings.edit')->with('tids', Tiding::find($id));
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
        $tids = Tiding::find($id);
        if ($request->hasFile('imagen')) {
            $file = time().'.'.$request->imagen->extension();
            $request->imagen->move(public_path('imgs'), $file);
            $tids->imagen = "imgs/".$file;
        }
        $tids->titulo     = $request->input('titulo');
        $tids->contenido  = $request->input('contenido');

        if($tids->save()){
            return redirect('tidings')
                ->with('status', 'La Noticia '.$tids->titulo.' se actualizo con Exito.');
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
        $tids = Tiding::find($id);
        if($tids->delete()){
            return redirect('tidings')
                ->with('status', 'El Programa '.$tids->titulo.' se elimino con Exito.');
        };
    }
}
