<nav class="blue">
    <div class="nav-wrapper container">

        {{-- menu hamburger --}}
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <a href="{{ route('home') }}" class="brand-logo light">Site Laravel</a>

        {{-- menu to desktop --}}
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('servicos') }}">Serviços</a></li>
            <li><a href="{{ route('galeria') }}">Galeria</a></li>
            <li><a href="{{ route('contato') }}">Contato</a></li>
        </ul>

        {{-- menu to mobile --}}
        <ul id="slide-out" class="sidenav">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="{{ asset('images/sidenav.jpg') }}" alt="[imagem]" title="Site Laravel">
                    </div>
                    {{-- <a href="#user"><img class="circle" src="images/yuna.jpg"></a> --}}
                    <a href="#name"><span class="white-text name">Lavavel - Pablison </span></a>
                    <a href="#email"><span class="white-text email">pablison@gmail.com</span></a>
                </div>
            </li>
            {{-- <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li> --}}
            <li><a href="#!">Menu</a></li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a href="{{ route('home') }}"><i class="material-icons text-lighten-2 blue-text">home</i>Home</a></li>
            <li><a href="{{ route('servicos') }}"><i class="material-icons text-lighten-2 blue-text">engineering</i>Serviços</a></li>
            <li><a href="{{ route('galeria') }}"><i class="material-icons text-lighten-2 blue-text">photo_camera  </i>Galeria</a></li>
            <li><a href="{{ route('contato') }}"><i class="material-icons text-lighten-2 blue-text">contact_phone</i>Contato</a></li>
        </ul>

    </div>
</nav>
