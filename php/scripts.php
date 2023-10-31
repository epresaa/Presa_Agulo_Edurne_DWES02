<!--------------------------- FUNCIONES --------------------------------->

<?php
    // FUNCÓN usada para comprobar el email
    function comprobarEmail($email) : bool {
        if(!empty($email)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
            } 
        }
        return false;
    }

    // FUNCIÓN usada para comprobar el teléfono
    function comprobarTel($tel) : bool {
        /* RegEx: 
            - Teléfono de 9 cifras 
            - De España: prefijo 0034, 34 o +34
            - Fijo o móvil: empieza por 9, 6 o 7
            - Puede tener guiones o espacios  
        */
        $patt = "'(\+34|0034|34)?[ -]*(6|7)[ -]*([0-9][ -]*){8}'";
        if(preg_match($patt, $tel) == 1) {
            return true;
        }
        return false;
    }

    // FUNCIÓN usada para comprobar la fecha 
    function comprobarFecha($fecha) : bool {
        $hoy = date("Y-m-d");
        if($fecha > $hoy) {
            return true;
        }
        return false;
    }

    // FUNCIÓN usada para comprobar el DNI
    function comprobarDNI($dni) : bool {
        // Primero se comprueba que no esté vacío o sea un DNI válido de 9 caracteres
        if(strlen($dni) != 9) {
            return false; 
        } else {
            // Letra introducida
            $letraDNI = strtoupper($dni[8]);

            // Letra esperada
            $numDNI = sacarNumDNI($dni);
            $letraCorrecta = calcularLetraDNI($numDNI);

            if($letraDNI == $letraCorrecta) {
                return true;
            }
        }
        return false; 
    }
    
    // FUNCIÓN que de un String saca un int número de DNI
    function sacarNumDNI($dni) : int {
        $numString = substr($dni, 0, 8);
        $num = (int) $numString;
        return $num;
    }

    // FUNCIÓN que a partir de un int número de DNI indica qué letra le corresponde
    function calcularLetraDNI($numero) {
        $letras = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];

        $resto = $numero % 23;
        $letraCorrecta = $letras[$resto];
        return $letraCorrecta;
    }

    // FUNCIÓN que calcula la fecha de devolución del libro basándose en la fecha de alquiler 
    function fechaDevolucion($falquiler) {
        return date("d-m-Y",strtotime($falquiler."+ 10 days"));
    }
?>