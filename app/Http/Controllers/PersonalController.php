<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    protected $personal;

    public function __construct(Personal $personal)
    {
        $this->personal = $personal;
    }

    public function indexWeb(){
        return view("personal.index");
    }

    public function galeriaPersonal(){
        $personal = $this->personal->all();

        return view("personal.personal", compact("personal"));
    }
    public function index()
    {

        $personal = $this->personal->all();

      
        return view("admin.personal.listado")->with(["personal" => $personal]);
    }

    public function create(){


        return view("admin.personal.crear_personal");
    }
    public function store(Request $request){

        // Para tomar todos los datos que me llegan del formulario, puedo pedir el método all() del $request
        
        $datos = $request->except(["_token","imagen"]);

        $nombre = $datos["nombre"];
        
        $nombreimagen = str_replace(" ","_",$nombre);
         
        $nombreImagenCompleto = $nombreimagen . ".jpg";
         
        $request->imagen->storeAs("personal/$nombreimagen",$nombreImagenCompleto,"public");

        $datos["imagen"] = "../storage/app/public/personal/$nombreimagen/$nombreImagenCompleto";

     
        $personal = $this->personal->create($datos);

        return redirect()->route("personal.index");
    }

    public function edit($id){

        $personal = $this->personal->find($id);


        if(!$personal){
            // Para redirigir a la página anterior, tenemos un método back del redirect()
            return redirect()->back();
        }


        return view("admin.personal.editar_personal", compact("personal"));
    }
    public function update($id, Request $request){

        $datos = $request->except(["_method","_token","imagen"]);
        
        $nombre = $datos["nombre"];
        
        $nombreimagen = str_replace(" ","_",$nombre);
       
        $nombreImagenCompleto = $nombreimagen . ".jpg";
        
        $nombreviejo = $datos["nombreviejo"];
        if(is_dir("../storage/app/public/personal/$nombreviejo")){
            if(is_file("../storage/app/public/personal/$nombreviejo/$nombreviejo.jpg")){
            rename("../storage/app/public/personal/$nombreviejo/$nombreviejo.jpg","../storage/app/public/personal/$nombreviejo/$nombreImagenCompleto");
            rename("../storage/app/public/personal/$nombreviejo","../storage/app/public/personal/$nombreimagen");
            $datos["imagen"] = "../storage/app/public/personal/$nombreimagen/$nombreImagenCompleto";
            }
        }
        if(!is_null($request->imagen)){
            if(is_file("../storage/app/public/personal/$nombreimagen/$nombreImagenCompleto")){
                unlink("../storage/app/public/personal/$nombreimagen/$nombreImagenCompleto");
            }
            $request->imagen->storeAs("personal/$nombreimagen",$nombreImagenCompleto,"public");
            $datos["imagen"] = "../storage/app/public/personal/$nombreimagen/$nombreImagenCompleto"; 
        }
        
        
        $personal = $this->personal->find($id);
        $personal->update($datos);

        return redirect()->route("personal.index");
    }

    public function delete($id){

        $personal = $this->personal->find($id);
        $nombre = $personal->nombre;
        $nombreCarpeta = str_replace(" ","_", $nombre);
        if(is_dir("../storage/app/public/personal/$nombreCarpeta")){
            unlink("../storage/app/public/personal/$nombreCarpeta/$nombreCarpeta.jpg");
            rmdir("../storage/app/public/personal/$nombreCarpeta");
        }
        
        $eliminar = $personal->delete();

        return redirect()->route("personal.index");
    }

}
