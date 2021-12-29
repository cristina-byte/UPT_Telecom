<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serviciu;
use App\Http\Requests\StoreServiciuRequest;
use Illuminate\Support\Facades\DB;




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

public function top()
    {
        


        $serviciu=DB::select(DB::raw("SELECT MAX(total) as max, id_serviciu from (SELECT Count(*) as total, table1.id_serviciu from (SELECT  clienti.id_serviciu from clienti  LEFT JOIN servicii ON clienti.id_serviciu=servicii.id ) as table1 GROUP BY id_serviciu) as tabel2"));
      

      $max=$serviciu[0]->max;

        $s=DB::select(DB::raw("SELECT COUNT(*) as total, id_serviciu from clienti GROUP BY id_serviciu  having total=$max"));
       

        $servicii=Serviciu::select('*')->where('id',$s[0]->id_serviciu)->get();
      
         return view('servicii', ['servicii' => $servicii]);



    }









    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiciuRequest $request)
    {

         
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
