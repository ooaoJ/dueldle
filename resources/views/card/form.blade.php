<div class="row g-3">
    <div class="col-md-6">
        <div class="card shadow-sm rounded-3">
            <div class="card-body">
                <h5 class="card-title mb-3">Informações Básicas</h5>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" name="name" id="name" 
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name', $card?->name) }}" placeholder="Card Name">
                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                </div>

                <div class="mb-3">
                    <label for="card_type" class="form-label fw-bold">Card Type</label>
                    <select name="card_type" id="card_type" class="form-select">
                        <option value="">-- Select --</option>
                        <option value="Monster">Monster</option>
                        <option value="Spell">Spell</option>
                        <option value="Trap">Trap</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="attribute" class="form-label fw-bold">Attribute</label>
                    <select name="attribute" id="attribute" class="form-select">
                        <option value="">--</option>
                        <option>Water</option>
                        <option>Fire</option>
                        <option>Light</option>
                        <option>Earth</option>
                        <option>Darkness</option>
                        <option>Wind</option>
                        <option>Divine</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="level" class="form-label fw-bold">Level</label>
                    <input type="number" name="level" id="level"
                        class="form-control" min="1" max="12"
                        value="{{ old('level', $card?->level) }}" placeholder="1-12">
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow-sm rounded-3">
            <div class="card-body">
                <h5 class="card-title mb-3">Descrição & Efeitos</h5>

                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Description</label>
                    <textarea name="description" id="description" rows="2"
                        class="form-control">{{ old('description', $card?->description) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="effect" class="form-label fw-bold">Effect</label>
                    <textarea name="effect" id="effect" rows="2"
                        class="form-control">{{ old('effect', $card?->effect) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="tipe_efect" class="form-label fw-bold">Type Effect</label>
                    <select name="tipe_efect" id="tipe_efect" class="form-select">
                        <option value="">-</option>
                        <option>Normal Spell</option>
                        <option>Quick-Play Spell</option>
                        <option>Continuous Spell</option>
                        <option>Equip Spell</option>
                        <option>Field Spell</option>
                        <option>Ritual Spell</option>
                        <option>Normal Trap</option>
                        <option>Continuous Trap</option>
                        <option>Counter Trap</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow-sm rounded-3">
            <div class="card-body">
                <h5 class="card-title mb-3">Status</h5>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="atk" class="form-label fw-bold">ATK</label>
                        <input type="number" name="atk" id="atk" class="form-control"
                            value="{{ old('atk', $card?->atk) }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="def" class="form-label fw-bold">DEF</label>
                        <input type="number" name="def" id="def" class="form-control"
                            value="{{ old('def', $card?->def) }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="tipe_monster" class="form-label fw-bold">Monster Type</label>
                    <select name="tipe_monster" id="tipe_monster" class="form-select">
                        <option value="">-</option>
                        <option>Monster</option>
                        <option>XYZ</option>
                        <option>Link</option>
                        <option>Fusion</option>
                        <option>Synchro</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow-sm rounded-3">
            <div class="card-body">
                <h5 class="card-title mb-3">Imagem</h5>
                <div class="mb-3">
                    <input type="file" name="image" class="form-control">
                </div>
                @if(!empty($card?->image))
                    <div class="text-center">
                        <img src="{{ asset('storage/'.$card->image) }}" 
                             class="img-thumbnail shadow-sm" style="max-height:200px">
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="col-12 text-end mt-3">
        <button type="submit" class="btn btn-secondary px-4">
            <i class="bi bi-check2-circle"></i> Salvar
        </button>
    </div>
</div>
