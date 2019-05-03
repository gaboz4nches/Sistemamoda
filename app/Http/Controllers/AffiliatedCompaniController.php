<?php

namespace App\Http\Controllers;

use App\AffiliatedCompani;
use App\Http\Requests\AffiliatedCompaniRequest;
use Illuminate\Http\Request;

class AffiliatedCompaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('affiliated_companies.index')
        ->with('affis', AffiliatedCompani::paginate(9)
        ->setPath('affiliated_companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $affis = AffiliatedCompani::all();
        return view('affiliated_companies.create')->with('affis', $affis);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('logo')) {
            $file = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('imgs'), $file);
        }
        $affis = new AffiliatedCompani;
        $affis->logo      = "imgs/".$file;
        $affis->contacto  = $request->input('contacto');
        $affis->direccion = $request->input('direccion');
        $affis->web = $request->input('web');
        if($affis->save()) {
            return redirect('affiliated_companies')
                    ->with('status', 'La Instituciom se Adiciono con Exito!');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('affiliated_companies.edit')->with('affis', AffiliatedCompani::find($id));
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
        $affis = AffiliatedCompani::find($id);
        if ($request->hasFile('logo')) {
            $file = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('imgs'), $file);
            $affis->logo = "imgs/".$file;
        }
        $affis->contacto     = $request->input('contacto');
        $affis->direccion  = $request->input('direccion');
        $affis->web  = $request->input('web');

        if($affis->save()){
            return redirect('affiliated_companies')
                ->with('status', 'La Institucion se actualizo con Exito.');
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
        $affis = AffiliatedCompani::find($id);
        if($affis->delete()){
            return redirect('affiliated_companies')
                ->with('status', 'La Institucion se elimino con Exito.');
        };

    }
}