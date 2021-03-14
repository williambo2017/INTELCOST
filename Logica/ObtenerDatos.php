<?php
class Datos
{

    private $ciudades;
    private $Tipos;


    public function __construct()
    {
        $this->ciudades = array();
        $this->tipos = array();
    }

    public function ObtenerDatos()
    {
        $Datos = file_get_contents("../data-1.json");
        return   $Datos;
    }

    public function ObtenerTipos()
    {
        $Datos = file_get_contents("../data-1.json");
        $datos = json_decode($Datos);

        for ($i = 0; $i < count($datos); $i++) {
            if (!in_array($datos[$i]->Tipo, $this->tipos)) {
                array_push($this->tipos, $datos[$i]->Tipo);
            }
        }
        return   $this->tipos;
    }

    public function ObtenerCiudades()
    {
        $Datos = file_get_contents("../data-1.json");
        $datos = json_decode($Datos);
        for ($i = 0; $i < count($datos); $i++) {
            if (!in_array($datos[$i]->Ciudad, $this->ciudades)) {
                array_push($this->ciudades, $datos[$i]->Ciudad);
            }
        }
        return   $this->ciudades;
    }
}
