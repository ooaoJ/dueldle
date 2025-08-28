<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $card?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="card_type" class="form-label">{{ __('Card Type') }}</label>
            <select class="form-control " name="card_type" id="card_type">

                <option value="monster">Monster</option>
                <option value="spell">Spell</option>
                <option value="trap">Trap</option>


            </select>
            {!! $errors->first('card_type', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="attribute" class="form-label">{{ __('Attribute') }}</label>
            <input type="text" name="attribute" class="form-control @error('attribute') is-invalid @enderror" value="{{ old('attribute', $card?->attribute) }}" id="attribute" placeholder="Attribute">
            {!! $errors->first('attribute', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="level" class="form-label">{{ __('Level') }}</label>
            <input type="text" name="level" class="form-control @error('level') is-invalid @enderror" value="{{ old('level', $card?->level) }}" id="level" placeholder="Level">
            {!! $errors->first('level', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Description') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $card?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="effect" class="form-label">{{ __('Effect') }}</label>
            <input type="text" name="effect" class="form-control @error('effect') is-invalid @enderror" value="{{ old('effect', $card?->effect) }}" id="effect" placeholder="Effect">
            {!! $errors->first('effect', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="image" class="form-label">{{ __('Image') }}</label>
            <input type="file" name="image" class="form-control" placeholder="Image">
            {!! $errors->first('image', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipe_efect" class="form-label">{{ __('Tipe Efect') }}</label>
            <label for="tipe_efect" class="form-label">{{ __('Tipe Efect') }}</label>
            <select class="form-control " name="tipe_efect" id="tipe_efect">
                <option value="Normal Spell">Normal Spell</option>
                <option value="Quick-Play Spell">Quick-Play Spell</option>
                <option value="Continuous Spell">Continuous Spell</option>
                <option value="Continuous Spell">Equip Spell</option>
                <option value="Continuous Spell">Field Spell</option>
                <option value="Continuous Spell">Ritual Spell</option>
                <option value="Continuous Spell">Continuous Trap</option>
                <option value="Continuous Spell">Counter Trap</option>
            </select>
            {!! $errors->first('tipe_efect', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="atk" class="form-label">{{ __('Atk') }}</label>
            <input type="text" name="atk" class="form-control @error('atk') is-invalid @enderror" value="{{ old('atk', $card?->atk) }}" id="atk" placeholder="Atk">
            {!! $errors->first('atk', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="def" class="form-label">{{ __('Def') }}</label>
            <input type="text" name="def" class="form-control @error('def') is-invalid @enderror" value="{{ old('def', $card?->def) }}" id="def" placeholder="Def">
            {!! $errors->first('def', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipe_monster" class="form-label">{{ __('Tipe Monster') }}</label>

            <label for="tipe_monster" class="form-label">{{ __('Tipe Monster') }}</label>
            <select class="form-control " name="tipe_monster" id="tipe_monster">
                <option value="monster">Monster</option>
                <option value="xyz">X-Y-Z</option>
                <option value="link">Link</option>
                <option value="fusion">Fusion</option>
                <option value="synchro">Synchro</option>
            </select>

            {!! $errors->first('tipe_monster', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>