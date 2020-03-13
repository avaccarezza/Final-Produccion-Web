<?php

namespace App\Http\Controllers;

use App\Models\Excursion;
use Illuminate\Http\Request;

class ExcursionController extends Controller
{
    protected $excursion;

    public function __construct(Excursion $excursion)
    {
        $this->excursion = $excursion;
    }

    public function indexWeb(){
        return view("excursiones.index");
    }

    public function galeriaExcursion(){
        
        $excursiones = $this->excursion->all();

        return view("excursiones.excursion", compact("excursiones"));
    }
    public function index()
    {

        $excursiones = $this->excursion->all();

      
        return view("admin.excursiones.listado")->with(["excursiones" => $excursiones]);
    }

    public function create(){


        return view("admin.excursiones.crear_excursiones");
    }
    public function store(Request $request){

        // Para tomar todos los datos que me llegan del formulario, puedo pedir el método all() del $request
        
        $datos = $request->except(["_token","imagen"]);

        $nombre = $datos["nombre"];
        
        $nombreimagen = str_replace(" ","_",$nombre);
         
        $nombreImagenCompleto = $nombreimagen . ".jpg";
         
        $request->imagen->storeAs("excursiones/$nombreimagen",$nombreImagenCompleto,"public");

        $datos["imagen"] = "../storage/app/public/excursiones/$nombreimagen/$nombreImagenCompleto";

     
        $excursion = $this->excursion->create($datos);

        return redirect()->route("excursiones.index");
    }

    public function edit($id){

        $excursion = $this->excursion->find($id);


        if(!$excursion){
            // Para redirigir a la página anterior, tenemos un método back del redirect()
            return redirect()->back();
        }


        return view("admin.excursiones.editar_excursion", compact("excursion"));
    }
    public function update($id, Request $request){

        $datos = $request->except(["_method","_token","imagen"]);
        
        $nombre = $datos["nombre"];
        
        $nombreimagen = str_replace(" ","_",$nombre);
       
        $nombreImagenCompleto = $nombreimagen . ".jpg";
        
        $nombreviejo = $datos["nombreviejo"];
        if(is_dir("../storage/app/public/excursiones/$nombreviejo")){
            if(is_file("../storage/app/public/excursiones/$nombreviejo/$nombreviejo.jpg")){
            rename("../storage/app/public/excursiones/$nombreviejo/$nombreviejo.jpg","../storage/app/public/excursiones/$nombreviejo/$nombreImagenCompleto");
            rename("../storage/app/public/excursiones/$nombreviejo","../storage/app/public/excursiones/$nombreimagen");
            $datos["imagen"] = "../storage/app/public/excursiones/$nombreimagen/$nombreImagenCompleto";
            }
        }
        if(!is_null($request->imagen)){
            if(is_file("../storage/app/public/excursiones/$nombreimagen/$nombreImagenCompleto")){
                unlink("../storage/app/public/excursiones/$nombreimagen/$nombreImagenCompleto");
            }
            $request->imagen->storeAs("excursiones/$nombreimagen",$nombreImagenCompleto,"public");
            $datos["imagen"] = "../storage/app/public/excursiones/$nombreimagen/$nombreImagenCompleto"; 
        }
        
        
        $excursion = $this->excursion->find($id);
        $excursion->update($datos);

        return redirect()->route("excursiones.index");
    }

    public function delete($id){

        $excursion = $this->excursion->find($id);
        $nombre = $excursion->nombre;
        $nombreCarpeta = str_replace(" ","_", $nombre);
        if(is_dir("../storage/app/public/excursiones/$nombreCarpeta")){
            unlink("../storage/app/public/excursiones/$nombreCarpeta/$nombreCarpeta.jpg");
            rmdir("../storage/app/public/excursiones/$nombreCarpeta");
        }
        
        $eliminar = $excursion->delete();

        return redirect()->route("excursiones.index");
    }

}
