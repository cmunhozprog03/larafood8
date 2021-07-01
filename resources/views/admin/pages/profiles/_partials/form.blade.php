<div class="form-group">
    <label for="">Nome</label>
    <input type="text" name="name" class="form-control bg-dark" value="{{ $plan->name ?? old('name')}} ">
    @error('name')
        <small class="text-warning">{{ $message }}</small>
    @enderror

  </div>
  <div class="form-group">
    <label for="">Descrição</label>
    <textarea name="description" class="form-control bg-dark" id="" cols="60" rows="5" >{{ $plan->description ?? old('description') }}</textarea>
    @error('description')
        <small class="text-warning">{{ $message }}</small>
    @enderror
  </div>
  
