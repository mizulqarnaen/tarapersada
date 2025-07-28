<div class="mb-4">
    @if($label)
        <label class="form-label" for="{{ $name }}">{{ $label }}</label>
    @endif
    <select name="{{ $name }}" id="{{ $name }}"
            class="form-select @error($name) is-invalid @enderror"
            {{ $attributes }}>
        @foreach($options as $key => $option)
            <option value="{{ $key }}" {{ $key == old($name, $selected) ? 'selected' : '' }}>
                {{ $option }}
            </option>
        @endforeach
    </select>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
