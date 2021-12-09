@extends('welcome')
@section('content')

    <section class="web_site">
        <div class="main_content_section">

            <form enctype="multipart/form-data" method="post" action="{{route('cauta_client')}}" class="row head">
                @csrf
                <div class="col-4 ">
                    <h2 class="header_page">Clienti</h2>
                </div>

                <div class="col-3 pt-2">
                    <input type="text" class="search" placeholder="Cauta..." name="nume">
                </div>

                <div class="col-5 pt-2">
                    <button type="submit" href="{{route('cauta_client')}}" class="b bordcolor">Cauta</button>
                    <button onclick="showAdvanced()" type="button" class="b bordcolor">Avansat</button>
                    <a href="{{route('add_client')}}" class="a bcolor">Adaugare</a>
                </div>

                <div class="col-4" id="cautare-avansata" style="display: none; margin-left: 32px">
                    <br>
                    <p>Caută după:</p>
                    <input class="form-check-input" type="radio" name="cautare_avansata" id="id_client"
                           value="id_client">
                    <label class="form-check-label" for="id_angajat">ID client</label>
                    <input class="form-check-input" type="radio" name="cautare_avansata" id="telefon" value="telefon">
                    <label class="form-check-label" for="telefon">Telefon</label>
                    <br>
                    <button type="submit" class="a bcolor" style="margin-top: 15px">Aplica</button>
                </div>
            </form>


            <div class="row ">
                <table
                    style="margin-top: 101px;  margin-left: 30px; border-radius: 6px;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.03);">


                    <tr>

                        <td class="h">ID Client</td>
                        <td class="h">Nume</td>
                        <td class="h">Prenume</td>
                        <td class="h">Pachet</td>
                        <td class="h">Telefon</td>
                        <td class="h">Data inscriere</td>
                        <td colspan="2" class="h"></td>
                    </tr>


                    @foreach($clienti as $client)
                        <tr>
                            <td class="h">{{$client->id}}</td>
                            <td class="h">{{$client->nume}}</td>
                            <td class="h">{{$client->prenume}}</td>
                            <td class="h">{{$client->id_serviciu}}</td>
                            <td class="h">{{$client->telefon}}</td>
                            <td class="h">{{$client->start_date}}</td>
                            <td class="h"><a class="special_button1" href="{{route('client.edit',['id'=>$client->id])}}">Edit</a></td>
                            
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </section>
@endsection

<script>
    function showAdvanced() {
        var x = document.getElementById("cautare-avansata");
        if (x.style.display === "none") {
            x.style.display = "inline";
        } else {
            x.style.display = "none";
        }
    }
</script>
