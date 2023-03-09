<?php

namespace App\Http\Controllers;

use App\Models\Tipo_documento;
use Illuminate\Http\Request;

class TipoDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("documento.agregar");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $documento = new Tipo_documento;
        
        $documento->descripcion = $request->input("descripcion");
        $documento->estado = 1;
        $documento->save();
        return redirect('listar_documento');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipo_documento  $tipo_documento
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $datos['documentos']=Tipo_documento::where("estado","=",1)->select("codigo_documento","descripcion")->get();
        return view('documento.listar',$datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipo_documento  $tipo_documento
     * @return \Illuminate\Http\Response
     */
    public function edit($codigo_documento)
    {
       $documento = Tipo_documento::findOrfail($codigo_documento);
       return view('documento.editar', compact('documento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipo_documento  $tipo_documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosDocumento=Request()->except([('_token'),('_method')]);
        Tipo_documento::where('codigo_documento','=',$id)->update($datosDocumento);
        return redirect('listar_documento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipo_documento  $tipo_documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo_documento $tipo_documento)
    {
        //
    }
}
