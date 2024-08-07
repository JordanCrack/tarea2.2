<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Estilos generales */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f2f2f2, #d6d6d6);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }

        /* Contenedor del mensaje de error */
        .error-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            padding: 40px;
            width: 90%;
            max-width: 600px;
            text-align: center;
            animation: fadeIn 1s ease-out;
        }

        /* Encabezado de error */
        h2 {
            font-size: 2.5rem;
            color: #ff4d4d;
            margin-bottom: 20px;
            font-weight: 700;
            line-height: 1.3;
        }

        /* Enlace de retorno */
        a {
            display: inline-block;
            text-decoration: none;
            color: #007bff;
            font-size: 1.2rem;
            margin-top: 20px;
            padding: 10px 20px;
            border-radius: 5px;
            border: 2px solid #007bff;
            background-color: #ffffff;
            font-weight: 500;
            transition: background-color 0.3s, color 0.3s, transform 0.3s;
        }

        a:hover {
            color: #ffffff;
            background-color: #007bff;
            transform: translateY(-2px);
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
    </style>
</head>
<body>
    <div class="error-container">
        <h2>Error! Género no especificado o no encontrado.</h2>
        <a href="{{ url('/') }}">Volver</a>
    </div>
</body>
</html>
