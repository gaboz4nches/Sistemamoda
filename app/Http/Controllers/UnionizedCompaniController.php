<!-- <?php

namespace App\Http\Controllers;

use App\UnionizedCompani;
use App\Http\Requests\UnionizedCompaniRequest;
use Illuminate\Http\Request;

class UnionizedCompaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('unionized_companies.index')
        ->with('unis', UnionizedCompani::paginate(9)
        ->setPath('unionized_companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unis = UnionizedCompani::all();
        return view('unionized_companies.create')->with('unis', $unis);
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
        $unis = new UnionizedCompani;
        $unis->logo      = "imgs/".$file;
        $unis->contacto  = $request->input('contacto');
        $unis->direccion = $request->input('direccion');
        $unis->web = $request->input('web');
        if($unis->save()) {
            return redirect('unionized_companies')
                    ->with('status', 'El Agremiado se Adiciono con Exito!');
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
        return view('unionized_companies.edit')->with('unis', UnionizedCompani::find($id));
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
        $unis = UnionizedCompani::find($id);
        if ($request->hasFile('logo')) {
            $file = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('imgs'), $file);
            $unis->logo = "imgs/".$file;
        }
        $unis->contacto     = $request->input('contacto');
        $unis->direccion  = $request->input('direccion');
        $unis->web  = $request->input('web');

        if($unis->save()){
            return redirect('unionized_companies')
                ->with('status', 'El Agremiado se actualizo con Exito.');
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
        $unis = UnionizedCompani::find($id);
        if($unis->delete()){
            return redirect('unionized_companies')
                ->with('status', 'El Agremiado se elimino con Exito.');
        };
    }
}
 -->