<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dueldle - Adivinhe a Carta!</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <style>
        /* --- Variáveis de Cores e Estilos Globais --- */
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
            /* Cor de fundo de fallback caso a imagem não carregue */
            background-image: url('{{asset("fundo-dueldle.png")}}');
            /* Sua imagem de fundo */
            background-size: cover;
            /* Garante que a imagem cubra toda a área, cortando se necessário */
            background-position: center;
            /* Centraliza a imagem no fundo */
            background-attachment: fixed;
            /* Fixa a imagem no lugar enquanto o conteúdo rola */
            background-repeat: no-repeat;
            /* Importante para que a imagem não se repita, já que ela é um design único */
            color: var(--text-color);
            display: flex;
            justify-content: center;
            padding-top: 50px;
            /* Pode ajustar conforme a necessidade de espaço no topo */
            min-height: 100vh;
            /* Garante que o body ocupe pelo menos a altura total da viewport */
        }

        /* --- Contêiner Principal --- */
        .game-container {
            width: 100%;
            max-width: 800px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 25px;
            /* Espaço entre os elementos */
            padding: 20px;
        }

        /* --- Logo --- */
        .logo {
            font-family: 'Cinzel', serif;
            font-size: 4rem;
            color: var(--primary-gold);
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.3), 0 0 20px rgba(0, 0, 0, 0.2);
            /* Sombra mais suave */
        }

        /* --- Ícones de Modo de Jogo --- */
        .game-modes {
            display: flex;
            gap: 20px;
        }

        .mode-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: var(--panel-bg);
            border: 2px solid var(--accent-blue);
            color: var(--text-color);
            font-size: 1.5rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            /* Sombra mais suave */
        }

        .mode-icon:hover {
            border-color: var(--primary-gold);
            transform: scale(1.1);
        }

        /* --- Área de Palpite --- */
        .guess-area {
            background-color: var(--panel-bg);
            border-radius: 10px;
            padding: 20px;
            width: 100%;
            max-width: 600px;
            text-align: center;
            border: 1px solid var(--accent-blue);
            backdrop-filter: blur(5px);
            /* Efeito de vidro fosco */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .guess-area p {
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .guess-form {
            display: flex;
            gap: 10px;
        }

        .guess-input {
            flex-grow: 1;
            /* Faz o input ocupar o espaço disponível */
            padding: 15px;
            font-size: 1rem;
            border: 2px solid var(--accent-blue);
            border-radius: 8px;
            background-color: #f8f8f8;
            /* Fundo do input mais claro */
            color: var(--text-color);
        }

        .guess-input::placeholder {
            color: #a0a0a0;
            /* Placeholder mais claro */
        }

        .guess-input:focus {
            outline: none;
            border-color: var(--primary-gold);
        }

        .submit-button {
            width: 50px;
            height: 50px;
            background-color: transparent;
            border-style: solid;
            border-width: 25px 0 25px 50px;
            /* Cria um triângulo com bordas */
            border-color: transparent transparent transparent var(--primary-gold);
            cursor: pointer;
            transition: border-color 0.3s ease;
        }

        .submit-button:hover {
            border-color: transparent transparent transparent var(--accent-blue);
        }

        /* --- Grade de Resultados --- */
        .results-grid {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .grid-header,
        .grid-row {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr 1fr 1fr;
            gap: 10px;
            align-items: center;
            text-align: center;
            padding: 10px;
            border-radius: 8px;
        }

        .grid-header {
            background-color: rgba(220, 220, 220, 0.9);
            /* Header mais claro */
            color: var(--text-color);
            font-weight: bold;
            font-family: 'Cinzel', serif;
        }

        .grid-row {
            background-color: var(--panel-bg);
            border: 2px solid transparent;
            /* Borda inicial transparente */
            transition: all 0.3s ease;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.05);
        }

        /* Estilos para o estado do palpite */
        .grid-row.correct {
            border-color: var(--correct-green);
            box-shadow: 0 0 10px var(--correct-green);
        }

        .grid-row.incorrect {
            border-color: var(--incorrect-red);
        }

        .grid-row.partial .cell.correct {
            color: var(--correct-green);
        }

        .grid-row.partial .cell.incorrect {
            color: var(--incorrect-red);
        }

        .cell.up-arrow::after,
        .cell.down-arrow::after {
            content: '';
            display: inline-block;
            margin-left: 5px;
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
        }

        .cell.up-arrow::after {
            border-bottom: 8px solid var(--correct-green);
        }

        .cell.down-arrow::after {
            border-top: 8px solid var(--incorrect-red);
        }

        .suggestions-box {
            border: 1px solid #ccc;
            max-height: 200px;
            overflow-y: auto;
            position: absolute;
            background: white;
            top: 90%;
            left: 0%;
            width: 100%;
            z-index: 10;
        }

        .suggestion-item {
            display: flex;
            align-items: center;
            padding: 8px 12px;
            cursor: pointer;
            gap: 10px;
            transition: background 0.2s;
            border-bottom: 1px solid #eee;
        }

        .suggestion-item:last-child {
            border-bottom: none;
        }

        .suggestion-item:hover {
            background-color: #f5f5f5;
        }

        .suggestion-item img {
            width: 50px;
            height: 70px;
            object-fit: cover;
            border-radius: 4px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        .suggestion-item div {
            font-weight: 600;
            font-size: 14px;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="game-container">

        <header>
            <img src="{{asset('dueldle.png')}}" alt="Logo Dueldle" width="300px">

        </header>

        <!-- <div class="game-modes">
            <button class="mode-icon" title="Clássico">?</button>
            <button class="mode-icon" title="Atributo">A</button>
            <button class="mode-icon" title="Arte da Carta">C</button>
        </div> -->

        <main class="guess-area">
            <p>Adivinhe a carta de Yu-Gi-Oh! de hoje!</p>
            <form class="guess-form" onsubmit="return false;">
                <input type="text" class="guess-input" id="input" placeholder="Digite o nome da carta...">
                <div id="suggestions" class="suggestions-box"></div>
                <button type="submit" class="submit-button" title="Enviar Palpite"></button>
            </form>
        </main>


        <section id="results-grid" class="results-grid">
            <div class="grid-header">
                <div>Carta</div>
                <div>Atributo</div>
                <div>Tipo card</div>
                <div>Nível</div>
                <div>ATK</div>
                <div>DEF</div>
            </div>



        </section>

    </div>

    <script>
        async function getQueryCards(data) {
            const api = await fetch('{{route("classic.query")}}', {
                'method': 'POST',
                'headers': {
                    'Content-Type': 'application/json'
                },
                'body': JSON.stringify({
                    name: data
                })
            });

            const response = await api.json();

            return response
        }

        document.getElementById('input').addEventListener('input', function(element) {
            document.getElementById('suggestions').innerHTML = ''
            insertData(element.target.value);
        })

        async function insertData(data) {
            const dados = await getQueryCards(data);

            dados.forEach(card => {
                document.getElementById('suggestions').innerHTML += `
            <div onclick="validateCard()" class="suggestion-item">
                <div>${card.name}</div>
                <img src="{{asset('uploads')}}/${card.image}" alt="">
            </div>

        `;
            });

            console.log(dados);
        }

        function validateCard() {
            document.getElementById('suggestions').innerHTML = ''
            console.log('clicou')
        }
    </script>

</body>

</html>