<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dueldle - Control Painel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('D.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
            color: #333;
        }

        .header {
            background-color: #ffffff;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header-logo {
            font-size: 28px;
            font-weight: bold;
            color: #007bff;
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
            color: #007bff;
        }

        .main-content {
            padding: 60px 20px;
            text-align: center;
            max-width: 1300px;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        }

        .main-content h1 {
            color: #007bff;
            font-size: 3em;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .table td {
            max-width: 100px;
            white-space: normal;
            word-wrap: break-word;
        }

        .col-description,
        .col-effect {
            max-width: 250px;
            white-space: nowrap !important;
            overflow: hidden !important;
            text-overflow: ellipsis !important;
        }

        /* ----- STEAM CARDS STYLES (unique namespace .d-steam-*) ----- */
        .d-steam-cards *, .d-steam-cards *::before, .d-steam-cards *::after { box-sizing: border-box; }

        .d-steam-cards {
            margin-left: -1rem;
            margin-right: -1rem;
            display: flex;
            flex-flow: row wrap;
            justify-content: flex-start;
            align-items: flex-start;
        }

        .d-steam-card-wrapper {
            max-width: 250px;
            min-width: 150px;
            margin: 0;
            flex: 0 1 16.66%;
            padding: 1rem;
        }

        @media only screen and (max-width: 1200px) { .d-steam-card-wrapper { flex-basis: 20%; } }
        @media only screen and (max-width: 768px)  { .d-steam-card-wrapper { flex-basis: 25%; } }
        @media only screen and (max-width: 520px)  { .d-steam-card-wrapper { flex-basis: 50%; } }

        .d-steam-card-link { display: block; text-decoration: none; outline: none; }
        .d-steam-card {
            width: 100%;
            padding: 0 0 150% 0;
            background: no-repeat transparent 50% 50%;
            background-size: cover;
            border: 1px solid rgba(0, 0, 0, 0.25);
            border-top: 1px solid rgba(255,255,255,0.06);
            box-shadow: 0 8px 10px -2px rgba(0, 0, 0, 0.5);
            transition: all ease 0.28s 0.01s;
            transform: perspective(222px) translate3d(0px, 5px, 0px) rotateX(0deg);
            perspective-origin: top;
            position: relative;
            z-index: 1;
            overflow: hidden;
            will-change: transform, box-shadow;
            border-radius: 6px;
        }

        .d-steam-card::before {
            width: 100%;
            height: 172%;
            position: absolute;
            top: 0;
            left: 0;
            content: "";
            background-image: linear-gradient(35deg, rgba(0,0,0,0.10) 0%, rgba(0,0,0,0.07) 51.5%, rgba(255,255,255,0.15) 54%, rgba(255,255,255,0.15) 100%);
            transform: translateY(-36%);
            opacity: 0.5;
            transition: all ease 0.28s 0.01s;
            pointer-events: none;
        }

        .d-steam-card-link:focus .d-steam-card,
        .d-steam-card:hover,
        .d-steam-card:focus {
            border: 1px solid rgba(0, 0, 0, 0.1);
            transform: perspective(222px) translate3d(0px, 0px, 8px) rotateX(3deg);
            transform-origin: center;
            box-shadow: 0 14px 16px -2px rgba(0, 0, 0, 0.5);
        }

        .d-steam-card-link:focus .d-steam-card::before,
        .d-steam-card:hover::before,
        .d-steam-card:focus::before {
            opacity: 1;
            transform: translateY(-20%);
        }

        .d-steam-card:active { filter: brightness(80%) contrast(110%); }

        .d-steam-card-link:focus { outline: 3px solid rgba(0,123,255,0.18); outline-offset: 4px; border-radius: 8px; }

    </style>
</head>

<body>

    <header class="header">
        <div class="header-logo">
            <img src="{{asset('dueldle-admin.png')}}" alt="Logo Dueldle" width="300px">
        </div>
        <nav class="header-nav">
            <ul>
                <li><a href="{{route('cards.index')}}">Cards CRUD</a></li>
                <li><a href="{{route('view.cards')}}">Cards View</a></li>
                <li><a href="{{route('personagens.index')}}">Personagens CRUD</a></li>
                <li><a href="{{route('view.personagens')}}">Personagens View</a></li>
                <li><a href="{{route('classic')}}">Game</a></li>

                <li><a href="#">Falas</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-content">
        @yield('content')
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        (function(){
            var cards = document.querySelectorAll('.d-steam-card');
            if(!cards.length) return;
            cards.forEach(function(card){
                card.addEventListener('pointermove', function(e){
                    var rect = card.getBoundingClientRect();
                    var x = (e.clientX - rect.left) / rect.width;
                    var y = (e.clientY - rect.top) / rect.height;
                    var rx = (0.5 - y) * 6;
                    var ry = (x - 0.5) * 10;
                    card.style.transform = 'perspective(222px) translate3d(0px, 0px, 8px) rotateX(' + rx + 'deg) rotateY(' + ry + 'deg)';
                });
                card.addEventListener('pointerleave', function(){
                    card.style.transform = '';
                });
            });
        })();
    </script>

</body>

</html>
