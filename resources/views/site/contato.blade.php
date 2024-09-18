@extends('site.layout')
@section('title', 'Pagina contato')
@section('content')

    <div class="row container">
        <div class="col s12">
            <h1 class="flow-text blue-text">Contato</h1>
        </div>

        <div class="col s12">
            <p>
                Dias de funcionamento: <br>
                Seg a Sex - 08:00 as 18:00
            </p>

            <p>
                Telefone: (41)1111-2222<br>
                Email: teste@gmail.com
            </p>

            <p>
                Endereço: Av Alameda - PR
            </p>

        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2461.5666566125533!2d-8.482860887933395!3d51.90537188143557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x484490149c197b17%3A0xeaae339a213e9855!2s29%20Wolfe%20Tone%20St%2C%20Cork%2C%20T23%20W9KD!5e0!3m2!1spt-BR!2sie!4v1725793165512!5m2!1spt-BR!2sie"
                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="row container">
        <div class="col s12">
            <form action="{{ route('novocontato') }}" method="post">
                @csrf

                {{-- campo nome --}}
                <div class="row">
                    <div class="col s12 m6 input-field">
                        <i class="fa-solid fa-user prefix"></i>
                        <input type="text" name="name" id="name" required>
                        <label for="name">Seu Nome</label>
                    </div>
                </div>

                {{-- campo email --}}
                <div class="row">
                    <div class="col s12 m6 input-field">
                        <i class="fa-regular fa-envelope prefix"></i>
                        <input type="email" name="email" id="email" required>
                        <label for="email">Seu e-mail</label>
                    </div>
                </div>

                {{-- campo mensagem --}}
                <div class="input-field col s12">
                    <textarea id="textarea1" name="message" class="materialize-textarea"></textarea>
                    <label for="textarea1">Textarea</label>
                </div>

                {{-- botões --}}
                <div class="input-field col s12">
                    <button type="submit" class="btn btn-small blue"><i class="fa-solid fa-paper-plane left"></i>Enviar</button>
                    <button type="reset" class="btn btn-small indigo"><i class="fa-solid fa-eraser left"></i>Limpar</button>
                </div>

        </div>

        </form>
    </div>

    </div>
@endsection
