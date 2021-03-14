<?php
class filtrar
{
    private $datos;

    public function __construct()
    {
        $this->datos = array();
    }

    public function FiltrarPorCiudad($ciudad, $precio)
    {
        $valores =  explode(";", $precio);
        $ValorInicial =  $valores[0];
        $ValorFinal = $valores[1];
        $Datos = file_get_contents("../data-1.json");
        $datos = json_decode($Datos);
        for ($i = 0; $i < count($datos); $i++) {
            $resultado = str_replace("$", "", $datos[$i]->Precio);
            $Numero =  str_replace(",", "",    $resultado);

            if (($Numero >= $ValorInicial   &&  $Numero <=  $ValorFinal)  &&  $datos[$i]->Ciudad == $ciudad) {
                array_push($this->datos, $datos[$i]);
            }
        }
        return   $this->datos;
    }

    public function FiltrarPorTipo($tipo, $precio)
    {
        $valores =  explode(";", $precio);
        $ValorInicial =  $valores[0];
        $ValorFinal = $valores[1];

        $Datos = file_get_contents("../data-1.json");
        $datos = json_decode($Datos);
        for ($i = 0; $i < count($datos); $i++) {
            $resultado = str_replace("$", "", $datos[$i]->Precio);
            $Numero =  str_replace(",", "",    $resultado);
            if (($Numero >= $ValorInicial   &&  $Numero <=  $ValorFinal)  &&  $datos[$i]->Tipo == $tipo) {
                array_push($this->datos, $datos[$i]);
            }
        }
        return   $this->datos;
    }


    public function FiltrarPorTipoYciudad($ciudad, $tipo, $precio)
    {
        $valores =  explode(";", $precio);
        $ValorInicial =  $valores[0];
        $ValorFinal = $valores[1];

        $Datos = file_get_contents("../data-1.json");
        $datos = json_decode($Datos);

        for ($i = 0; $i < count($datos); $i++) {
            $resultado = str_replace("$", "", $datos[$i]->Precio);
            $Numero =  str_replace(",", "",    $resultado);
            if (($Numero >= $ValorInicial   &&  $Numero <=  $ValorFinal)  &&  $datos[$i]->Tipo == $tipo  &&  $datos[$i]->Ciudad == $ciudad) {
                array_push($this->datos, $datos[$i]);
            }
        }
        return   $this->datos;
    }
}
