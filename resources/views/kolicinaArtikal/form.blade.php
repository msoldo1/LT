<div class="form-group">
    <div class="row">
        <div class="col">
            <label for="nazivPlatna">Naziv Artikla:</label>
            <p>{{ $artikal->nazivArtikla }}</p>
        </div>
        <div class="col">
            <label for="artikal_id">Id artikla:</label>
            <input type="text" name="artikal_id" class="form-control" value="{{ $artikal->id }}" readonly>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="re_plate" >Unesite količinu artikla:</label>
    <input type="number" name="kolicina" class="form-control" value="{{ old('kolicina') ?? $kolicina->kolicina }}">
    <div class="alert-danger">{{ $errors->first("kolicina") }}</div>
</div>







