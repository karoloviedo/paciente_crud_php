<?php
require_once("modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    // listar paciente
    static function index(){
        $paciente = new Modelo();
        $dato = $paciente->mostrar("paciente", "");
        require_once("vista/index.php");
    }
    //nuevo paciente
    static function nuevo(){        
        require_once("vista/nuevo.php");
    }
    //guardar paciente
    static function guardar() {
        $type = $_REQUEST['type_id'];
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $telefono = $_REQUEST['telefono'];
        $email = $_REQUEST['email'];
        $genero = $_REQUEST['genero'];
    
        // Validación del campo 'genero'
        $genero_valido = false;
        if ($genero === "masculino" || $genero === "femenino" || $genero === "otro") {
            $genero_valido = true;
        }
    
        if (!$genero_valido) {
            // El valor del campo 'genero' no es válido
            echo "Error: El campo 'genero' debe ser una opción válida (masculino, femenino u otro).";
            exit(); // Detenemos la ejecución para evitar que se realice la inserción incorrecta en la base de datos
        }
    
        // Si el campo 'genero' es válido, procedemos con la inserción en la base de datos
        $data = array(
            'type_id' => $type,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'telefono' => $telefono,
            'email' => $email,
            'genero' => $genero
        );
    
        $paciente = new Modelo();
        $resultado = $paciente->insertar("paciente", $data);
    
        if ($resultado) {
            header("location:" . urlsite);
        } else {
            // Manejo del error si la inserción falla
            echo "Error al guardar los datos.";
        }
    }
    
    //editar paciente
    static function editar() {
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
    
            $paciente = new Modelo();
            $datos = $paciente->mostrar("paciente", "id = :id", array(':id' => $id));
    
            if ($datos && count($datos) > 0) {
                // Se encontró un paciente con el ID especificado
                require_once("vista/editar.php");
            } else {
                // No se encontró un paciente con el ID especificado
                echo "Error: No se encontró el paciente especificado.";
            }
        } else {
            // No se proporcionó un ID válido para editar
            echo "Error: Falta el parámetro 'id' para editar el paciente.";
        }
    }
    
    //actualizar paciente
    static function actualizar() {
        $id = $_REQUEST['id'];
        $type_id = $_REQUEST['type_id'];
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $telefono = $_REQUEST['telefono'];
        $email = $_REQUEST['email'];
        $genero = $_REQUEST['genero'];
    
        // Utilizar sentencias preparadas para evitar inyección de SQL
        $consulta = "UPDATE paciente SET type_id=?, nombre=?, apellido=?, telefono=?, email=?, genero=? WHERE id=?";
        $paciente = new Modelo();
        $resultado = $paciente->actualizar($consulta, array($type_id, $nombre, $apellido, $telefono, $email, $genero, $id));
    
        if ($resultado) {
            header("Location: " . urlsite);
        } else {
            // Manejo del error si la actualización falla
            echo "Error al actualizar los datos.";
        }
    }
    
    //eliminar paciente
    static function eliminar(){    
        $id = $_REQUEST['id'];
        $paciente = new Modelo();
        $dato = $paciente->eliminar("paciente","id=".$id);
        header("location:".urlsite);
    }


}