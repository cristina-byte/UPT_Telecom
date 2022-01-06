<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Angajat;
use App\Models\Tichet;
use App\Models\Departament;
use App\Http\Requests\StoreAngajatRequest;
use Illuminate\Support\Facades\DB;
class AngajatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $departamente = Departament::All();
        $angajati = Angajat::select('angajati.*', 'departamente.nume as departament')
            ->leftJoin('departamente', 'departamente.id', 'angajati.id_departament')->get();
 
        return view(
            'angajati',
            [
                'angajati' => $angajati
 
            ]
        ); 
         
    }


public function search(Request $request){

      $this->validate($request,['nume'=>'required']);
 
    
       if($request->cautare_avansata=='id_angajat')
        $angajati=Angajat::select('angajati.*', 'departamente.nume as departament')
            ->leftJoin('departamente', 'departamente.id','angajati.id_departament')->where('angajati.id',$request->nume)->get();

       else if($request->cautare_avansata=='telefon')
        $angajati=Angajat::select('angajati.*', 'departamente.nume as departament')
            ->leftJoin('departamente', 'departamente.id','angajati.id_departament')->where('telefon',$request->nume)->get();
       else if($request->cautare_avansata=='functie')
         $angajati=Angajat::select('angajati.*', 'departamente.nume as departament')
            ->leftJoin('departamente', 'departamente.id','angajati.id_departament')->where('functie',$request->nume)->get();
       else if($request->cautare_avansata=='nume')
        $angajati=Angajat::select('angajati.*', 'departamente.nume as departament')
            ->leftJoin('departamente', 'departamente.id','angajati.id_departament')->where('angajati.nume',$request->nume)->get();


        return view(
            'angajati',
            [
                'angajati' => $angajati
 
            ]
        );



 
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamente=Departament::All();
        return view('adaugare_angajat',['departamente'=>$departamente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAngajatRequest $request)
    {
        $angajat = new Angajat;

        $angajat->nume = $request->nume;
        $angajat->prenume = $request->prenume;
        $angajat->adresa = $request->adresa;
        $angajat->telefon = $request->telefon;
        $angajat->email = $request->email;
        $angajat->salariu = $request->salariu;
        $angajat->functie = $request->functie;
        $angajat->id_departament = $request->id_departament;
        $angajat->save();
 
        return redirect()->route('angajat');
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
        $angajat = Angajat::findOrFail($id);
        $departamente=Departament::All();
        return view('editare_angajat', ['angajat' => $angajat,'departamente'=>$departamente]);
    }

  
        public function tichete_active()
        {  
            $tichete=Tichet::All();
            $departamente = Departament::All();
            $angajati = Angajat::select('angajati.*', 'departamente.nume as departament')
                ->leftJoin('departamente', 'departamente.id', 'angajati.id_departament')
                ->leftJoin('tichete', 'tichete.id_responsabil', 'angajati.id') ->where('tichete.status','!=','done') ->distinct()->get();
     
            return view(
                'angajati',
                [
                    'angajati' => $angajati
     
                ]
            ); 
        }
    
   


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAngajatRequest $request, $id)
    {
        $angajat = Angajat::findOrFail($id);
        $angajat->nume = $request->nume;
        $angajat->prenume = $request->prenume;
        $angajat->adresa = $request->adresa;
        $angajat->telefon = $request->telefon;
        $angajat->email = $request->email;
        $angajat->salariu = $request->salariu;
        $angajat->functie = $request->functie;
        $angajat->id_departament = $request->id_departament;
        $angajat->save();

        return redirect()->route('angajat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $tichete=Tichet::select('tichete.id')->where('id_responsabil',$id)->get();//selectarea tichetelor a caror id_responsabil este egal cu id-ul angajatului care trebuie sters

        //parcurgere vectorul obtinut de obiecte si stergerea tichetelor dupa id-ul lor
        foreach($tichete as $tichet){
            Tichet::destroy($tichet->id);
        }

        //la final se sterge angajatul dupa ce au fost sterse tichetele
        Angajat::destroy($id);

        return redirect()->route('angajat');
    }


    
}
