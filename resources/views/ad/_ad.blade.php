@foreach($ads as $ad)

<div class="col-12 col-md-6 col-lg-4 p-3" >
  <div class="card" style="width: 18rem; min-height:500px;">
  <!-- Carrousel fotos -->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
          @foreach ($ad->images as $image)
        <div class="carousel-item @if($loop->first)active @endif">
          <img src="{{$image->getUrl(300,150)}}" class="d-block w-100" alt="...">
        </div>
        @endforeach

      </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" >
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
    </div>
            <div class="card-body text-center d-flex flex-column justify-content-evenly">
                <h2 class="card-title products-subtitle">{{$ad->title}}</h2>
                <p class="card-text">{{$ad->body}}</p>
                <p>
                    <strong>Categoria: <a href="{{route('category.ads',['name'=>$ad->category->name,'id'=>$ad->category->id])}}">{{$ad->category->name}}</a></strong><br>
                    <i>{{$ad->created_at->format('d/m/Y')}} -{{ $ad->user->name  }}</i>
                  </p>
      <a class="button-card-home" href="{{route("ad.details", ['id'=>$ad->id])}}" class="btn btn-danger" >¡Quiero ver más! 
      </a>
    </div>
  </div>
</div>
@endforeach