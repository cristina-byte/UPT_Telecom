<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Serviciu;

use App\Http\Requests\StoreClientRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $clienti = Client::All();
        return view('clienti', ['clienti' => $clienti]);
    }




/**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function search(Request $request)
    {
        $this->validate($request, ['nume' => 'required']);


        if($request->cautare_avansata=='id_client')
        $clienti=Client::select('*')->where('id',$request->nume)->get();

       else if($request->cautare_avansata=='telefon')
        $clienti=Client::select('*')->where('telefon',$request->nume)->get();
       
       else if($request->cautare_avansata=='nume')
        $clienti=Client::select('*')->where('nume',$request->nume)->get();


        return view('clienti', ['clienti' => $clienti]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $servicii = Serviciu::All();
        return view('adaugare_client', ['servicii' => $servicii]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(StoreClientRequest $request)
    {
        $client = new Client;
        $client->nume = $request->nume;
        $client->prenume = $request->prenume;
        $serviciu = Serviciu::select('servicii.id')->where('tip', $request->pachet)->get();
        $client->id_serviciu = $serviciu[0]->id;
        $client->email = $request->email;
        $client->adresa = $request->adresa;
        $client->telefon = $request->telefon;
        $client->start_date = $request->start_date;
        $client->durata_min = $request->durata;

        $client->save();
        return redirect()->route('client');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view("editare_client", ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(StoreClientRequest $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->nume = $request->nume;
        $client->prenume = $request->prenume;
        $client->id_serviciu = $request->pachet;
        $client->email = $request->email;
        $client->adresa = $request->adresa;
        $client->telefon = $request->telefon;
        $client->start_date = $request->start_date;
        $client->durata_min = $request->durata;

        $client->save();
        return redirect()->route('client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Client::destroy($id);
        return redirect()->route('clienti');
    }

    public function neplatit()
    {
        $clienti = DB::select(DB::raw("SELECT * FROM facturi LEFT JOIN clienti on facturi.id_client = clienti.id WHERE facturi.status = 'neplatit'"));
        return view('clienti', ['clienti' => $clienti]);
    }
}
