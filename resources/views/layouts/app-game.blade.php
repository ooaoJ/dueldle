<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dueldle - Home</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="{{asset('D.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Roboto:wght@400;500&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --light-bg: #ffffff;
            /* Fundo branco */
            --panel-bg: rgba(240, 240, 240, 0.85);
            /* Painel mais claro */
            --primary-gold: #b8860b;
            /* Ouro mais suave */
            --accent-blue: #6495ed;
            /* Azul cornflower mais suave */
            --text-color: #333333;
            /* Texto escuro para contraste */
            --correct-green: #228b22;
            /* Verde floresta */
            --incorrect-red: #cc3333;
            /* Vermelho mais suave */
            --partial-yellow: #daa520;
            /* Amarelo dourado */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--light-bg);
            background-image: url('{{asset("fundo-dueldle.png")}}');
            background-size: cover;
            background-position: 200% 30%;
            background-attachment: fixed;
            background-repeat: no-repeat;
            color: var(--text-color);
            display: flex;
            justify-content: center;
            padding-top: 50px;
            min-height: 100vh;
        }

        .game-container {
            width: 100%;
            max-width: 800px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .logo {
            font-family: 'Cinzel', serif;
            font-size: 4rem;
            
            color: var(--primary-gold);
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.3), 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .select-mode {
            width: 700px;
            height: 500px;
            backdrop-filter: blur(2px);
            /* opacity: 0.5; */
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 40px;
        }
        .mode {
            width: 575px;
            height: 80px;
            padding: 5px;
            border: 1px solid black;
            background-color: white ;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            transform: skew(-20deg);
            transition: transform 0.5s ease;
            position: relative;
        }
        .mode:hover{
            transform: scale(1.05) skew(-20deg);
            cursor: pointer;
        }
        .mode h2{
            font-size: 50px;
            text-align: start;
        }

        .mode h2,
        .mode p {
            transform: skew(20deg);
        }
        .mode img{
            position: absolute;
        }

        .mode div {
            width: 300px;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <div class="game-container">
        <header>
            <img src="{{asset('dueldle.png')}}" alt="Logo Dueldle" width="300px">

        </header>

        <main class="select-mode">
            <div class="mode" onclick="window.location.href='{{route('classic')}}'">
                <img src="{{asset('carta.png')}}" alt="card" style="width: 70px; left: -20px;">
                <div>
                    <h2>Clássico</h2>
                    <p>Consiga pistas a cada tentativa</p>
                </div>
            </div>
            <div class="mode">
                <img src="{{asset('yugi.png')}}" alt="card" style="width: 100px; left: -40px;">
                <div>
                    <h2>Personagem</h2>
                    <p>Adivinhe o personagem do dia</p>
                </div>
            </div>
            <div class="mode">
                <img src="{{asset('falas.png')}}" alt="card" style="width: 100px; left: -45px;">
                <div>
                    <h2>Falas</h2>
                    <p>Adivinhe a fala dos personagens</p>
                </div>
            </div>
            <div class="mode">
                <img src="{{asset('dboa.png')}}" alt="card" style="width: 100px; left: -45px;">
                <div>
                    <h2>Carta</h2>
                    <p>Adivinhe qual é a carta na imagem</p>
                </div>
            </div>
        </main>
    </div>
</body>

</html>