<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/597d9cf0ae.js" crossorigin="anonymous"></script>
    <title>Guardar productos</title>
    @vite('resources/css/app.css')
</head>
<body >

<nav class="bg-[#1768AC] text-white p-4 flex justify-between items-center">
        <h1 class="text-[1.6rem]">Gestion de Inventario</h1>

        <div>
          <button id="btnMenu" class="cursor-pointer"><i class="fa-solid fa-bars text-[1.5rem] md:text-[2rem] md:mr-[5rem] mr-[1rem]"></i></button>
        </div>

        <div class="flex flex-col items-center border-t-2 border-white gap-[2rem] md:gap-[3rem] p-[1.1rem] bg-[#1768AC] absolute top-[3.7rem] right-0 h-[100%] w-[70%] md:w-[40%] hidden " id="menu">

        <a href="{{route('home')}} " class="md:text-[1.5rem]">Inicio</a>
          <a href="{{route('productos.crear')}} " class="md:text-[1.5rem]" >Agregar productos</a>
          <a href="{{route('productos.ver') }}" class="md:text-[1.5rem]" >Ver productos</a>
         


        </div>


      </nav>





    <div class="border-2 border-black md:border-1  w-[90%] mx-auto p-4 mt-[3rem] rounded-[1rem]  md:border-blue-500 ">
        
        <form action="{{ route('guardar_producto') }}" method="POST" class="flex flex-col items-center gap-4">
            @csrf
            <label for="nombre" >Nombre</label>
            <input class="border-2  md:border-1 border-gray-500 rounded-lg h-[3rem] w-[80%] text-center" type="text" name="nombre_producto"  required>

            <label for="descripcion">Descripción</label>
            <input class="border-2 md:border-1 border-gray-500  rounded-lg h-[3rem] w-[80%] text-center" type="text" name="descripcion" id="descripcion" required>

            <label for="precio">Precio unitario</label>
            <input  class="border-2 md:border-1 border-gray-500  rounded-lg h-[3rem] w-[80%] text-center" type="number" name="precio" id="precio" step="0.10" required>

            <label for="cantidad" >Cantidad</label>
            <input class="border-2 md:border-1 border-gray-500 rounded-lg h-[3rem] w-[80%] text-center" type="number" name="cantidad" id="cantidad" required>
          
            <button type="submit" class="bg-blue-500 text-white  border-none       border-2 border-black rounded-lg p-[0.7rem] w-[30%]   hover:bg-[#O6BEE1] cursor-pointer">Guardar</button>
        </form>

       
    </div>
    

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>