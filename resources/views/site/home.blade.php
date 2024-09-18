@extends('site.layout')

@section('title', 'Pagina Home')
@section('content')

    <div class="row container">
        <div class="col s12 center-align">
            <p class="flow-text">Lorem ipsum dolor sit amet.</p>
        </div>

        <div class="divider col s12"></div>

        <p>&nbsp;</p>

        {{-- card1 --}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('images/cards/card1.jpg') }}" alt="[imagem]" title="Site Laravel"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum dolor.</span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus.</p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>

        {{-- card2 --}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('images/cards/card2.jpg') }}" alt="[imagem]" title="Site Laravel"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum dolor.</span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus.</p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>

        {{-- card2 --}}
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('images/cards/card3.jpg') }}" alt="[imagem]" title="Site Laravel"
                        class="responsive-img materialboxed">
                </div>
                <div class="card-content">
                    <span class="card-title">Lorem, ipsum dolor.</span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus.</p>
                </div>
                <div class="card-action">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>

    </div>

    <p>&nbsp;</p>

    <div class="row container">
        <div class="col s12">
            <div class="divider"></div>
        </div>
    </div>
    <p>&nbsp;</p>

    <section class="row container">
        <div class="col s12">
            <h1 class="flow-text light">
                Lorem ipsum dolor sit.
            </h1>

            <p class="flow-text justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, amet corporis alias nobis ipsa tempora
                corrupti? Reiciendis iusto provident explicabo consequuntur placeat tempora quo voluptate repellat,
                exercitationem deleniti quod iure.
            </p>

            <p>
                <a href="#!" class="waves-effect waves-light btn btn-small blue">saiba mais</a>
                <a href="#!" class="waves-effect waves-light btn btn-small purple">cadastre-se</a>
            </p>
        </div>
    </section>

    <div class="parallax-container">
        <div class="parallax">
            <img src="{{ asset('images/parallax.jpg') }}" alt="[imagem]" title="Site Laravel" class="reponsive-img">
        </div>
    </div>
    <p>&nbsp;</p>

    <div class="row container">

        <div class="col s12 m6 l4 center-align">
            <img src="{{ asset('images/team/team1.jpg') }}" alt="[imagem]" title="Site laravel" class="responsive-img circle">
            <p class="flow-text">Bia</p>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, quam!
            </p>

            <p>
                <a href="#!"><i class="fa-brands fa-facebook small"></i></a>
                <a href="#!"><i class="fa-brands fa-linkedin small"></i></a>
            </p>
        </div>

        <div class="col s12 m6 l4 center-align">
            <img src="{{ asset('images/team/team2.jpg') }}" alt="[imagem]" title="Site laravel" class="responsive-img circle">
            <p class="flow-text">Mary</p>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, quam!
            </p>

            <p>
                <a href="#!"><i class="fa-brands fa-facebook small"></i></a>
                <a href="#!"><i class="fa-brands fa-linkedin small"></i></a>
            </p>
        </div>

        <div class="col s12 m6 l4 center-align">
            <img src="{{ asset('images/team/team3.jpg') }}" alt="[imagem]" title="Site laravel" class="responsive-img circle">
            <p class="flow-text">Jane</p>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, quam!
            </p>

            <p>
                <a href="#!"><i class="fa-brands fa-facebook small"></i></a>
                <a href="#!"><i class="fa-brands fa-linkedin small"></i></a>
            </p>
        </div>

    </div>
@endsection
