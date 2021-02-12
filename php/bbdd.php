<?php
    
    // Funcion para crear la tabla de la BBDD.
    function crearTablaBBDD ($conexion) {
        $sql_creacion_tabla = 'CREATE TABLE IF NOT EXISTS pais(
            id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            nombre VARCHAR(100) NOT NULL,
            continente VARCHAR(100) NOT NULL                    
        );';

        $result = $conexion->consulta($sql_creacion_tabla);
        
        if ($result != null) {
            return true;
        } else {
            return false;
        };      
    };

    // Funcion para llenar la BBDD.
    function llenarTablaBBDD ($tabla, $conexion) {

        $conexion->consulta('USE '.$tabla.';');

        $paises = array(
            array("Albania",
                "Alemania",
                "Andorra",
                "Austria",
                "Bélgica",
                "Bielorrusia",
                "Bosnia y Herzegovina",
                "Bulgaria",
                "Croacia",
                "Dinamarca",
                "Eslovaquia",
                "Eslovenia",
                "España",
                "Estonia",
                "Finlandia",
                "Francia",
                "Grecia",
                "Hungría",
                "Irlanda",
                "Islandia",
                "Italia",
                "Letonia",
                "Liechtenstein",
                "Lituania",
                "Luxemburgo",
                "Macedonia del Norte",
                "Malta",
                "Moldavia",
                "Mónaco",
                "Montenegro",
                "Noruega",
                "Países Bajos",
                "Polonia",
                "Portugal",
                "Reino Unido",
                "República Checa",
                "Rumania",
                "San Marino",
                "Serbia",
                "Suecia",
                "Suiza",
                "Ucrania",
                "Vaticano",
                "Antigua y Barbuda",
                "Argentina",
                "Bahamas",
                "Barbados",
                "Belice",
                "Bolivia",
                "Brasil",
                "Canadá",
                "Chile",
                "Colombia",
                "Costa Rica",
                "Cuba",
                "Dominica",
                "Ecuador",
                "El Salvador",
                "Estados Unidos",
                "Granada",
                "Guatemala",
                "Guyana",
                "Haití",
                "Honduras",
                "Jamaica",
                "México",
                "Nicaragua",
                "Panamá",
                "Paraguay",
                "Perú",
                "República Dominicana",
                "San Cristóbal y Nieves",
                "San Vicente y las Granadinas",
                "Santa Lucía",
                "Surinam",
                "Trinidad y Tobago",
                "Uruguay",
                "Venezuela",
                "Angola",
                "Argelia",
                "Benín",
                "Botsuana",
                "Burkina Faso",
                "Burundi",
                "Cabo Verde",
                "Camerún",
                "Chad",
                "Comoras",
                "Costa de Marfil",
                "Egipto",
                "Eritrea",
                "Etiopía",
                "Gabón",
                "Gambia",
                "Ghana",
                "Guinea",
                "Guinea-Bisáu",
                "Guinea Ecuatorial",
                "Kenia",
                "Lesoto",
                "Liberia",
                "Libia",
                "Madagascar",
                "Malaui",
                "Malí o Mali",
                "Marruecos",
                "Mauricio",
                "Mauritania",
                "Mozambique",
                "Namibia",
                "Níger",
                "Nigeria",
                "República Centroafricana",
                "República del Congo",
                "República Democrática del Congo",
                "Ruanda",
                "Santo Tomé y Príncipe",
                "Senegal",
                "Seychelles",
                "Sierra Leona",
                "Somalia",
                "Suazilandia",
                "Sudáfrica",
                "Sudán",
                "Sudán del Sur",
                "Tanzania",
                "Togo",
                "Túnez",
                "Uganda",
                "Yibuti",
                "Zambia",
                "Zimbabue",
                "Afganistán",
                "Arabia Saudita",
                "Bangladés",
                "Baréin",
                "Birmania / Myanmar",
                "Brunéi",
                "Bután",
                "Camboya",
                "Catar",
                "China",
                "Corea del Norte",
                "Corea del Sur",
                "Emiratos Árabes Unidos",
                "Filipinas",
                "India",
                "Indonesia",
                "Irak",
                "Irán",
                "Israel",
                "Japón",
                "Jordania",
                "Kirguistán",
                "Kuwait",
                "Laos",
                "Líbano",
                "Malasia",
                "Maldivas",
                "Mongolia",
                "Nepal",
                "Omán",
                "Pakistán",
                "Singapur",
                "Siria",
                "Sri Lanka",
                "Tailandia",
                "Tayikistán",
                "Timor Oriental",
                "Turkmenistán",
                "Uzbekistán",
                "Vietnam",
                "Yemen",
                "Armenia",
                "Azerbaiyán",
                "Chipre",
                "Georgia",
                "Kazajistán",
                "Rusia",
                "Turquía",
                "Australia",
                "Fiyi",
                "Islas Marshall",
                "Islas Salomón",
                "Kiribati",
                "Micronesia",
                "Nauru",
                "Nueva Zelanda",
                "Palaos",
                "Papúa Nueva Guinea",
                "Samoa",
                "Tonga",
                "Tuvalu",
                "Vanuatu"
            ),
            array("EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "EUROPA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "AMÉRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ÁFRICA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA",
                "ASIA-EUROPA",
                "ASIA-EUROPA",
                "ASIA-EUROPA",
                "ASIA-EUROPA",
                "ASIA-EUROPA",
                "ASIA-EUROPA",
                "ASIA-EUROPA",
                "OCEANÍA",
                "OCEANÍA",
                "OCEANÍA",
                "OCEANÍA",
                "OCEANÍA",
                "OCEANÍA",
                "OCEANÍA",
                "OCEANÍA",
                "OCEANÍA",
                "OCEANÍA",
                "OCEANÍA",
                "OCEANÍA",
                "OCEANÍA",
                "OCEANÍA"
            )
        );

        // Para comprobar si la tabla está vacia calculamos.        
        
        if ($conexion->obtenerDatos($tabla) == null) {
            // Si la tabla está vacia la llenamos con los datos.
            for($i = 0; $i < count($paises[0]); $i++) {            
      
                $sql_llenar ='INSERT INTO pais VALUES (NULL,"'.$paises[0][$i].'","'.$paises[1][$i].'");';              
                $res = $conexion->consulta($sql_llenar);               
                
                // Comprobamos si hemos tenido algun fallo en las inserciones.
                if ($res == null) {
                    $i = count($paises[0]); // Forzamos salida del for
                };
            };
            return $res;
        } else {
            return true; // Ya esta llena
        };              
    };

    function crearEstructuraBBDD($conexion) {
        if(crearTablaBBDD($conexion)) {
            if(llenarTablaBBDD('pais', $conexion) == null) {
                return false; // Error en el llenado de tablas.
            } else {
                return true;
            };
        } else {
            return false; // Error en la creación de tablas.
        };
    };    

?>