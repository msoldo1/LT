<div class="form-group">
    <div class="row">
        <div class="col">
            <label for="nazivCipke">Naziv Cipke:</label>
            <p>{{ $cipka->nazivCipke }}</p>
        </div>
        <div class="col">
            <label for="cipka_id">Id Cipke:</label>
            <input type="text" name="cipka_id" class="form-control" value="{{ $cipka->id }}" readonly>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="kolicina" >Unesite količinu cipke:</label>
    <input type="text" name="kolicina" class="form-control" value="{{ old('kolicina') ?? $kolicina->kolicina }}">
    <div class="alert-danger">{{ $errors->first("kolicina") }}</div>
</div>







