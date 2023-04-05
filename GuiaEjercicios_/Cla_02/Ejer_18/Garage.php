<?php
    /*
    Crear la clase Garage que posea como atributos privados:

    _razonSocial (String)
    _precioPorHora (Double)
    _autos (Autos[], reutilizar la clase Auto del ejercicio anterior)
    Realizar un constructor capaz de poder instanciar objetos pasándole como

    parámetros: i. La razón social.
    ii. La razón social, y el precio por hora.

    Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
    que mostrará todos los atributos del objeto.
    Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
    objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
    Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
    (sólo si el auto no está en el garaje, de lo contrario informarlo).
    Ejemplo: $miGarage->Add($autoUno);
    Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
    “Garage” (sólo si el auto está en el garaje, de lo contrario informarlo). Ejemplo:
    $miGarage->Remove($autoUno);
    */
    include_once "Auto.php";

    class Garage
    {
        private $_razonSocial;
        private $_precioPorHora;
        private $_autos;

        public function __construct($razonSocial,$precioPorHora = 0)
        {
            $this->_autos = array();  
            $this->_SetPrecio($precioPorHora);
            $this->_SetRazonSocial($razonSocial);    
        }

        private function _SetPrecio($precio)
        {
            if(! (!is_null($precio) && is_numeric($precio) && $precio > -1))
            {
                $precio = 0;
            }
            $this->_precioPorHora = $precio;
        }

        private function _SetRazonSocial($razon)
        {
            if(! (!is_null($razon) && is_string($razon)))
            {
                $razon = "Sin asignar";
            }
            $this->_razonSocial = $razon;
        }

        public function _MostrarGarage()
        {
            $ret = "Garage:<br>Razon social: ".$this->_razonSocial."<br>Precio por Hora: ".$this->_precioPorHora."<br><br>Autos al momento:<br><br>";
            if(count($this->_autos) > 0)
            {
                foreach($this->_autos as $item)
                {
                    if(!is_null($item))
                    {
                        $ret .= Auto::_MostrarAuto($item);
                        $ret .= "<br><br>";
                    }
                }
            }
            else
            {
                $ret .= "Sin autos al momento..<br><br>";
            }
            return $ret;
        }

        /*
        Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
        objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
        */
        public function _Equals($auto)
        {
            if((!is_null($auto) && is_a($auto,"Auto")))
            {
                foreach($this->_autos as $item)
                {
                    if($auto->_Equals($item))
                    {
                        return true;
                    }
                }
            }
            return false;
        }

        /*
        Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
        (sólo si el auto no está en el garaje, de lo contrario informarlo).
        */
        public function _Add($auto)
        {
            if(!is_null($this->_autos) && !($this->_Equals($auto)))
            {
                array_push($this->_autos,$auto);
                return true;
            }
            return false;
        }

        private function _GetAutoIndex($auto)
        {
            if(!is_null($auto) && is_a($auto,"Auto"))
            {
                for($i=0;$i<count($this->_autos);$i++)
                {
                    if($auto->_Equals($this->_autos[$i]))
                    {
                        return $i;
                    }
                }
            }
            return -1;
        }

        /*
        Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
        “Garage” (sólo si el auto está en el garaje, de lo contrario informarlo). Ejemplo:
        $miGarage->Remove($autoUno);
        */
        public function _Remove($auto)
        {
            $index = $this->_GetAutoIndex($auto);
            if($index > -1)
            {
                unset($this->_autos[$index]);
                $this->_autos = array_values($this->_autos);
                return true;
            }   
            return false;         
        }
    }

?>