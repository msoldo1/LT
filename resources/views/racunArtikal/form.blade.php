<div class="form-group">
    <div class="row">
        <div class="col">
            <label for="broj racuna">Broj racuna:</label>
            <p>{{ $racun->id }}</p>
        </div>
        <div class="col">
            <label for="racun_id">Id racuna:</label>
            <input type="text" name="racun_id" class="form-control" value="{{ $racun->id }}" readonly>
        </div>
    </div>
</div>

<div class="form-group" >
    <div class="row">
        <div class="col">
            <label for="artikal_id">Artikal:</label>
            <select name="artikal_id" id="artikal_id" class="form-control">
                @foreach($artikli as $artikal)
                    @if($artikal->is_deleted == '0')
                        <option value="{{ $artikal->id }}" >
                            {{ $artikal->nazivArtikla }}
                        </option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="kolicinaArtikla">Količina artikla ( u komadima ):</label>
            <input type="text" name="kolicinaArtikla" class="form-control" >
        </div>
    </div>
</div>











