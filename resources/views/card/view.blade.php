@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($cards as $card)
        <div class="col">
            <div class="card card-animation h-100">
                <a href="{{route('cards.show',$card->id)}}">
                    <img src="{{asset('uploads')}}/{{$card->image}}" style="max-width: 100%; max-height: 450px;" class="card-img-top" alt="Descrição da Imagem">
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection