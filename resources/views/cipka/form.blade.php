<div class="form-group">
    <label for="typeOfCar">Naziv cipke:</label>
    <input type="text" name="nazivCipke" class="form-control" value="{{ old('nazivCipke') ?? $cipka->nazivCipke }}">
    <div class="alert-danger">{{ $errors->first('nazivCipke') }}</div>
</div>

<div class="form-group">
    <label for="re_plate" >Cipka cijena:</label>
    <input type="text" name="cijenaCipke" class="form-control" value="{{ old('cijenaCipke') ?? $cipka->cijenaCipke }}">
    <div class="alert-danger">{{ $errors->first("nazivCipke") }}</div>
</div>







