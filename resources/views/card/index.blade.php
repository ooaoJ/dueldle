@extends('layouts.app')

@section('template_title')
    Cards
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white rounded-top-4 d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="fa fa-clone me-2"></i> Cards
                    </h4>
                    <a href="{{ route('cards.create') }}" class="btn btn-light btn-sm rounded-pill px-3">
                        <i class="fa fa-plus-circle me-1"></i> Novo Card
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
                                    <th>Name</th>
                                    <th>Card Type</th>
                                    <th>Attribute</th>
                                    <th>Level</th>
                                    <th>Description</th>
                                    <th>Effect</th>
                                    <th>Image</th>
                                    <th>Effect Type</th>
                                    <th>Atk</th>
                                    <th>Def</th>
                                    <th>Monster Type</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cards as $card)
                                    <tr>
                                        <td><span class="badge bg-secondary">{{ ++$i }}</span></td>
                                        <td><strong>{{ $card->name }}</strong></td>
                                        <td>{{ $card->card_type }}</td>
                                        <td>{{ $card->attribute }}</td>
                                        <td><span class="badge bg-info text-dark">{{ $card->level }}</span></td>
                                        
                                        {{-- Descrição com tooltip --}}
                                        <td class="col-description" title="{{ $card->description }}">
                                            {{ Str::limit($card->description, 50) }}
                                        </td>

                                        {{-- Efeito com tooltip --}}
                                        <td class="col-effect" title="{{ $card->effect }}">
                                            {{ Str::limit($card->effect, 50) }}
                                        </td>

                                        {{-- Imagem em miniatura --}}
                                        <td>
                                            <img src="{{ asset('uploads/'.$card->image) }}" 
                                                 alt="Imagem" 
                                                 class="img-thumbnail shadow-sm"
                                                 style="max-width: 80px; height: auto;">
                                        </td>

                                        <td>{{ $card->tipe_efect }}</td>
                                        <td>{{ $card->atk }}</td>
                                        <td>{{ $card->def }}</td>
                                        <td>{{ $card->tipe_monster }}</td>

                                        <td>
                                            <form action="{{ route('cards.destroy', $card->id) }}" method="POST">
                                                <div class="btn-group" role="group">
                                                    <a class="btn btn-sm btn-outline-primary" 
                                                       href="{{ route('cards.show', $card->id) }}" 
                                                       title="Ver">
                                                       <i class="bi bi-eye-fill"></i>
                                                    </a>
                                        
                                                    <a class="btn btn-sm btn-outline-success" 
                                                       href="{{ route('cards.edit', $card->id) }}" 
                                                       title="Editar">
                                                       <i class="bi bi-pencil-fill"></i>
                                                    </a>
                                        
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" 
                                                            class="btn btn-sm btn-outline-danger" 
                                                            onclick="return confirm('Tem certeza que deseja excluir este card?')" 
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
                {!! $cards->withQueryString()->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
</div>
@endsection
