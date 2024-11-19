<main>
    <x-form.form action="/formularz" class="test">
        <x-form.input name="imie" class="test" required />
        <x-form.input type="email" name="email" required />
        <x-form.textarea name="opis" />
        <x-form.submit class="test">
            Wyślij
        </x-form.submit>
    </x-form>
</main>