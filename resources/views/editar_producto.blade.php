<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar productos</title>
    @vite('resources/css/app.css')
</head>
<body >

<nav class="bg-[#1768AC] text-white p-4">
  <h1 class="text-[1.4rem]">Guardar producto</h1>


</nav>

    <div class="border-2 border-black w-[90%] mx-auto p-4 mt-[3rem] rounded-[1rem]  ">
        
        <form action="{{ route('actualizar_producto', ['id' => $producto->id]) }}" method="POST" class="flex flex-col items-center gap-4">
            @csrf
            @method('PUT')
            <label for="nombre" >Nombre</label>
            <input class="border-2 border-gray-500 rounded-lg h-[3rem] w-[80%] text-center" type="text" name="nombre_producto"  required value="{{$producto->nombre_producto}}"   >

            <label for="descripcion">Descripción</label>
            <input class="border-2 border-gray-500 rounded-lg h-[3rem] w-[80%] text-center" type="text" name="descripcion" id="descripcion" required   value="{{$producto->descripcion}}" >

            <label for="precio">Precio</label>
            <input  class="border-2 border-gray-500 rounded-lg h-[3rem] w-[80%] text-center" type="number" name="precio" id="precio" step="0.10" required value="{{$producto->precio}}" >

            <label for="cantidad">Cantidad</label>
            <input class="border-2 border-gray-500 rounded-lg h-[3rem] w-[80%] text-center" type="number" name="cantidad" id="cantidad" required    value="{{$producto->cantidad}}" >
          
            <button type="submit" class="bg-[#1768AC] text-white  border-none       border-2 border-black rounded-lg p-[0.7rem] w-[40%]   hover:bg-[#O6BEE1] cursor-pointer">Actualizar</button>
        </form>

       
    </div>
    
</body>
</html>