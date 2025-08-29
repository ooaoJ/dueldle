@extends('layouts.app')

@section('template_title')
    {{ $personagen->name ?? __('Show') . " " . __('Personagen') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Personagen</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('personagens.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $personagen->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Gender:</strong>
                                    {{ $personagen->gender }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Age:</strong>
                                    {{ $personagen->age }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Appear:</strong>
                                    {{ $personagen->appear }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Deck Type:</strong>
                                    {{ $personagen->deck_type }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Favorite Card:</strong>
                                    {{ $personagen->favorite_card }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Image:</strong>
                                    {{ $personagen->image }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
