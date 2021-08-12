<div class="form-group">
    <label for="typeOfCar">Naziv kutije:</label>
    <input type="text" name="nazivKutije" class="form-control" value="{{ old('nazivKutije') ?? $kutija->nazivKutije }}">
    <div class="alert-danger">{{ $errors->first('nazivKutije') }}</div>
</div>

<div class="form-group">
    <label for="re_plate" >Kutija cijena:</label>
    <input type="text" name="cijenaKutije" class="form-control" value="{{ old('cijenaKutije') ?? $kutija->cijenaKutije }}">
    <div class="alert-danger">{{ $errors->first("cijenaKutije") }}</div>
</div>







