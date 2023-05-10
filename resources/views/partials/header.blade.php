<header>

    <div class="container text-center">
        <img src="{{Vite::asset('resources/img/logo.png')}}" alt="Logo Molisana"/>

        <nav>
            <ul class="d-flex list-unstyled justify-content-center">
                <li class="m-3 {{Route::currentRouteName() == 'home'?'bg-white':''}}">
                    <a  href="{{route('home')}}">Home</a>
                </li>
                <li class="m-3 {{Route::currentRouteName() == 'products'?'bg-white':''}}">
                    <a href="{{route('products')}}">Prodotti</a>
                </li>
                <li class="m-3 {{Route::currentRouteName() == 'news'?'bg-white':''}}">
                    <a href="{{route('news')}}">News</a>
                </li>
            </ul>
        </nav>
    </div>


</header>
