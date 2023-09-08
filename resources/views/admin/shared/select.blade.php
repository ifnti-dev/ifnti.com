@php
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $label ??= ucfirst($name);
    $options ??= '';
@endphp

<div @class(['form-group', $class])>
    <label for="{{ $name }}">{{ $label }}</label><br>

    <select name="{{ $name }}[]" id="{{ $name }}">
        @foreach ($options as $key => $valeur)
            <option  value="{{ $key }}">{{ $valeur }}</option>
        @endforeach
    </select>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
