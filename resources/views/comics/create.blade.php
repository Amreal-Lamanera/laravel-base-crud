{{-- form di creazione --}}
@extends('layout.app')

@section('content')

    <section class="create">
        <div class="container">
            <h2>
                Aggiungi un nuovo fumetto
            </h2>

            <form action=" {{ route('comics.store') }} " method="POST">
                <div class="flex">
                    @csrf
                    <div class="form-element">
                        <label for="title">
                            Titolo del fumetto
                        </label>
                        <input type="text" name="title" id="title" placeholder="Titolo del fumetto">
                    </div>

                    <div class="form-element">
                        <label for="thumb">
                            Immagine di copertina
                        </label>
                        <input type="text" name="thumb" id="thumb" placeholder="Url copertina">
                    </div>

                    <div class="form-element">
                        <label for="price">
                            Prezzo
                        </label>
                        <input type="text" name="price" id="price" placeholder="Prezzo del fumetto">
                    </div>

                    <div class="form-element">
                        <label for="series">
                            Serie
                        </label>
                        <input type="text" name="series" id="series" placeholder="Serie fumetto">
                    </div>

                    <div class="form-element">
                        <label for="type">
                            Tipo
                        </label>
                        <input type="text" name="type" id="type" placeholder="Tipo di fumetto">
                    </div>

                    <div class="form-element">
                        <label for="sale_date">
                            Data di uscita (anno-mese-giorno)
                        </label>
                        <input type="date" name="sale_date" id="sale_date" placeholder="Data di uscita">
                    </div>
                </div>

                <div class="form-element" id="txt-area">
                    <label for="description">
                        Descrizione del fumetto:
                    </label>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="Descrizione"></textarea>
                </div>

                <div class="form-element">
                    <input class="btn" type="submit" value="Invia">
                </div>

            </form>
        </div>
    </section>

@endsection