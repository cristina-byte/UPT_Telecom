<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Angajat;
use App\Models\Client;
use App\Models\Tichet;

class TichetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tichete = Tichet::All();
 

        
        return view('tichete', ['tichete' => $tichete]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $angajati = Angajat::All();
        $clienti = Client::All();
        return view('adaugare_tichet', ['angajati' => $angajati, 'clienti' => $clienti]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, array(

            'responsabil' => 'required',
            'client' => 'required',
            'urgenta' => 'required',
            'status' => 'required',
            'descriere' => 'required',
            'd_raportare' => 'required' 
            
        ));

        $tichet = new Tichet;
 
        $tichet->id_responsabil = $request->responsabil;
        $tichet->id_client = $request->client;
        $tichet->urgenta = $request->urgenta;
        $tichet->status = $request->status;
        $tichet->descriere = $request->descriere;
        $tichet->data_raportare = $request->d_raportare;
        $tichet->save();

        return redirect()->route("tichet");
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
        $angajati = Angajat::All();
        $clienti = Client::All();
        $tichet = Tichet::findOrFail($id);
        return view('editare_tichet', ['tichet' => $tichet, 'angajati' => $angajati, 'clienti' => $clienti]);
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
        $tichet = Tichet::findOrFail($id);
        $tichet->id_responsabil = $request->responsabil;
        $tichet->id_client = $request->client;
        $tichet->urgenta = $request->urgenta;
        $tichet->status = $request->status;
        $tichet->descriere = $request->descriere;
        $tichet->data_raportare = $request->d_raportare;
        $tichet->save();

        return redirect()->route("tichet");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
