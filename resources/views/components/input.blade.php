<div class="col-12 mt-3 ">
    <label for="{{ $id }}" class="form-label"> {{ $label}}  </label>
    <input id="{{ $id}}" type="{{ $type}}" name="{{ $name }}" class="form-control" placeholder="enter your {{$name}}"  value="{{old($name)}}">

    @error($name)
    <div class="alert alert-danger text-center" role="alert">{{ $message }}</div>
    @enderror
  </div>
