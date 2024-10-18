<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Doc</title>
   <style>
        body {
            background-color: #f7f9fc;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 10%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        h1 {
            font-size: 2.5rem;
            color: #333;
        }
        p {
            font-size: 1.2rem;
            color: #666;
        }
    </style> 
</head>
<body>
    <div class="container text-center">
        <h1>¡¡Bienvenido :)</h1>
        <p><strong>Nombre:</strong> Jhadiel</p>
        <p><strong>Apellido:</strong> Cruz</p>
        <p><strong>Telefono:</strong> 720-298-8384</p>
        <p><strong>Matricula:</strong> 122042642</p>
        <a href="{{ route('repaso1') }}" class="btn btn-primary">REPASO 1</a>
    </div>
</body>
</html>
