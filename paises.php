<?php
$paises = array('Afganistán', 'Albania', 'Alemania', 'Andorra', 'Angola', 'de Anguilla', 'Antártida', 'Antigua y Barbuda', 'Antillas Neerlandesas',
    'Arabia Saudí', 'Argelia', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaiyán', 'Bahamas', 'Bahráin', 'Bangladesh', 'Barbados',
    'Bélgica', 'Belice', 'Benín', 'Bermudas', 'Bielorrusia', 'Bolivia', 'Bosnia-Herzegovina', 'Botsuana', 'Brasil', 'Brunei Darussalam', 'Bulgaria',
    'Burkina Faso', 'Burundi', 'Bután', 'Cabo Verde', 'Camboya', 'Camerún', 'Canadá', 'Chad', 'Chile', 'China', 'Chipre', 'Ciudad Vaticano',
    'Colombia', 'Comoras', 'Corea del Norte', 'Corea del Sur', 'Costa de Marfil', 'Costa Rica', 'Croacia', 'Cuba', 'Islas Marshall', 'Dinamarca',
    'Dominica', 'Emiratos Árabes Unidos', 'Ecuador', 'Estados Unidos de América', 'Egipto', 'El Salvador', 'Eritrea', 'Eslovaquia', 'Eslovenia',
    'España', 'Estonia', 'Etiopía', 'Federación Rusa', 'Filipinas', 'Finlandia', 'Fiyi', 'Francia', 'Gabón', 'Gambia', 'Georgia', 'Ghana', 'Gibraltar',
    'Granada', 'Grecia', 'Groenlandia', 'Guadalupe', 'Guam', 'Guatemala', 'Guayana Francesa', 'Guinea', 'Guinea Ecuatorial', 'Guinea-Bissau', 'Guyana',
    'Haití', 'Honduras', 'Hong Kong', 'Hungría', 'India', 'Indonesia', 'Irán', 'Iraq', 'Irlanda', 'Islas Heard y Mcdonald', 'Islas Vírgenes (americanas)',
    'Islas Marianas del Norte', 'Islas Sur Georgia y Sur Sandwich', 'Islas Turcas y Caicos', 'Islas Vírgenes GB', 'Isla Christmas', 'Islandia', 'Islas Bouvet',
    'Islas Caimán', 'Islas Cocos', 'Islas Cook', 'Islas Feroe', 'Islas Malvinas', 'Islas Niue', 'Islas Norfolk', 'Islas Pitcairn', 'Islas Salomón', 'Islas Tokelau',
    'Islas menores alejadas de EE.UU.', 'Israel', 'Italia', 'Jamaica', 'Japón', 'Jordania', 'Kazajistán', 'Kenia', 'Kirguizistán', 'Kiribati', 'Kuwait', 'Laos',
    'Lesoto', 'Letonia', 'Líbano', 'Liberia', 'Libia', 'Liechtenstein', 'Lituania', 'Luxemburgo', 'Macao', 'Macedonia', 'Madagascar', 'Malasia', 'Malaui',
    'Maldivas', 'Malí', 'Malta', 'Marruecos', 'Martinica', 'Mauricio (Isl.)', 'Mauritania', 'Mayotte', 'México', 'Micronesia', 'Moldavia', 'Mónaco', 'Mongolia',
    'Montserrat', 'Mozambique', 'Myanmar', 'Namibia', 'Nauru', 'Nepal', 'Nicaragua', 'Níger', 'Nigeria', 'Noruega', 'Nueva Caledonia', 'Nueva Zelanda', 'Omán', 'Países Bajos',
    'Pakistán', 'Palaos', 'Palestina', 'Panamá', 'Papúa Nueva Guinea', 'Paraguay', 'Perú', 'Polinesia francesa', 'Polonia', 'Portugal', 'Puerto Rico', 'Qatar', 'Reino Unido',
    'República Centroafricana', 'República Dominicana', 'República Checa', 'República del Congo', 'República del Congo', 'Reunión', 'Ruanda', 'Rumanía', 'Saint Kitts y Nevis',
    'St. Pedro y Miquelón', 'Santo Tomé y Príncipe', 'Sáhara occidental', 'Samoa americana', 'Samoa Occidental', 'San Marino', 'San Vicente y las Granadinas', 'Santa Helena',
    'Santa Lucía', 'Senegal', 'Serbia y Montenegro', 'Seychelles', 'Sierra Leona', 'Singapur', 'Siria', 'Somalia', 'Sri Lanka', 'Suazilandia', 'Sudáfrica', 'Sudán', 'Suecia', 'Suiza',
    'Surinam', 'Svalbard', 'Tailandia', 'Taiwan', 'Tanzania', 'Tayikistán', 'Timor oriental', 'Togo', 'Tonga', 'Trinidad y Tobago', 'Túnez', 'Turkmenistán', 'Turquía', 'Tuvalu',
    'Ucrania', 'Uganda', 'Uruguay', 'Uzbekistán', 'Vanuatu', 'Venezuela', 'Vietnam', 'Wallis,Futuna', 'Yemen', 'Yibuti', 'Zambia', 'Zimbabue');

$busqueda = trim($_GET['busqueda']);

$encontrados = array();

if(!empty($busqueda)) {
    foreach ($paises as $pais) {
        if (strpos($pais, $busqueda) !== false) {
            $encontrados[] = $pais;
        }
    }
}

if(count($encontrados) > 0) {
    $lista = '<ol>';

    foreach($encontrados as $encontrado){
        $lista .= "<li>$encontrado</li>";
    }

    $lista .= '</ol>';

    echo $lista;
}else{
    echo '<span style="color:red">No hay datos</span>';
}
?>