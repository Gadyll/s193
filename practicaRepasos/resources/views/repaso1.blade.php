<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')   
    <title>Repaso 1</title>
</head>
<body>
<div class="container">
    <h1 class="text-center mt-5">Convertidor</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('convert') }}" method="POST" class="mt-4 p-4 border rounded shadow-sm bg-light">
                @csrf
                <div class="form-group">
                    <label for="value">Ingresa el valor:</label>
                    <input type="number" name="value" class="form-control" required>
                </div>
                <div class="form-group mt-3">
                    <label for="conversion_type">Selecciona una conversion:</label>
                    <select name="conversion_type" class="form-control" required>
                        <option value="MBtoGB">MB a GB</option>
                        <option value="GBtoMB">GB a MB</option>
                        <option value="GBtoTB">GB a TB</option>
                        <option value="TBtoGB">TB a GB</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-4 w-100">Convertir</button>
            </form>

        
            <div class="alert alert-success mt-3">
                {{ session('result') }}
            </div>
        
    </div>
</body>
</html>

