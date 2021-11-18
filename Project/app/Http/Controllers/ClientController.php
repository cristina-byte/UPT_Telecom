<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $clienti=Client::All();
        return view('clienti',['clienti'=>$clienti]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adaugare_client');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client=new Client;


        $client->nume=$request->nume;
         $client->prenume=$request->prenume;
          $client->id_serviciu=$request->pachet;
           $client->email=$request->email;
            $client->adresa=$request->adresa;
             $client->telefon=$request->telefon;
              $client->start_date=$request->start_date;
               $client->durata_min=$request->durata;

               $client->save();

            return redirect()->route('clienti');

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
        //
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
        
        $client=Client::findOrFail($id);
     
          $client->nume=$request->nume;
         $client->prenume=$request->prenume;
          $client->id_serviciu=$request->pachet;
           $client->email=$request->email;
            $client->adresa=$request->adresa;
             $client->telefon=$request->telefon;
              $client->start_date=$request->start_date;
               $client->durata_min=$request->durata;

               $client->save();

            return redirect()->route('clienti');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Client::destroy($id);
        return redirect()->route('clienti');


    }
}
