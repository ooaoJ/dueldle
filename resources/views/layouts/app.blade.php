<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Moderno e Minimalista</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <style>
        /* Estilos Gerais */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5; /* Fundo levemente mais escuro */
            color: #333;
        }

        /* Estilos do Cabeçalho (Header) */
        .header {
            background-color: #ffffff; /* Fundo branco */
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header-logo {
            font-size: 28px;
            font-weight: bold;
            color: #007bff; /* Azul para o logo */
            text-transform: uppercase;
        }

        .header-nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 25px;
        }

        .header-nav a {
            text-decoration: none;
            color: #555;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .header-nav a:hover {
            color: #007bff; /* Azul no hover */
        }

        /* Estilos da Seção Principal (Main) */
        .main-content {
            padding: 60px 20px;
            text-align: center;
            max-width: 1300px;
            margin: 50px auto;
            background-color: #ffffff; /* Fundo branco para a seção principal */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        .main-content h1 {
            color: #007bff;
            font-size: 3em;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .main-content p {
            font-size: 1.1em;
            line-height: 1.6;
            color: #666;
        }
    </style>
</head>
<body>

    <header class="header">
        <div class="header-logo">
            DUELDLE ADMIN
        </div>
        <nav class="header-nav">
            <ul>
                <li><a href="{{route('cards.index')}}">Cards</a></li>
                <li><a href="#">Personagens</a></li>
                <li><a href="#">Falas</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-content">
        @yield('content')
    </main>

</body>
</html>