<div class="form-group">
    <label for="">Nome</label>
    <input type="text" name="name" class="form-control bg-dark" value="{{ $detail->name ?? old('name')}} ">
    @error('name')
        <small class="text-warning">{{ $message }}</small>
    @enderror

  </div>


</div>
