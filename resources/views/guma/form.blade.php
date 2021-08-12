<div class="form-group">
    <label for="typeOfCar">Naziv gume:</label>
    <input type="text" name="nazivGume" class="form-control" value="{{ old('nazivGume') ?? $guma->nazivGume }}">
    <div class="alert-danger">{{ $errors->first('nazivGume') }}</div>
</div>

<div class="form-group">
    <label for="re_plate" >Guma cijena:</label>
    <input type="text" name="cijenaGume" class="form-control" value="{{ old('cijenaGume') ?? $guma->cijenaGume }}">
    <div class="alert-danger">{{ $errors->first("cijenaGume") }}</div>
</div>







