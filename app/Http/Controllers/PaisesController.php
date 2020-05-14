<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PaisesController extends Controller
{
    private $cliente;
    public function __construct()
    {
        $this->cliente=new Client(['base_uri'=>'http://127.0.0.1/api-pandemia/public/api/']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respuesta = $this->cliente->get('pais');
        $cuerpo = $respuesta->getBody();
        return view('pais.index', ['paises'=>json_decode($cuerpo)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pais.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->cliente->post('pais',[
            'json' => $request->all()
        ]);

        return redirect('/pais');
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
        $respuesta = $this->cliente->get('pais/'.$id);
        $cuerpo = $respuesta->getBody();
        return view('pais.editar', ['pais' => json_decode($cuerpo)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*$respuesta = $this->cliente->get('pais/'.$id);
        $cuerpo = $respuesta->getBody();
        return view('pais.editar', ['pais'=>json_decode($cuerpo)]);*/
        $respuesta = $this->cliente->get('pais/'.$id);
        //echo $respuesta->getBody();
        $cuerpo = $respuesta->getBody();
        return view('pais.editar', ['pais'=>json_decode($cuerpo)]);
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
        //
        $this->cliente->put('pais/'.$id,[
            'json' => $request->all()
        ]);

        return redirect('/pais');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $respuesta = $this->cliente->delete('pais/'.$id);
        return redirect('pais');
    }
}
