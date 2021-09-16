@foreach($ads as $ad)
    <div class="col-12 col-md-4">
        <div class="card mb-5" style="width: 18rem;">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> {{$ad->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$ad->price}}</h6>
              <p class="card-text"> {{$ad->body}}</p>
              <h6 class="card-subtitle mb-2">
                <strong>{{__('ui.categorias') }}: <a href="{{route('category.ads',['name'=>$ad->category->name,'id'=>$ad->category->id])}}">{{$ad->category->name}}</a></strong>
            <i>{{$ad->created_at->format('d/m/Y')}} - {{$ad->user->name }}</i></h6>
            <a href="{{route("ad.details", ['id'=>$ad->id])}}"> {{__('ui.leermas')}}</a>
              <a href="#" class="card-link">Link</a>
            </div>
        </div>
    </div>
@endforeach