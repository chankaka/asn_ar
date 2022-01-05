<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    function __construct()
    {
        $this->middleware('permission: ver-proveedor | crear-proveedor | editar-proveedor | borrar-proveedor',['only'=>['index']]);
        $this->middleware('permission: crear-proveedor', ['only'=>['create','store']]);
        $this->middleware('permission: editar-proveeror', ['only'=>['edit','update']]);
        $this->middleware('permission: borrar-proveedor', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = proveedores::paginate(5);
        return view('proveedor.index',compact('proveedores'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.crear');

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            request()->validate([
                'prov_descripcion' => 'required'
            ]);
        proveedores::create($request->all());
        return redirect()->route('proveedores.index');

            //

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
    public function edit(proveedor $proveedor)
    {
        return view('proveedores.editar',compact('proveedor'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, proveedor $proveedor)
    {

        request()->validate([
            'prov_descripcion' => 'required'

        ]);
        $proveedor->update($request->all());
        return redirect()->route('proveedores.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(proveedor $proveedor)
    {

        $proveedor->delete();
        return redirect()-route('proveedores.index');
        //
    }
}
