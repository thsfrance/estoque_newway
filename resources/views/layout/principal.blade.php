<html>
    <head>
        <title>Controle de Produtos</title>
        <link type="text/css" href="/css/app.css" rel="stylesheet">
        <link type="text/css" href="/css/custom.css" rel="stylesheet">
    </head>
    <body>
        <div class='container'>
            <nav>
                <div class="navbar navbar-default">
                    <div class="container-fluid">
                        <h1>Controle de Produtos</h1>
                        <ul class='nav navbar-nav navbar-left'>
                            <li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
                            <li><a href="{{action('ProdutoController@novo')}}">Novo</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('conteudo')
            <footer class='footer'><p>Controle de produtos em laravel</p></footer>
        </div>
    </body>
</html>