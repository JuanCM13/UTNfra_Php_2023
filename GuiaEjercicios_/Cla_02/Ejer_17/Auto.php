<?php
    /*
        Realizar una clase llamada “Auto” que posea los siguientes atributos
    */
    class Auto
    {
        /*
            privados: _color (String)
            _precio (Double)
            _marca (String).
            _fecha (DateTime)
        */
        private $_color;
        private $_marca;
        private $_precio;
        private $_fecha;

        /*
            Realizar un constructor capaz de poder instanciar objetos pasándole como
            parámetros: i. La marca y el color.
            ii. La marca, color y el precio.
            iii. La marca, color, precio y fecha.
        */
        public function __construct($color,$marca,$precio = 0,$fecha = null)
        {
            $this->_SetColor($color);
            $this->_SetMarca($marca);
            $this->_SetPrecio($precio);
            $this->_SetFecha($fecha);
        }

        public function _GetPrecio()
        {
            return $this->_precio;
        }

        //SETTERS
        private function _SetColor($color)
        {
            if(! (!is_null($color) && is_string($color)) )
            {
                $color = "Color sin definir";
            }
            $this->_color = $color;
        }

        private function _SetMarca($marca)
        {
            if(! (!is_null($marca) && is_string($marca)) )
            {
                $marca = "Marca sin definir";
            }
            $this->_marca = $marca;
        }

        private function _SetPrecio($precio)
        {
            if(! (!is_null($precio) && is_numeric($precio) && $precio > -1) )
            {
                $precio = 0;
            }
            $this->_precio = $precio;
        }

        private function _SetFecha($fecha)
        {
            if(! (!is_null($fecha) && is_a($fecha, "DateTime")) )
            {
                $fecha = new DateTime("1990-12-01");
            }
            $this->_fecha = $fecha;
        }

        /*
            Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble
            por parámetro y que se sumará al precio del objeto.
        */
        public function _AgregarImpuestos($aSumar)
        {
            $precioAux;
            if( !is_null($aSumar) && is_numeric($aSumar))
            {
                $precioAux = $this->_precio + $aSumar;
                $this->_SetPrecio($precioAux);
                return true;
            }
            return false;
        }

        /*
            Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
            por parámetro y que mostrará todos los atributos de dicho objeto.
        */
        public static function _MostrarAuto($auto)
        {
            $retorno = "Error el objeto vino nullo o no es un auto..";
            if(!is_null($auto) && is_a($auto,"Auto"))
            {
                $retorno = "Auto:<br>Color: ".$auto->_color."<br>Marca: ".$auto->_marca."<br>Precio: ".$auto->_precio."<br>Fecha de fabricacion: ".$auto->_fecha->format("Y-m-d");
            }
            return $retorno;    
        }

        /*
            Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
            devolverá TRUE si ambos “Autos” son de la misma marca.
        */
        public function _Equals($auto1)
        {
            if(!is_null($auto1) && is_a($auto1,"Auto"))
            {
                return ($auto1->_marca == $this->_marca);
            }
            return false;
        }

        /*
            Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
            de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con
            la suma de los precios o cero si no se pudo realizar la operación.
            Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);
        */
        public static function _Add($auto1, $auto2)
        {
            $auxPrecioCombinado;
            if($auto1->_Equals($auto1,$auto2) && $auto1->_color == $auto2->_color)
            {
                $auxPrecioCombinado = $auto1->_precio + $auto2->_precio;
                return $auxPrecioCombinado;
            }
            return 0;
        }

    }

?>