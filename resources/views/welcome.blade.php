<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar productos</title>
    @vite('resources/css/app.css')

    <style>
        body{
            background: linear-gradient( rgba(2,0,36,0.7) , rgba(2,0,36,0.7)), url("https://images.pexels.com/photos/4483610/pexels-photo-4483610.jpeg");
            background-size: cover;
           
        }
    </style>
</head>
<body >

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>

    <!-- Incluir SweetAlert2 desde CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://kit.fontawesome.com/597d9cf0ae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
      <nav class="bg-[#1768AC] text-white p-4 flex justify-between items-center">
        <h1 class="text-[1.6rem]">Gestion de Inventario</h1>

        <div>
          <button id="btnMenu"><i class="fa-solid fa-bars text-[1.5rem] mr-[1rem]"></i></button>
        </div>

        <div class="flex flex-col items-center border-t-2 border-white gap-[2rem] p-[1.1rem] bg-[#1768AC] absolute top-[3.7rem] right-0 h-[100%] w-[70%] hidden " id="menu">

          <a href="{{route('home')}}" class="md:text-[1.5rem]">Inicio</a>
          <a href="{{route('productos.crear')}}" class="md:text-[1.5rem]" >Agregar productos</a>
          <a href="{{route('productos.ver') }}" class="md:text-[1.5rem]">Ver productos</a>
         


        </div>


      </nav>

      <div class="w-[90%] h-[15rem] flex items-center  justify-center text-center mx-auto border-2 border-white  mt-[3rem] rounded-[1rem]   ">
       <h3 class="text-[2rem] text-white">Bienvenido al sistema de inventario. </h3>
      </div>




    
    
      <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>