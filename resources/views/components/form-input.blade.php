<div class="mb-3">
    @if($label)
        <label class="form-label">{{ $label }}</label>
    @endif
    <input type="{{ $type }}" name="{{ $name }}"
        class="form-control @error($name) is-invalid @enderror"
        value="{{ old($name, $value) }}" {{ $attributes }}>

    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
