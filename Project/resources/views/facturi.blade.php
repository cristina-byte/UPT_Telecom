@extends('welcome')
@section('content')

    <section class="web_site">
        <div class="main_content_section">
            <div class="row head ">
                <div class="col-1 ">
                    <h2 class="header_page">Facturi</h2>
                </div>

                
                <div class="col-5 ">
                    <div style="display:inline;" class="dropdown">
                        <button class=" dropdown-toggle a bcolor" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Status
                        </button>

                        <div id="list" class="dropdown-menu">
                            <a href="{{route('filter_factura',['status'=>'scadent'])}}" class="dropdown-item"> scadent</a>
                            <a href="{{route('filter_factura',['status'=>'platit'])}}" class="dropdown-item">platit</a>
                            <a href="{{route('filter_factura',['status'=>'neplatit'])}}" class="dropdown-item">neplatit</a>
                        </div>
                    </div>
                    <a href="{{route('add_factura')}}" class="a bcolor">Adaugare</a>
     

                </div>
            </div>

            <div class="row ">
                <table
                    style="margin-top: 101px;  margin-left: 30px; border-radius: 6px;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.03);">
                    <tr>
                        <td class="h">ID Factura</td>
                        <td class="h">ID Client</td>
                        <td class="h">Data emisa</td>
                        <td class="h">ID serviciu</td>
                        <td class="h">Cost</td>
                        <td class="h">Status</td>
                        <td colspan="2" class="h">Actiuni</td>
                    </tr>

                    @foreach($facturi as $factura)

                        <tr>
                            <td class="h">{{$factura->id}}</td>
                            <td class="h">{{$factura->id_client}}</td>
                            <td class="h">{{$factura->perioada}}</td>
                            <td class="h">{{$factura->id_serviciu}}</td>
                            <td class="h">{{$factura->pret}}</td>
                            <td class="h">{{$factura->status}}</td>
                            <td class="h"><a class="special_button1"href="{{route('edit_factura',['id'=>$factura->id])}}">Edit</a></td>
                            <td class="h"><a class="special_button2" href="{{route('downloadPDF')}}">Print</a></td>
                        </tr>

                    @endforeach


                </table>
            </div>
        </div>
    </section>

    <script>
        let dropdown = document.getElementById('dropdownMenuButton');
        let droplist = document.getElementById('list');

        droplist.style.display = "none";
        dropdown.addEventListener('click', function () {
            console.log(droplist.style);

            if (droplist.style.display === "none")
                droplist.style.display = "block";
            else
                droplist.style.display = "none";

        })
    </script>
@endsection
