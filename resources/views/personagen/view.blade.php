@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-steam-cards js-steamCards">
        @foreach($personagens as $personagem)
        <div class="d-steam-card-wrapper">
            <a href="{{ route('personagens.show', $personagem->id) }}" class="d-steam-card-link" tabindex="0">
                <div class="d-steam-card" style="background-image: url('{{ asset('uploads/' . $personagem->image) }}')" role="img" aria-label="{{ $personagem->name ?? 'Personagem' }}"></div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
