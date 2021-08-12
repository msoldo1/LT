<div class="form-group">
    <label for="typeOfCar">Naziv rada:</label>
    <input type="text" name="nazivRada" class="form-control" value="{{ old('nazivRada') ?? $rad->nazivRada }}">
    <div class="alert-danger">{{ $errors->first('nazivRada') }}</div>
</div>

<div class="form-group">
    <label for="re_plate" >Rad cijena:</label>
    <input type="text" name="cijenaRada" class="form-control" value="{{ old('cijenaRada') ?? $rad->cijenaRada }}">
    <div class="alert-danger">{{ $errors->first("cijenaRada") }}</div>
</div>







