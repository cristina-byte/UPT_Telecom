<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serviciu;
use App\Http\Requests\StoreServiciuRequest;
class ServiciuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicii = Serviciu::All();
        return view('servicii', ['servicii' => $servicii]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adaugare_serviciu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiciuRequest $request)
    {

         $request->validate();
        $serviciu = new Serviciu;

        $serviciu->nivel = $request->nivel;
        $serviciu->tip = $request->tip;
        $serviciu->pret = $request->pret;
        $serviciu->descriere = $request->descriere;
        $serviciu->save();

        return redirect()->route('serviciu');
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
        $serviciu = Serviciu::findOrFail($id);
        return view('editare_serviciu', ['serviciu' => $serviciu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreServiciuRequest $request, $id)
    {

        $request->validate();
        $serviciu = Serviciu::findOrFail($id);
        $serviciu->nivel = $request->nivel;
        $serviciu->tip = $request->tip;
        $serviciu->pret = $request->pret;
        $serviciu->descriere = $request->descriere;
        $serviciu->save();

        return redirect()->route('serviciu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Serviciu::destroy($id);

        return redirect()->route('serviciu');
    }
}
