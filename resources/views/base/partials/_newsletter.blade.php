

<!-- Newsletter -->
<section class="newsletter">
    <form action="{{route("addNewsLetter")}}" class="container" method="POST">
        @csrf
        <p>{{ __('generate.registerNewsletter') }}</p>
        <div class="fields d-flex justify-content-between">
            <input type="email" name="email" autocomplete="off" placeholder="Adresse email" required>
            <input type="submit" value="{{ __('generate.IRegister') }}">
        </div>
    </form>
</section>
