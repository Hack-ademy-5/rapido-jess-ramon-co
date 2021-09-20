<div class="container-fluid backcolor-footer my-2 py-2">
    
    <div class="row my-border-category my-2 py-2">
        @foreach ($categories as $category)
            <div class="col-12 col-md-4 text-center my-2 py-2">
                <li><a class="my-category"
                    href="{{route('category.ads',['name'=>$category->name,'id'=>$category->id])}}">{{$category->name}}</a>
                </li>
            </div>
        @endforeach
    </div>

    <div class="row my-2 py-2">
        <div class="row col-12 col-md-6">
            <h2 class="text-center">Jess & Ramón co.</h2>
            <p class="text-center"><i class="far fa-copyright"></i>{{__('ui.derechos')}}</p>

        </div>
        <div class="row col-12 col-md-6">
            <h3 class="text-center">{{__('ui.visita')}}</h3>
                <div class="footer-dcho">
                    <a href="https://twitter.com/?lang=es" target="_blank"><i class="fab fa-twitter px-5"></i></a>
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f px-5"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram px-5"></i></a>
                </div>
            </div>
    </div>
</div>