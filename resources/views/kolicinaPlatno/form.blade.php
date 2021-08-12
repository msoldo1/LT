<div class="form-group">
    <div class="row">
        <div class="col">
            <label for="nazivPlatna">Naziv Platna:</label>
            <p>{{ $platno->nazivPlatna }}</p>
        </div>
        <div class="col">
            <label for="platno_id">Id Platna:</label>
            <input type="text" name="platno_id" class="form-control" value="{{ $platno->id }}" readonly>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="re_plate" >Unesite količinu platna:</label>
    <input type="text" name="kolicina" class="form-control" value="{{ old('kolicina') ?? $kolicina->kolicina }}">
    <div class="alert-danger">{{ $errors->first("kolicina") }}</div>
</div>







