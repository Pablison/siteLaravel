<div class="slider">
    <ul class="slides">
        <li>
            <img src="{{ asset('images/banner-slide1.jpg') }}" alt="[imagem]" title="Site Laravel">
            <div class="caption left-align">
                <h3>Lorem ipsum dolor sit.</h3>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, ullam.</h5>

                <a href="#modal-lead" class="btn btn-small blue modal-trigger">Quero me cadastrar</a>
            </div>
        </li>

        <li>
            <img src="{{ asset('images/banner-slide2.jpg') }}" alt="[imagem]" title="Site Laravel">
            <div class="caption left-align">
                <h3>Lorem ipsum dolor sit.</h3>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, ullam.</h5>

                <a href="#modal-lead" class="btn btn-small blue modal-trigger">Quero me cadastrar</a>
            </div>
        </li>
    </ul>
</div>

<div id="modal-lead" class="modal">
    <div class="modal-content">
        <h3 class="flow-text">Janela Modal</h3>


        <form action=" {{ route('lead') }}" method="post">
            @csrf


            <div class="row">

                {{-- field nome --}}
                <div class="col s12 m6 input-field">
                    <i class="material-icons prefix">person</i>
                    <input type="text" name="name" id="name" required>
                    <label for="name">Digite seu nome</label>
                </div>

                {{-- field phone --}}
                <div class="col s12 m6 input-field">
                    <i class="material-icons prefix">phone_iphone</i>
                    <input type="tel" name="tel" id="tel" required>
                    <label for="tel">Digite seu telefone</label>
                </div>

                {{-- field email --}}
                <div class="col s12 input-field">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" required>
                    <label for="email">Digite seu E-mail</label>
                </div>

                {{-- botões de ação --}}
                <div class="col s12 input-field">
                    <input type="submit" value="enviar" class="btn btn-small blue">
                    <input type="reset" value="limpar" class="btn btn-small red">

                </div>

            </div>

        </form>

    </div>
</div>
