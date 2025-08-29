@extends('layouts.app')

@section('template_title')
    Criar Card
@endsection

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 shadow-lg rounded-3">
                <div class="card-header bg-danger text-white d-flex justify-content-between align-items-center">
                    <span class="fw-bold"><i class="bi bi-plus-circle"></i> Criar Card</span>
                    <a href="{{ route('cards.index') }}" class="btn btn-light btn-sm">Voltar</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('cards.store') }}" enctype="multipart/form-data">
                        @csrf
                        @include('card.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
