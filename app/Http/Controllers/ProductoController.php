<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{


   public function _construct(){
       $this->middleware('auth');
   }

   public function home(Request $request){
       return view('welcome');
      }
 
   public function index(Request $request){
       $query=Producto::query();

       //filtrar por nombre

       if($request->has('search') && $request->search !='' ){
           $query->where('nombre_producto','like','%'.$request->search.'%');
       }


      
       

    if ($request->has('min_price') && $request->min_price != '') {
        $query->where('precio', '>=', $request->min_price);
    }

   
    if ($request->has('max_price') && $request->max_price != '') {
        $query->where('precio', '<=', $request->max_price);
    }

    $products = $query->get();

    $productos=$query->get();

    return view('listar_productos', compact('productos'));

 





   }


   public function showAll(){
    $productos=Producto::all();
    return response()->json($productos);
   }


   public function crear(){
    return view('crear_producto');
   }

    public function guardarProducto(Request $request){

        $validator = Validator::make($request->all(), [
            'nombre_producto' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'cantidad' => 'required',
        ]);

        if ($validator->fails()) {
            $data=[
                'status' => 'error',
                'code' => 404,
                'message' => 'El producto no se ha creado',
                'errors' => $validator->errors()
            ];

            return response()->json($data, 400);
        }

        Producto::create($request->all());

    
        return redirect()->back()->with('mensaje', 'Producto guardado exitosamente');



   }


   public function verProductos(Request $request){
    $productos=Producto::all();
    return view('listar_productos', compact('productos'));
   }

   
  

   public function eliminarProducto(Request $request, $id){
     $producto=Producto::find($id);
     if(!$producto){
            return redirect()->with('error', 'Producto no encontrado');
     }
     $producto->delete();
     session()->flash('success', 'Producto eliminado correctamente.');
     return redirect()->route('productos.ver');

   }


   public function editarProducto(Request $request, $id){
      $producto = Producto::find($id);

      if (!$producto) {

        return redirect()->route('productos.index')->with('error', 'Producto no encontrado');
      }

      

       return view('editar_producto', compact('producto'));


   }


   
   public function actualizarProducto(Request $request, $id){

    $producto=Producto::find($id);
    if($producto){
        $request->validate([
            'nombre_producto' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'cantidad' => 'required',
    
        ]);

        $producto->update($request->all());

        return redirect()->back()->with('mensaje', 'Producto actualizado exitosamente');
    }


    return redirect()->back()->with('mensaje', 'El producto no fu encontrado');
   }
   
       
}
