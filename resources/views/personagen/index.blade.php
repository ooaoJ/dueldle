@extends('layouts.app')

@section('template_title')
    Personagens
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white rounded-top-4 d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="fa fa-users me-2"></i> Personagens
                    </h4>
                    <a href="{{ route('personagens.create') }}" class="btn btn-light btn-sm rounded-pill px-3">
                        <i class="fa fa-plus-circle me-1"></i> Novo Personagem
                    </a>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success m-4 shadow-sm rounded-3">
                        <p class="mb-0">{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body bg-white rounded-bottom-4">
                    <div class="table-responsive">
                        <table class="table align-middle table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Gênero</th>
                                    <th>Idade</th>
                                    <th>Aparência</th>
                                    <th>Deck</th>
                                    <th>Carta Favorita</th>
                                    <th>Imagem</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($personagens as $personagen)
                                    <tr>
                                        <td><span class="badge bg-secondary">{{ ++$i }}</span></td>
                                        <td><strong>{{ $personagen->name }}</strong></td>
                                        <td>{{ $personagen->gender }}</td>
                                        <td><span class="badge bg-info text-dark">{{ $personagen->age }}</span></td>
                                        <td>{{ Str::limit($personagen->appear, 40) }}</td>
                                        <td>{{ $personagen->deck_type }}</td>
                                        <td>
                                            {{-- Se favorite_card for ID, mostra nome da carta --}}
                                            @if($personagen->favoriteCard?->name)
                                                <span class="badge bg-dark text-white">{{ $personagen->favoriteCard->name }}</span>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if($personagen->image)
                                                <img src="{{ asset('storage/'.$personagen->image) }}" 
                                                     alt="Imagem" 
                                                     class="img-thumbnail shadow-sm"
                                                     style="max-width: 80px; height: auto;">
                                            @else
                                                <span class="text-muted">Sem imagem</span>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('personagens.destroy', $personagen->id) }}" method="POST">
                                                <div class="btn-group" role="group">
                                                    <a class="btn btn-sm btn-outline-primary" 
                                                       href="{{ route('personagens.show', $personagen->id) }}" 
                                                       title="Ver">
                                                       <i class="bi bi-eye-fill"></i>
                                                    </a>
                                        
                                                    <a class="btn btn-sm btn-outline-success" 
                                                       href="{{ route('personagens.edit', $personagen->id) }}" 
                                                       title="Editar">
                                                       <i class="bi bi-pencil-fill"></i>
                                                    </a>
                                        
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                            class="btn btn-sm btn-outline-danger" 
                                                            onclick="return confirm('Tem certeza que deseja excluir este personagem?')" 
                                                            title="Excluir">
                                                            <i class="bi bi-trash-fill"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                {!! $personagens->withQueryString()->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
</div>
@endsection
