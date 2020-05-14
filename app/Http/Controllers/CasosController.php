<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CasosController extends Controller
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
        $respuesta = $this->cliente->get('caso');
        $cuerpo = $respuesta->getBody();
        return view('caso.index', ['casos'=>json_decode($cuerpo)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $respuesta = $this->cliente->get('ciudad');
        $cuerpo = $respuesta->getBody();
        return view('caso.crear', ['ciudades'=>json_decode($cuerpo)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->cliente->post('caso',[
            'json' => $request->all()
        ]);

        return redirect('/caso');
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
        $respuesta = $this->cliente->get('caso/'.$id);
        $cuerpo = $respuesta->getBody();

        $respuesta2 = $this->cliente->get('ciudad');
        $cuerpo2 = $respuesta2->getBody();

        return view('caso.editar', ['caso'=>json_decode($cuerpo)], ['ciudades'=>json_decode($cuerpo2)]);
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
        $this->cliente->put('caso/'.$id,[
            'json' => $request->all()
        ]);

        return redirect('/caso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $respuesta = $this->cliente->delete('caso/'.$id);
        return redirect('caso');
    }
}
