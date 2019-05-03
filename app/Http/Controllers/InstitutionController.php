<!-- <?php

namespace App\Http\Controllers;

use App\Institution;
use App\Http\Requests\InstitutionRequest;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('institutions.index')
        ->with('inst', Institution::paginate(9)
        ->setPath('institutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inst = Institution::all();
        return view('institutions.create')->with('inst', $inst);
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
        $inst = new Institution;
        $inst->imagen    = "imgs/".$file;
        $inst->contacto  = $request->input('contacto');
        $inst->direccion = $request->input('direccion');
        $inst->web = $request->input('web');
        if($inst->save()) {
            return redirect('institutions')
                    ->with('status', 'La Institucion se Adiciono con Exito!');
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
        return view('institutions.show')->with('inst', Institution::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('institutions.edit')->with('inst', Institution::find($id));
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
        $inst = Institution::find($id);
        if ($request->hasFile('imagen')) {
            $file = time().'.'.$request->imagen->extension();
            $request->imagen->move(public_path('imgs'), $file);
            $inst->imagen = "imgs/".$file;
        }
        $inst->contacto  = $request->input('contacto');
        $inst->direccion = $request->input('direccion');
        $inst->web = $request->input('web');

        if($inst->save()){
            return redirect('institutions')
                ->with('status', 'La Institucion se Actualizo con Exito.');
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
        $inst = Institution::find($id);
        if($inst->delete()){
            return redirect('institutions')
                ->with('status', 'La Institucion se elimino con Exito.');
        };

    }
}
 -->