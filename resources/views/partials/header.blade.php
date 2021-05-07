<header>
    <div id="logo">
        <a href="{{route('pagina-home')}}"><img src="{{asset('img/logo.png')}}" alt="Logo Molisana"></a>
    </div>

    <div class="main-menu">
        <nav>
            <ul>
                <li>
                    <a href="{{route('pagina-home')}}"
                    class="{{(Request::route()->getName() == 'pagina-home')
                    ? 'active' : ''}}">
                        Home
                    </a>
                </li>

                <li>
                    <a href="{{route('pagina-prodotti')}}"
                    class="{{(Request::route()->getName() == 'pagina-prodotti')
                    ? 'active' : ''}}">
                        Prodotti
                    </a>
                </li>

                <li>
                    <a href="{{route('pagina-news')}}"
                    class="{{(Request::route()->getName() == 'pagina-news')
                    ? 'active' : ''}}">
                        News
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>