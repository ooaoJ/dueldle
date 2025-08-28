@extends('layouts.app')

@section('template_title')
    {{ $card->name ?? __('Show') . " " . __('Card') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Card</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('cards.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $card->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Card Type:</strong>
                                    {{ $card->card_type }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Attribute:</strong>
                                    {{ $card->attribute }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Level:</strong>
                                    {{ $card->level }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    {{ $card->description }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Effect:</strong>
                                    {{ $card->effect }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Image:</strong>
                                    {{ $card->image }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipe Efect:</strong>
                                    {{ $card->tipe_efect }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Atk:</strong>
                                    {{ $card->atk }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Def:</strong>
                                    {{ $card->def }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipe Monster:</strong>
                                    {{ $card->tipe_monster }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
