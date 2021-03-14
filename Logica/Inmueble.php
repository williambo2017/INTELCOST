<?php
require_once '../Persistencia/Conexion.php';
require_once '../Persistencia/InmuebleDAO.php';
class Inmueble
{
    private $codigo;
    private $id;
    private $direccion;
    private $ciudad;
    private $telefono;
    private $codigoPostal;
    private $tipo;
    private $precio;
    private $conexion;
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
        $this->conexion = new Conexion();
        $this->InmuebleDAO = new InmuebleDAO($codigoP, $idP, $direccionP, $ciudadP, $telefonoP, $codigoPostalP, $tipoP, $precioP);
    }

    public function getCodigo()
    {
        return $this->codigo;
    }


    public function getId()
    {
        return $this->id;
    }


    public function getDireccion()
    {
        return $this->direccion;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    public function getTipo()
    {
        return $this->tipo;
    }


    public function getPrecio()
    {
        return $this->precio;
    }

    public function insertar()
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->InmuebleDAO->insertar());
        $res = $this->conexion->sentenciaEjecutada();
        $this->conexion->cerrar();
        return $res;
    }


    public function Eliminar()
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->InmuebleDAO->Eliminar());
        $res = $this->conexion->sentenciaEjecutada();
        $this->conexion->cerrar();
        return $res;
    }


    public function ConsultarTodos()
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->InmuebleDAO->ConsultarTodos());
        $filas = $this->conexion->numFilas();
        $registros = array();
        for ($i = 0; $i < $filas; $i++) {
            $datos = $this->conexion->extraer();
            $registros[$i] = new Inmueble($datos[0], $datos[1], $datos[2], $datos[3], $datos[4], $datos[5], $datos[6], $datos[7]);
        }
        $this->conexion->cerrar();
        return $registros;
    }

    public function ConsultarPorCiudad()
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->InmuebleDAO->ConsultarPorCiudad());
        $filas = $this->conexion->numFilas();
        $registros = array();
        for ($i = 0; $i < $filas; $i++) {
            $datos = $this->conexion->extraer();
            $registros[$i] = new Inmueble($datos[0], $datos[1], $datos[2], $datos[3], $datos[4], $datos[5], $datos[6], $datos[7]);
        }
        $this->conexion->cerrar();
        return $registros;
    }


    public function ConsultarPorTipo()
    {
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->InmuebleDAO->ConsultarPorTipo());
        $filas = $this->conexion->numFilas();
        $registros = array();
        for ($i = 0; $i < $filas; $i++) {
            $datos = $this->conexion->extraer();
            $registros[$i] = new Inmueble($datos[0], $datos[1], $datos[2], $datos[3], $datos[4], $datos[5], $datos[6], $datos[7]);
        }
        $this->conexion->cerrar();
        return $registros;
    }




}
