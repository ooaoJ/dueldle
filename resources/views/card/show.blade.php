@extends('layouts.app')

@section('template_title')
    {{ $card->name ?? __('Show') . " " . __('Card') }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">{{ __('Show') }} {{ __('Card') }}</h5>
                    <a class="btn btn-primary btn-sm" href="{{ route('view.cards') }}">{{ __('Back') }}</a>
                </div>
                <div class="card-body bg-white">
                    <div class="row">
                        <div class="col-md-4 d-flex align-items-start justify-content-center mb-3">
                            @if($card->image)
                                <img src="{{ asset('uploads') }}/{{ $card->image }}" alt="{{ $card->name }}" class="img-fluid rounded shadow-sm" style="max-height:420px; width: auto;">
                            @else
                                <div class="border rounded d-flex align-items-center justify-content-center" style="height:420px; width:100%;">
                                    <span class="text-muted">{{ __('No image') }}</span>
                                </div>
                            @endif
                        </div>

                        <div class="col-md-8">
                            <h3 class="mb-3">{{ $card->name }}</h3>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Card Type</span>
                                    <span class="badge bg-secondary">{{ $card->card_type }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Attribute</span>
                                    <span class="badge bg-secondary">{{ $card->attribute }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Level</span>
                                    <span class="badge bg-secondary">{{ $card->level }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Type Monster</span>
                                    <span class="badge bg-secondary">{{ $card->tipe_monster }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>ATK / DEF</span>
                                    <span>
                                        <span class="badge bg-success me-1">@if($card->atk == null) ? @else {{$card->atk}} @endif</span>
                                        <span class="badge bg-danger">@if($card->def == null) ? @else {{$card->def}} @endif</span>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>Effect Type</span>
                                    <span class="badge bg-secondary">{{ $card->tipe_efect }}</span>
                                </li>
                            </ul>

                            <div class="mt-3">
                                @if ($card->description)
                                    <h6>{{ __('Description') }}</h6>
                                    <p class="mb-2">{{ $card->description }}</p>
                                @endif

                                @if($card->effect)
                                    <h6>{{ __('Effect') }}</h6>
                                    <p class="mb-0">{{ $card->effect }}</p>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
