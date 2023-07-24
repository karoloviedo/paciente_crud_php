<?php
class Modelo{
    private $Modelo;
    private $db;    
    private $datos;    
    public function __construct(){
        $this->Modelo = array();
        $this->db = new PDO('pgsql:host=localhost;port=5434;dbname=db_paciente',"postgres","12345678");
    }

    public function insertar($tabla, $data){
        $columnas = implode(", ", array_keys($data));
        $valores = ":" . implode(", :", array_keys($data));
        $consulta = "INSERT INTO " . $tabla . " (" . $columnas . ") VALUES (" . $valores . ")";
        
        $stmt = $this->db->prepare($consulta);
        $resultado = $stmt->execute($data);
    
        return $resultado;
    }

    public function mostrar($tabla, $condicion = '', $params = array()) {
        $this->datos = array(); 
        $consul = "SELECT * FROM " . $tabla;
        if (!empty($condicion)) {
            $consul .= " WHERE " . $condicion;
        }
        $resu = $this->db->prepare($consul);
        $resu->execute($params);
        while ($filas = $resu->fetchAll(PDO::FETCH_ASSOC)) {
            $this->datos[] = $filas;
        }
        return $this->datos;
    }
        
    public function actualizar($consulta, $parametros) {
        $stmt = $this->db->prepare($consulta);
        $resultado = $stmt->execute($parametros);

        return $resultado !== false;
    }

    public function eliminar($tabla, $condicion){
        $eli="delete from ".$tabla." where ".$condicion;
        $res=$this->db->query($eli);
        if ($res) {
            return true; 
        }else {
            return false;
        }
    }
}