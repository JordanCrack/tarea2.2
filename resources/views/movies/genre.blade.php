<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies by Genre</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Estilos generales */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e2e2e2, #ffffff);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }

        /* Contenedor principal */
        .container {
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
            padding: 40px;
            width: 90%;
            max-width: 1200px;
            animation: fadeIn 1s ease-out;
            overflow-x: auto;
            position: relative;
        }

        /* Encabezado */
        h1 {
            font-size: 2.6rem;
            margin-bottom: 30px;
            color: #333;
            text-align: center;
            font-weight: 700;
            line-height: 1.3;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            padding-bottom: 10px;
            border-bottom: 2px solid #007bff;
        }

        /* Enlace de volver */
        a {
            display: inline-block;
            text-decoration: none;
            color: #007bff;
            font-size: 1.2rem;
            margin-bottom: 30px;
            transition: color 0.3s, transform 0.3s;
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 5px;
            border: 2px solid #007bff;
            background-color: #fff;
        }

        a:hover {
            color: #fff;
            background-color: #007bff;
            transform: translateY(-2px);
        }

        /* Tabla */
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #007bff;
            color: #fff;
            font-weight: 600;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            position: sticky;
            top: 0;
            background-color: #007bff;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        tr:hover {
            background-color: #e2e6ea;
        }

        /* Estilo para las celdas */
        td {
            font-size: 1rem;
        }

        /* Animación de entrada */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsivo */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            table {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 1.6rem;
            }

            table {
                font-size: 0.8rem;
            }

            a {
                font-size: 1rem;
                padding: 8px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista por Género: {{ $genre }}</h1>
        <a href="{{ url('/') }}">Volver</a>
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Año</th>
                    <th>Estudio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->year }}</td>
                        <td>{{ $movie->studio }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
