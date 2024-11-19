<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
        public function store(Request $request) {

        //walidacja pól
        $fields = $request->validate([
            'imie' => 'required|min:3|max:50',
            'email' => 'required|email:rfc,dns',
            'opis' => 'max:500'
        ]);

        // w celu wysłania odpowiedzi w formacie JSON pól formularza, potrzebne zastosowanie AJAX aby jednocześnie
        // działała odpowiedź JSON i redirect dla użytkownika
        // return response()->json($fields);

        // ->with status w celu wyświetlenia informacji o pomyślnym wysłaniu
        return redirect('/')->with('status', 'Pomyślnie wysłano!');
    }
}
