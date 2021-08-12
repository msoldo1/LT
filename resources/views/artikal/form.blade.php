    <div class="form-group">
        <label for="nazivArtikla">Naziv artikla:</label>
        <input type="text" name="nazivArtikla" class="form-control" value="{{ old('nazivArtikla') ?? $artikal->nazivArtikla }}">
        <div class="alert-danger">{{ $errors->first('nazivArtikla') }}</div>
    </div>
    <div class="form-group">
        <input type="hidden" name="cijenaArtikla" value="0">
    </div>

    <div class="form-group" >
        <label for="etiketa_id">Etiketa:</label>
        <select name="etiketa_id" id="etiketa_id" class="form-control">
            @foreach($etikete as $etiketa)
                @if($etiketa->is_deleted == '0')
                    <option value="{{ $etiketa->id }}" {{ $etiketa->id == $artikal->etiketa->id ? 'selected' : '' }}>
                        {{ $etiketa->tipEtikete }}
                    </option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="form-group" >
        <div class="row">
            <div class="col">
                <label for="guma_id">Guma:</label>
                <select name="guma_id" id="guma_id" class="form-control">
                    @foreach($gume as $guma)
                        @if($guma->is_deleted == '0')
                            <option value="{{ $guma->id }}" {{ $guma->id == $artikal->guma->id  ? 'selected' : ''}}>
                                {{ $guma->nazivGume }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="kolicinaGume">Količina gume ( u metrima ):</label>
                <input type="text" name="kolicinaGume" class="form-control" value="{{ old('kolicinaGume') ?? $artikal->kolicinaGume }}">
            </div>
        </div>
    </div>

    <div class="form-group" >
        <div class="row">
            <div class="col">
                <label for="cipka_id">Cipka:</label>
                <select name="cipka_id" id="cipka_id" class="form-control">
                    @foreach($cipke as $cipka)

                        @if($cipka->is_deleted == '0')
                            <option value="{{ $cipka->id }}" {{ $cipka->id == $artikal->cipka->id  ? 'selected' : ''}}>
                                {{ $cipka->nazivCipke }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="kolicinaCipke">Količina cipke ( u metrima ):</label>
                <input type="text" name="kolicinaCipke" class="form-control" value="{{ old('kolicinaCipke') ?? $artikal->kolicinaCipke }}">
            </div>
        </div>
    </div>

    <div class="form-group" >
        <label for="kutija_id">Kutija:</label>
        <select name="kutija_id" id="kutija_id" class="form-control">
            @foreach($kutije as $kutija)
                @if($kutija->is_deleted == '0')
                    <option value="{{ $kutija->id }}" {{ $kutija->id == $artikal->kutija->id ? 'selected' : '' }}>
                        {{ $kutija->nazivKutije }}
                    </option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="form-group" >
        <div class="row">
            <div class="col">
                <label for="platno_id">Platno:</label>
                <select name="platno_id" id="platno_id" class="form-control">
                    @foreach($platna as $platno)
                        @if($platno->is_deleted == '0')
                            <option value="{{ $platno->id }}" {{ $platno->id == $artikal->platno->id ? 'selected' : '' }}>
                                {{ $platno->nazivPlatna }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="kolicinaPlatna">Količina platna ( u kg ):</label>
                <input type="text" name="kolicinaPlatna" class="form-control" value="{{ old('kolicinaPlatna') ?? $artikal->kolicinaPlatna }}">
            </div>
        </div>
    </div>

    <div class="form-group" >
        <label for="rad_id">Rad:</label>
        <select name="rad_id" id="rad_id" class="form-control">
            @foreach($radovi as $rad)
                @if($rad->is_deleted == '0')
                    <option value="{{ $rad->id }}" {{ $rad->id == $artikal->rad->id ? 'selected' : '' }}>
                        {{ $rad->nazivRada }}
                    </option>
                @endif
            @endforeach
        </select>
    </div>





