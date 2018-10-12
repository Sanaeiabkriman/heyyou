<section class="mb-5" id="presentation">
    <br>
    <div>
        <div class="container mt-5 mb-5 ">
            @foreach ($donnees as $item)
            <div class="row">
                <div class="left col-5 bg-dark p-0">
                    <img src={{Storage::url($item->image)}} class="img-fluid" alt="">
                </div>
                <div class="right col-7">
                    <h3 class="font-weight-bold m-5 text-center">{{$item->titre}}</h3>
                    <p class="m-3 pt-2 text-justify">{{$item->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
