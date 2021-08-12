<div class="form-group">
    <div class="row">
        <div class="col">
            <label for="nazivPlatna">Naziv Gume:</label>
            <p>{{ $guma->nazivGume }}</p>
        </div>
        <div class="col">
            <label for="guma_id">Id Gume:</label>
            <input type="text" name="guma_id" class="form-control" value="{{ $guma->id }}" readonly>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="re_plate" >Unesite količinu gume:</label>
    <input type="text" name="kolicina" class="form-control" value="{{ old('kolicina') ?? $kolicina->kolicina }}">
    <div class="alert-danger">{{ $errors->first("kolicina") }}</div>
</div>







