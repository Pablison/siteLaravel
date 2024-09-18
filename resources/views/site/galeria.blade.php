@extends('site.layout')
@section('title', 'Pagina Galeria de Fotos')
@section('content')

    <div class="row container">
        <div class="col s12">
            <h1 class="flow-text">Galeria de Fotos</h1>
        </div>
    </div>


    <div class="row container">

        @php
            $imgs = [
                'galeria1.jpg',
                'galeria2.jpg',
                'galeria3.jpg',
                'galeria4.jpg',
                'galeria5.jpg',
                'galeria6.jpg',
                'galeria7.jpg',
                'galeria8.jpg',
            ];
            $titulo = [
                'Foto do evento 1',
                'Foto do evento 2',
                'Foto do evento 3',
                'Foto do evento 4',
                'Foto do evento 5',
                'Foto do evento 6',
                'Foto do evento 7',
                'Foto do evento 8',
            ];
        @endphp

        @foreach ($imgs as $key => $img)
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/galeria') }}/{{ $img }}" alt="[imagem]" title="Site Laravel"
                            class="responsive-img materialboxed">
                        <div class="card-title">{{ $titulo[$key] }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row container">
        <div class="col s12 m6">
            <h1 class="flow-text">Lorem ipsum dolor sit amet.</h1>
            <p class="paragrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quae possimus aliquid animi
                quibusdam, iusto eligendi! Molestiae atque magnam reprehenderit?</p>

            <p class="paragrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quae possimus aliquid animi
                quibusdam, iusto eligendi! Molestiae atque magnam reprehenderit?</p>
        </div>

        <div class="col s12 m6">
            <img src="{{ asset('images/galeria/galeria1.jpg') }}" alt="[imagem]" title="Site Laravel"
                class="responsive-img">
        </div>


    </div>

    <div class="row container">

        <div class="col s12 m6">
            <img src="{{ asset('images/galeria/galeria2.jpg') }}" alt="[imagem]" title="Site Laravel"
                class="responsive-img">
        </div>

        <div class="col s12 m6">
            <h1 class="flow-text">Lorem ipsum dolor sit amet.</h1>
            <p class="paragrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quae possimus aliquid animi
                quibusdam, iusto eligendi! Molestiae atque magnam reprehenderit?</p>

            <p class="paragrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quae possimus aliquid animi
                quibusdam, iusto eligendi! Molestiae atque magnam reprehenderit?</p>
        </div>

    </div>

@endsection
