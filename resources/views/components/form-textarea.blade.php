<div class="mb-4">
    @if($label)
        <label class="form-label" for="{{ $name }}">{{ $label }}</label>
    @endif
    <textarea name="{{ $name }}" id="{{ $name }}"
              rows="{{ $rows }}"
              class="form-control @error($name) is-invalid @enderror"
              {{ $attributes }}>{{ old($name, $value) }}</textarea>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
