<?php

namespace App\Http\Controllers;

use App\Proyect;
use App\Http\Requests\ProyectRequest;
use Illuminate\Http\Request;

class ProyectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('proyects.index')
        ->with('proys', Proyect::paginate(9)
        ->setPath('proyects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proys = Proyect::all();
        return view('proyects.create')->with('proys', $proys);
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
        $proys = new Proyect;
        $proys->imagen    = "imgs/".$file;
        $proys->titulo    = $request->input('titulo');
        $proys->contenido = $request->input('contenido');
        if($proys->save()) {
            return redirect('proyects')
                    ->with('status', 'La Noticia '.$proys->titulo.' se Adiciono con Exito!');
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
        return view('proyects.show')->with('proys', Proyect::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('proyects.edit')->with('proys', Proyect::find($id));
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
        $proys = Proyect::find($id);
        if ($request->hasFile('imagen')) {
            $file = time().'.'.$request->imagen->extension();
            $request->imagen->move(public_path('imgs'), $file);
            $proys->imagen = "imgs/".$file;
        }
        $proys->titulo     = $request->input('titulo');
        $proys->contenido  = $request->input('contenido');

        if($proys->save()){
            return redirect('proyects')
                ->with('status', 'El Proyecto '.$proys->titulo.' se actualizo con Exito.');
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
        $proys = Proyect::find($id);
        if($proys->delete()){
            return redirect('proyects')
                ->with('status', 'El Proyecto '.$proys->titulo.' se elimino con Exito.');
        };
    }
}
