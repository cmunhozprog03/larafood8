<div class="form-group">
    <label for="">Nome</label>
    <input type="text" name="name" class="form-control bg-dark">
    @error('name')
        <small class="text-warning">{{ $message }}</small>
    @enderror

  </div>
  <div class="form-group">
    <label for="">Descrição</label>
    <textarea name="description" class="form-control bg-dark" id="" cols="60" rows="5"></textarea>
    @error('description')
        <small class="text-warning">{{ $message }}</small>
    @enderror
</div>
  <div class="row">
    <div class="col-md-3">
      <div class="form-group">
        <label for="">Preço</label>
        <input type="text" name="white" class="form-control bg-dark">
        @error('price')
            <small class="text-warning">{{ $message }}</small>
        @enderror
      </div>
    </div>
  </div>
