@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-steam-cards js-steamCards">
        @foreach($cards as $card)
        <div class="d-steam-card-wrapper">
            <a href="{{ route('cards.show', $card->id) }}" class="d-steam-card-link" tabindex="0">
                <div class="d-steam-card" style="background-image: url('{{ asset('uploads/' . $card->image) }}')" role="img" aria-label="{{ $card->name ?? 'Card' }}"></div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
