<div class="form-group">
    <label for="typeOfCar">Tip etikete:</label>
    <input type="text" name="tipEtikete" class="form-control" value="{{ old('tipEtikete') ?? $etiketa->tipEtikete }}">
    <div class="alert-danger">{{ $errors->first('tipEtikete') }}</div>
</div>

<div class="form-group">
    <label for="re_plate" >Cijena etikete:</label>
    <input type="text" name="cijenaEtikete" class="form-control" value="{{ old('cijenaEtikete') ?? $etiketa->cijenaEtikete }}">
    <div class="alert-danger">{{ $errors->first("cijenaEtikete") }}</div>
</div>








