{{-- Wymagane parametry --}}
@props([
    'action'
])

<form action={{ $action }} {{ $attributes }} method="POST">
    @csrf
    {{ $slot }}
</form>

{{-- Wyświetlenie pomyślnego wysłania formularza --}}
@if(session('status'))
    <div>
        {{ session('status') }}
    </div>
  @endif

{{-- Wyświetlenie błędu w przypadku niepoprawnej walidacji pól --}}
@if ($errors->any())
    <div>
        {{ $errors }}
    </div>
@endif