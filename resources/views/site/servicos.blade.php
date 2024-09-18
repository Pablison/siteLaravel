@extends('site.layout')
@section('title', 'Pagina Servicos')
@section('content')

    <div class="row container">
        <div class="col s12 l6 push-l3 center-align">
            <h1 class="flow-text blue-text">Nossos Serviços</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi assumenda molestiae quasi quaerat
                repellendus dolor, dolorum nulla illum dignissimos itaque.</p>
        </div>
    </div>

    <p>&nbsp</p>

    <div class="row container">
        <div class="col s12 l6">

            <div class="row">

                <div class="col s12 l6 center-align grey lighten-4">
                    <i class="fa-solid fa-truck-fast blue-text text-lighten-2 medium"></i>
                    <p class="flow-text">Lorem, ipsum dolor.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore, dolorem.</p>
                </div>

                <div class="col s12 l6 center-align">
                    <i class="fa-solid fa-car blue-text text-lighten-2 medium"></i>
                    <p class="flow-text">Lorem, ipsum dolor.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque, illo.</p>
                </div>

                <div class="col s12 l6 center-align">
                    <i class="fa-solid fa-cart-arrow-down blue-text text-lighten-2 medium"></i>
                    <p class="flow-text">Lorem, ipsum dolor.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore, dolorem.</p>
                </div>

                <div class="col s12 l6 center-align grey lighten-4">
                    <i class="fa-solid fa-car-battery blue-text text-lighten-2 medium"></i>
                    <p class="flow-text">Lorem, ipsum dolor.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore, dolorem.</p>
                </div>

            </div> {{--  final da linha --}}

        </div>

        <div class="col s12 l6">
            <img src="{{ asset('images/team.jpg') }}" alt="[imagem]" title="Site Laravel" class="responsive-img materialboxed">
        </div>


        <p>&nbsp;</p>

        <div class="row container">
            <div class="col s12 center-align">
                <h1 class="flow-text blue-text">Planos</h1>
            </div>

            <p>&nbsp;</p>

            {{-- card 1 --}}
            <div class="col s12 l4">
                <div class="card center-align">
                    <div class="card-image">
                        <i class="fa-solid fa-money-bill medium  text-lighten-2"></i>
                    </div>
                    <div class="card-content">
                        <span class="card-title">Basic R$80,99</span>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque veritatis sint qui corporis ut ipsa voluptatum illum totam?</p>
                    </div>
                    <div class="card-action">
                        <a href="#!">Mais</a>
                    </div>
                </div>
            </div>

            {{-- card 2 --}}
            <div class="col s12 l4">
                <div class="card center-align">
                    <div class="card-image">
                        <i class="fa-regular fa-money-bill-1 medium text-lighten-2"></i>
                    </div>
                    <div class="card-content">
                        <span class="card-title">Premium R$120,99</span>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque veritatis sint qui corporis ut ipsa voluptatum illum totam?</p>
                    </div>
                    <div class="card-action">
                        <a href="#!">Mais</a>
                    </div>
                </div>
            </div>

            {{-- card 3 --}}
            <div class="col s12 l4">
                <div class="card center-align">
                    <div class="card-image">
                        <i class="fa-solid fa-money-check-dollar medium green text-lighten-2"></i>
                    </div>
                    <div class="card-content">
                        <span class="card-title">Diamante R$209,99</span>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque veritatis sint qui corporis ut ipsa voluptatum illum totam?</p>
                    </div>
                    <div class="card-action">
                        <a href="#!">Mais</a>
                    </div>
                </div>
            </div>

        </div>


    </div>

@endsection
