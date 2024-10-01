<div class="form-floating mb-3">
    <input name="{{ $name }}" type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" id="{{ $id }}" placeholder="{{ $name }}" required>
    <label for="{{ $id }}">{{ $label }}</label>

    @error($name)
    <div class="invalid-feedback" role="alert">
        {{ $message }}
    </div>
    @enderror
</div>
