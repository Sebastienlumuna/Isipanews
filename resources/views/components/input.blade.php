<div class="col-12 mt-3 ">
    <label for="{{ $id }}" class="form-label"> {{ $label}}  </label>
    <input id="{{ $id}}" type="{{ $type}}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror" placeholder="enter your {{$name}}"  value="{{old($name)}}" required>

    @error($name)
    <div class="invalid-feedback" role="alert">
        {{ $message }}</div>
  </div>
  @enderror
