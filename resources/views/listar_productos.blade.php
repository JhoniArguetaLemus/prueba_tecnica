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

          <a href="{{route('home')}} " class="md:text-[1.5rem]">Inicio</a>
          <a href="{{route('productos.crear')}}" class="md:text-[1.5rem]" >Agregar productos</a>
          <a href="{{route('productos.ver') }}" class="md:text-[1.5rem]">Ver productos</a>
          


        </div>


      </nav>

<div class="w-[90%] text-center mx-auto  mt-[3rem] rounded-[1rem] border-1 border-blue-500  ">
       
<form action="{{ route('productos.index') }}" method="GET" class="mb-4 md:flex md:gap-[1rem]  md:rounded-lg md:items-center md:p-[0.8rem] p-[0.9rem]  ">
    @csrf
    <div>
        <label for="search">Buscar por nombre:</label>
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar por nombre" class="border p-2 rounded">
    </div>

    <div class="mt-[2rem] md:mt-0">
        <label for="min_price">Precio Mínimo:</label>
        <input step="0.01" type="number" name="min_price" value="{{ request('min_price') }}" placeholder="Precio mínimo" class="border p-2 rounded">
    </div>

    <div class="mt-[2rem] md:mt-0">
        <label for="max_price">Precio Máximo:</label>
        <input step="0.01"  type="number" name="max_price" value="{{ request('max_price') }}" placeholder="Precio máximo" class="border p-2 rounded">
    </div>

  
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-[1.8rem] md:mt-0">Filtrar</button>
   </form>

        
   </div>

      <div class="grid  grid-cols-2 md:grid-cols-3 gap-4 w-[90%] mx-auto mt-[2rem] ">


      @if($productos->isEmpty())
         <p class="text-[1.5rem]">No hay productos disponibles.</p>

      @else

        @foreach($productos as $producto)

         <div class="border-2 border-black w-[100%] mx-auto   mt-[3rem] rounded-[1rem] md:pb-[10rem]  "> 
            <img class=" rounded-tl-[0.9rem] rounded-tr-[0.9rem] md:w-[50%] md:h-[40%]  mx-auto " src="{{ asset('imagenes/producto.png')  }}" alt="">

            <div class="p-4">

            <div class=" md:text-[1.6rem] md:pl-[2rem]">
              <p>Id: {{$producto->id}}</p>
             <h4 class="font-bold overflow-x-auto overflow-y-auto ">{{$producto->nombre_producto}}</h4>

             
             <p>$ {{$producto->precio}}</p>
             <p>Cantidad: {{$producto->cantidad}}</p>

            </div>
           

            <form method="GET" action="{{route('editar_producto', ['id' => $producto->id])}}" class=" flex items-center justify-center mt-[1rem]" >
              @csrf
              <button  type="submit" class=" p-[0.4rem] w-[80%] rounded-lg bg-blue-500 text-white cursor-pointer">Editar</button>

            </form>

            <form method="GET" action="{{route('inventario.form', ['id' => $producto->id])}}" class=" flex items-center justify-center mt-[1rem]" >
              @csrf
              <button  type="submit" class=" p-[0.4rem] w-[80%] rounded-lg bg-blue-500 text-white cursor-pointer">Actualizar Stock</button>

            </form>



            <form method="POST" action="{{route('eliminar_producto', ['id' => $producto->id])  }}" class=" flex items-center justify-center mt-[2rem]" id="deleteForm">
              @csrf

              @method('DELETE')
              <button onClick="confirmDelete()" type="button" class=" p-[0.4rem] w-[80%] rounded-lg bg-red-500 text-white">Eliminar</button>

            </form>

            

            

           
             
           



          </div>
          
          
        </div>
        @endforeach

        @endif

        




        
          
        


      </div>
    


      <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>