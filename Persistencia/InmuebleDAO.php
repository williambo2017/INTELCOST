<?php
class InmuebleDAO
{
    private $codigo;
    private $id;
    private $direccion;
    private $ciudad;
    private $telefono;
    private $codigoPostal;
    private $tipo;
    private $precio;
    public function __construct($codigoP = "", $idP = "", $direccionP = "", $ciudadP = "", $telefonoP = "", $codigoPostalP = "", $tipoP = "", $precioP = "")
    {
        $this->codigo = $codigoP;
        $this->id = $idP;
        $this->direccion = $direccionP;
        $this->ciudad = $ciudadP;
        $this->telefono = $telefonoP;
        $this->codigoPostal = $codigoPostalP;
        $this->tipo = $tipoP;
        $this->precio = $precioP;
    }

    public function insertar()
    {
        return "INSERT INTO inmueble(I_ID, C_DIRECCION, C_CIUDAD, C_TELEFONO, C_CODIGOPOSTAL, C_TIPO, C_PRECIO) 
        VALUES ('" . $this->id . "' ,'" . $this->direccion . "','" . $this->ciudad . "','" . $this->telefono . "','" . $this->codigoPostal . "','" . $this->tipo . "','" . $this->precio . "')";
    }


    public function Eliminar()
    {

        return "DELETE FROM inmueble WHERE  I_CODIGO = '" . $this->codigo . "' ";
    }


    public function ConsultarTodos()
    {
        return " SELECT * FROM inmueble ";
    }


    public function ConsultarPorCiudad()
    {
        return " SELECT * FROM inmueble where C_CIUDAD= '". $this->ciudad."' ";
    }

    public function ConsultarPorTipo()
    {
        return " SELECT * FROM inmueble where C_TIPO= '". $this->tipo."' ";
    }
    

}
