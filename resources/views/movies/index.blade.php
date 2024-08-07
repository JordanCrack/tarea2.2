<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas por Género</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        /* Estilos generales */
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        /* Contenedor principal */
        .container {
            background-color: #fff;
            color: #333;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            padding: 40px;
            max-width: 800px;
            width: 100%;
            text-align: center;
            animation: fadeIn 1s ease-out;
        }

        /* Encabezado */
        h1 {
            color: #333;
            font-size: 3rem;
            margin-bottom: 40px;
            font-weight: 700;
            text-shadow: 1px 1px 8px rgba(0, 0, 0, 0.2);
        }

        /* Lista de géneros */
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin: 20px 0;
        }

        a {
            text-decoration: none;
            color: #fff;
            font-size: 1.4rem;
            font-weight: 600;
            background: linear-gradient(90deg, #ff7e5f, #feb47b);
            padding: 15px 30px;
            border-radius: 50px;
            display: inline-block;
            transition: background 0.4s, transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        a:hover {
            background: linear-gradient(90deg, #feb47b, #ff7e5f);
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        a::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: #fff;
            transition: width 0.4s;
        }

        a:hover::after {
            width: 100%;
        }

        /* Animación de entrada */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsivo */
        @media (max-width: 600px) {
            h1 {
                font-size: 2.2rem;
            }

            a {
                font-size: 1.2rem;
                padding: 12px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Películas por Género</h1>
        <ul>
            @foreach ($categories as $category)
                <li><a href="{{ url('movies/genre/' . $category->name) }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
</body>
</html>
