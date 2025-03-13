<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form method="POST" action="{{route('catalog.store')}}">
        
        @csrf
    <label for="title" class="form-label">Titulo:</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Ingrese el titulo" required>
    <br>
        <br>
    <label for="year" class="form-label">Año:</label>
    <input type="number" class="form-control" id="year" name="year" placeholder="Ingrese el año" required>
    <br>
<br>
    <label for="director" class="form-label">Director:</label>
    <input type="text" class="form-control" id="director" name="director" placeholder="Ingrese el director" required>
<br>
    <br>
    <label for="poster" class="form-label">Poster:</label>
    <input type="text" class="form-control" id="poster" name="poster" placeholder="Ingrese el poster" required>
<br>
    <br>
    <label for="rented" class="form-label">Alquilado (si/no)</label>
     <select class="form-control" id="rented" name="rented">
        <option value="1">Si</option>
        <option value="0">No</option>
     </select>
<br>
    <br>
    <label for="synopsis" class="form-label">Synopsis</label>
    <input type="text" class="form-control" id="synopsis" name="synopsis" placeholder="Ingrese la synopsis" required>
<br><br>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>
</html>