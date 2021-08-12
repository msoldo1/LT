<div class="form-group">
    <label for="nazivPlatna">Naziv platna:</label>
    <input type="text" name="nazivPlatna" class="form-control" value="{{ old('nazivPlatna') ?? $platno->nazivPlatna }}">
    <div class="alert-danger">{{ $errors->first('nazivPlatna') }}</div>
</div>

<div class="form-group">
    <label for="re_plate" >Platno cijena:</label>
    <input type="text" name="cijenaPlatna" class="form-control" value="{{ old('cijenaPlatna') ?? $platno->cijenaPlatna }}">
    <div class="alert-danger">{{ $errors->first("cijenaPlatna") }}</div>
</div>







