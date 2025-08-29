@extends('layouts.app')

@section('template_title')
    {{ $personagen->name ?? __('Show') . " " . __('Personagem') }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">{{ __('Show') }} Personagem</h5>
                    <a class="btn btn-primary btn-sm" href="{{ route('personagens.index') }}">{{ __('Back') }}</a>
                </div>

                <div class="card-body bg-white">
                    <div class="row">
                        <div class="col-md-4 d-flex align-items-start justify-content-center mb-3">
                            @if($personagen->image)
                                <img src="{{ asset('uploads') }}/{{ $personagen->image }}" 
                                     alt="{{ $personagen->name }}" 
                                     class="img-fluid rounded shadow-sm" 
                                     style="max-height:420px; width:auto;">
                            @else
                                <div class="border rounded d-flex align-items-center justify-content-center" 
                                     style="height:420px; width:100%;">
                                    <span class="text-muted">{{ __('No image') }}</span>
                                </div>
                            @endif
                        </div>

                        <div class="col-md-8">
                            <h3 class="mb-3">{{ $personagen->name }}</h3>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Gender</span>
                                    <span class="badge bg-secondary">{{ $personagen->gender }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Age</span>
                                    <span class="badge bg-info text-dark">{{ $personagen->age }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Appear</span>
                                    <span class="badge bg-secondary">{{ $personagen->appear }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Deck Type</span>
                                    <span class="badge bg-secondary">{{ $personagen->deck_type }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Favorite Card</span>
                                    <span class="badge bg-secondary">{{ $personagen->favorite_card }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
