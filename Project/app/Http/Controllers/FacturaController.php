<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\Serviciu;
use App\Models\Client;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturi=Factura::All();
        return view('facturi',['facturi'=>$facturi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clienti=Client::All();
        $servicii=Serviciu::All();
        return view('adaugare_factura',['servicii'=>$servicii,'clienti'=>$clienti]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
  $factura=new Factura;

  $factura->id_client=$request->id_client;
   $factura->id_serviciu=$request->id_serviciu;
    $factura->pret=$request->pret;
     $factura->status=$request->status;
      $factura->perioada=$request->data_scadenta;
      $factura->save();

      return redirect()->route("factura");

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
        $factura=Factura::findOrFail($id);
        $clienti=Client::All();
        $servicii=Serviciu::All();

        return view("editare_factura",['factura'=>$factura,'servicii'=>$servicii,'clienti'=>$clienti]);
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
        $factura=Factura::findOrFail($id);
          $factura->id_client=$request->id_client;
   $factura->id_serviciu=$request->id_serviciu;
    $factura->pret=$request->pret;
     $factura->status=$request->status;
      $factura->perioada=$request->data_scadenta;
      $factura->save();

      return redirect()->route("factura");


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
    }
}
