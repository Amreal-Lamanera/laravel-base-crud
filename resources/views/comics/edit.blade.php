{{-- form di creazione --}}
@extends('layout.app')

@section('metaTitle', 'DC-Comics: Edit Comic')

@section('content')

    <section class="create">
        <div class="container">
            <h2>
                Modifica fumetto
            </h2>

            <form action=" {{ route('comics.update', $comic) }} " method="POST">
                <div class="flex">
                    @csrf
                    @method('PUT')
                    <div class="form-element">
                        <label for="title">
                            Titolo del fumetto
                        </label>
                        <input
                            type="text"
                            name="title"
                            id="title"
                            placeholder="Titolo del fumetto"
                            value="{{ old('title', $comic->title) }}"
                            style="@error('title') border-color: red; @enderror"
                        >
                        @error('title')
                            <div style="color: red; font-size:12px;" class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-element">
                        <label for="thumb">
                            Immagine di copertina
                        </label>
                        <input
                            type="text"
                            name="thumb"
                            id="thumb"
                            placeholder="Url copertina"
                            value="{{ old('thumb', $comic->thumb) }}"
                            style="@error('thumb') border-color: red; @enderror"
                        >
                        @error('thumb')
                            <div style="color: red; font-size:12px;" class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-element">
                        <label for="price">
                            Prezzo
                        </label>
                        <input
                            type="text"
                            name="price"
                            id="price"
                            placeholder="Prezzo del fumetto"
                            value="{{ old('price', $comic->price) }}"
                            style="@error('price') border-color: red; @enderror"
                        >
                        @error('price')
                            <div style="color: red; font-size:12px;" class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-element">
                        <label for="series">
                            Serie
                        </label>
                        <input
                            type="text"
                            name="series"
                            id="series"
                            placeholder="Serie fumetto"
                            value="{{ old('series', $comic->series) }}"
                            style="@error('series') border-color: red; @enderror"
                        >
                        @error('series')
                            <div style="color: red; font-size:12px;" class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-element">
                        <label for="type">
                            Tipo
                        </label>
                        <input
                            type="text"
                            name="type"
                            id="type"
                            placeholder="Tipo di fumetto"
                            value="{{ old('type', $comic->type) }}"
                            style="@error('type') border-color: red; @enderror"
                        >
                        @error('type')
                            <div style="color: red; font-size:12px;" class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-element">
                        <label for="sale_date">
                            Data di uscita (anno-mese-giorno)
                        </label>
                        <input
                            type="date"
                            name="sale_date"
                            id="sale_date"
                            placeholder="Data di uscita"
                            value="{{ old('sale_date', $comic->sale_date) }}"
                            style="@error('sale_date') border-color: red; @enderror"
                        >
                        @error('sale_date')
                            <div style="color: red; font-size:12px;" class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-element" id="txt-area">
                    <label for="description">
                        Descrizione del fumetto:
                    </label>
                    <textarea
                        name="description"
                        id="description"
                        cols="30"
                        rows="10"
                        placeholder="Descrizione"
                        style="@error('description') border-color: red; @enderror"
                    >{{ old('description', $comic->description) }}</textarea>
                    @error('description')
                            <div style="color: red; font-size:12px;" class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div class="form-element">
                    <input class="btn" type="submit" value="Invia">
                </div>

            </form>

            {{-- QUI: gestione errore validate --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </section>

@endsection