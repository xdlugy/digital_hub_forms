@php
use Illuminate\Validation\ValidationException;
@endphp

{{-- Wymagane parametry --}}
@props([
    'type' => 'text',
    'name'
])

{{-- Wyświetlanie jedynie inputów o typie text, email --}}
@if (in_array($type, ['text','email']))

<div class="form-field-wrapper">
    <label for={{ $name }} >{{ $name }}</label>
    <input type={{ $type }} name={{ $name }} {{ $attributes }} />
</div>

@else

{{-- W przypadku innych typów inputów, wyświetl błąd --}}
@php
throw ValidationException::withMessages(["Invalid 'type' for input field."]);
@endphp

@endif
