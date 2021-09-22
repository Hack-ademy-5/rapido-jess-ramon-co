@extends('layouts.app')
@section('content')

@if ($ad)
<div class='container my-5 py-5'>
    <div class='row'>
        <div class='col-12'>
            <div class="card">
                <div class="card-header">
                    {{__('ui.anuncio')}} #{{$ad->id}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>{{__('ui.usuario')}}</h3>
                        </div>
                        <div class="col-md-9">
                            #{{$ad->user->id}}
                            {{$ad->user->name}}
                            {{$ad->user->email}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>{{__('producto')}}</h3>
                        </div>
                        <div class="col-md-9">
                            {{$ad->title}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>{{__('ui.descripcionAnuncio')}}</h3>
                        </div>
                        <div class="col-md-9">
                            {{$ad->body}}
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

        @foreach ($ad->images as $image)
        <div class="row">
            <div class="col-md-4">
                <img src="{{ Storage::url($image->file) }}" class="img-fluid" alt="">
            </div>
        </div>
        @endforeach
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{route('revisor.ad.reject',['id'=>$ad->id])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">{{__('ui.rechazar')}}</button>
            </form>
        </div>
        <div class="col-md-6 text-right">
            <form action="{{route('revisor.ad.accept',['id'=>$ad->id])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">{{__('ui.aceptar')}}</button>
            </form>
        </div>
    </div>
</div>
@else
<h3 class="text-center"> {{__('ui.sinAnuncios')}} </h3>
@endif
@endsection
