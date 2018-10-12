
    <section id="offer" class="p-5">
        <div class="container">
            <div class="headline">
                <h3 class="text-center text-black m-5">MY OFFER</h3>
            </div>
            <div class="row text-center text-black">
                    @foreach ($elem as $item)
                <div class="col-3 hvr">
                    <i class="{{$item->font}} p-4"></i>
                    <h6>{{$item->titre}}</h6>
                    <p>{{$item->texte}}</p>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
