<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Angajat;
use App\Models\Departament;

class AngajatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



    
       $departamente=Departament::All();
       $angajati = Angajat::select('angajati.*','departamente.nume as departament' )
      ->leftJoin('departamente','departamente.id','angajati.id_departament')->get();
        
    

        return view('angajati',
            ['angajati'=>$angajati


            ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
       return view('adaugare_angajat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $angajat=new Angajat;


        $angajat->nume=$request->nume;
         $angajat->prenume=$request->prenume;
         $angajat->adresa=$request->adresa;
         $angajat->telefon=$request->telefon;
         $angajat->email=$request->email;
          $angajat->salariu=$request->salariu;
          $angajat->functie=$request->functie;
           $angajat->id_departament=$request->id_departament;
           $angajat->save();


    

       return view('adaugare_angajat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //not used
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $angajat=Angajat::findOrFail($id);
        
      return view('editare_angajat',['angajat'=>$angajat]);
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
        
    
     $angajat=Angajat::findOrFail($id);
     $angajat->nume=$request->nume;
         $angajat->prenume=$request->prenume;
         $angajat->adresa=$request->adresa;
         $angajat->telefon=$request->telefon;
         $angajat->email=$request->email;
          $angajat->salariu=$request->salariu;
          $angajat->functie=$request->functie;
           $angajat->id_departament=$request->id_departament;
           $angajat->save();

          
     return redirect()->route('editare_angajat');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Angajat::destroy($id);

       return redirect()->route('angajat');

       


    }
}
