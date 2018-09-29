

@foreach ($donnees as $item)
    <div id="presentation">
        <div class="container mt-5 mb-5 ">
            <div class="row pb-5">
                <div class="left col-5 bg-dark ">
                </div>
                <div class="right col-7">
                    <h3 class="font-weight-bold m-5 text-center">{{$item->titre}}</h3>
                    <p class="m-3 pt-2 text-justify">{{$item->description}} 
                    </p>
                    <div class="text-center">
                        <button class="btn border border-dark bg-white px-4 py-2 m-2"> Achète !</button>
                        <button class="btn border border-dark bg-white px-4 py-2 m-2"> Clique !</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
