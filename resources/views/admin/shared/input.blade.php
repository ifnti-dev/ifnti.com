@php
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $label ??= '';
    $placeholder ??= '';
@endphp

<div @class(['form-group', $class])>
    @if ($label)
    
    <label for="{{ $name }}">{{ $label }} <span>*</span></label> <br>
    @endif

    @if ($type == 'textarea')
        <textarea class="form-control resize @error($name)
    is-invalid
@enderror" type="{{ $type }}" name="{{ $name }}"
            id="{{ $name }}" value="{{ old($name) }}" placeholder="{{$placeholder}}">{{ old($name, $value) }}</textarea>
    @else
        <input class="form-control @error($name)
    is-invalid
@enderror" type="{{ $type }}"
            name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}" placeholder="{{$placeholder}}" autofocus>
    @endif
    

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
