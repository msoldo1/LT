
    <div class="form-group" >
        <label for="kupac_id">Naziv kupca:</label>
        <select name="kupac_id" id="kupac_id" class="form-control">
            @foreach($kupci as $kupac)
                @if($kupac->is_deleted == '0')
                    <option value="{{ $kupac->id }}" {{ $kupac->id == $racun->kupac->id  ? 'selected' : '' }}>
                        {{ $kupac->naziv }}
                    </option>
                @endif
            @endforeach
        </select>
    </div>











