<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://kit.fontawesome.com/597d9cf0ae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
    <title>Inventario</title>
</head>
<body class="">

<nav class="bg-[#1768AC] text-white p-4 flex justify-between items-center">
        <h1 class="text-[1.6rem]">Gestion de Inventario</h1>

    

      </nav>


<div class=" text-black border-2 border-blue-300 p-[2rem] w-[90%] md:w-[50%] md:text-[1.6rem] text-[1.3rem] mt-[3rem] rounded-lg mx-auto">
    <h2>Actualizar Inventario - {{ $producto->nombre_producto }}</h2>

    <form action="{{ route('inventario.update', $producto->id) }}" method="POST">
        @csrf
        <div class="form-group mt-[1rem]">
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control  rounded-lg  border-2 border-blue-300 w-[80%] " required min="1">
        </div>

        <div class="form-group mt-[1rem]">
            <label for="tipo">Tipo de acción: </label>
            <select name="tipo" id="tipo" class="form-control border-2 border-blue-300 p-[0.5rem] rounded-lg" required>
                <option value="entrada">Entrada</option>
                <option value="salida">Salida</option>
            </select>
        </div>

        <button type="submit" class=" mt-[1rem] border-2 border-blue-300 p-[0.5rem] rounded-lg cursor-pointer hover:bg-blue-300 ">Actualizar Inventario</button>
    </form>
 </div>
    
</body>
</html>