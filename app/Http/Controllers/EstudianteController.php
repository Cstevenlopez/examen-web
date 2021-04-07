<?php


namespace App\Http\Controllers;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiante.index')->with('estudiantes',$estudiantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$articulos = new Articulo();
        $articulos->codigo = $request->get('codigo');
        $articulos->descripcion = $request->get('descripcion');
        $articulos->cantidad = $request->get('cantidad');
        $articulos->precio = $request->get('precio');
*/
    /*    $articulos->save();*/
    $DNI = $request->get('DNI');
    $nombres = $request->get('nombres');
    $apellidos = $request->get('apellidos');
    $fechadenacimiento = $request->get('fechadenacimiento');
    $localidad = $request->get('localidad');
    $telefono = $request->get('telefono');

    DB::insert('insert into estudiantes (DNI, nombres, apellidos, fechadenacimiento, localidad, telefono) values (?, ?, ?, ?, ?, ?)',[$DNI, $nombres, $apellidos, $fechadenacimiento, $localidad, $telefono]);
        return redirect('/estudiantes');
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
        $estudiante = Estudiante::find($id);
        return view('estudiante.edit')->with('estudiante',$estudiante);
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
      /*  $articulo = Articulo::find($id);
        $articulo->codigo = $request->get('codigo');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->cantidad = $request->get('cantidad');
        $articulo->precio = $request->get('precio');

        $articulo->save();*/

   /*     $codigo = $request->get('codigo');
        $descripcion = $request->get('descripcion');
        $cantidad = $request->get('cantidad');
        $precio = $request->get('precio');

        DB::update('update articulos set codigo = ?, descripcion = ?, cantidad = ?, precio = ? where id = ?', [$codigo, $descripcion, $cantidad, $precio, $id ]);*/ 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();

        return redirect('/estudiantes');
    }
}
