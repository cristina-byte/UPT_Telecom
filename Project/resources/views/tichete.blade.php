@extends('welcome')
@section('content')

    <section class="web_site">
        <div class="main_content_section">
            <form enctype="multipart/form-data" method="post" action="{{route('cauta_tichet')}}" class="row head ">
                @csrf
                <div class="col-3 pt-2">
                    <h2 class="header_page">Tichete</h2>

                </div>
                <div class="col-4 pt-2">
                    <input type="text" class="search" placeholder="Cauta..." name="nume">
                </div>

                <div class="col-5 pt-2">
                    <button type="submit" class="b bordcolor">Cauta</button>
                    <button onclick="showAdvanced()" type="button" class="b bordcolor">Avansat</button>
                    <a href="{{route('add_tichet')}}" class="a bcolor">Adaugare</a>
                </div>

                <div class="col-4" id="cautare-avansata" style="display: none; margin-left: 32px">
                    <br>
                    <h5>Filtreaza după:</h5>
                    <p style="margin-bottom: 0; padding-bottom: 0">Status</p>
                    <input class="form-check-input" type="radio" name="status" value="new">
                    <label class="form-check-label">New</label>
                    <input class="form-check-input" type="radio" name="status" value="inprogress">
                    <label class="form-check-label">In Progress</label>
                    <input class="form-check-input" type="radio" name="status" value="done">
                    <label class="form-check-label">Done</label>
                    <br>
                    <p style="margin-top: 15px; margin-bottom: 0; padding-bottom: 0">Urgenta</p>
                    <input class="form-check-input" type="radio" name="urgenta" value="high">
                    <label class="form-check-label">Inalta</label>
                    <input class="form-check-input" type="radio" name="urgenta" value="medium">
                    <label class="form-check-label">Medie</label>
                    <input class="form-check-input" type="radio" name="urgenta" value="low">
                    <label class="form-check-label">Slaba</label>
                    <br>
                    <button type="button" class="a bcolor" style="margin-top: 15px">Filtreaza</button>
                </div>
            </form>

            <div class="row ">
                <table
                    style="margin-top: 101px;  margin-left: 30px; border-radius: 6px;box-shadow: 0px 0px 60px rgba(0, 0, 0, 0.03);">
                    <tr>
                        <td class="h">ID</td>
                        <td class="h">Responsabil</td>
                        <td class="h">Client ID</td>
                        <td class="h">Status</td>
                        <td class="h">Urgenta</td>
                        <td class="h">Descriere</td>
                        <td class="h">Data raportare</td>
                        <td class="h">Actiuni</td>


                    </tr>

                    @foreach($tichete as $tichet)

                        <tr>
                            <td>{{$tichet->id}}</td>
                            <td>{{$tichet->id_responsabil}}</td>
                            <td>{{$tichet->id_client}}</td>
                            <td>{{$tichet->status}}</td>
                            <td>{{$tichet->urgenta}}</td>
                            <td>{{$tichet->descriere}}</td>
                            <td>{{$tichet->created_at}}</td>
                            <td><a href="{{route('edit_tichete',['id'=>$tichet->id])}}">Edit</a></td>

                        </tr>
                    @endforeach


                </table>
            </div>
        </div>
    </section>
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
@endsection

