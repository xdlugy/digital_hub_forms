{{-- Wymagane parametry --}}
@props([
    'name'    
])

<div class="form-field-wrapper">
    <label for={{ $name }}>{{ $name }}</label>
    <textarea name={{ $name }} {{ $attributes }}></textarea>
</div>