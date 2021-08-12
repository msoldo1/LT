<div class="form-group">
    <label for="typeOfCar">Naziv kupca:</label>
    <input type="text" name="naziv" class="form-control" value="{{ old('naziv') ?? $kupac->naziv }}">
    <div class="alert-danger">{{ $errors->first('naziv') }}</div>
</div>

<div class="form-group">
    <label for="re_plate" >PDV broj:</label>
    <input type="text" name="PDV_broj" class="form-control" value="{{ old('PDV_broj') ?? $kupac->PDV_broj }}">
    <div class="alert-danger">{{ $errors->first("PDV_broj") }}</div>
</div>

<div class="form-group">
    <label for="re_plate" >ID broj:</label>
    <input type="text" name="ID_broj" class="form-control" value="{{ old('ID_broj') ?? $kupac->ID_broj }}">
    <div class="alert-danger">{{ $errors->first("ID_broj") }}</div>
</div>







