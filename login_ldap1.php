<?php
// La secuencia b�sica con LDAP es conectar, amarrar, buscar, interpretar el resultado
// de la b�squeda, y cerrar la conexi�n.

echo "<h3>Consulta de prueba LDAP</h3>";
echo "Conectando ...";
$ds=ldap_connect("w782p.ripley.local");  // Debe ser un servidor LDAP v�lido!
echo "El resultado de la conexi�n es " . $ds . "<br />";

if ($ds) {
    echo "Vinculando ...";
    $r=ldap_bind($ds);     // Esta es una vinculaci�n "an�nima", tipicamente
    // con acceso de s�lo lectura.
    echo "El resultado de la vinculaci�n es " . $r . "<br />";

    echo "Buscando (sn=S*) ...";
    // Busca la entrada de apellidos
    $sr=ldap_search($ds, "o=My Company, c=US", "sn=S*");
    echo "El resultado de la b�squeda es " . $sr . "<br />";

    echo "El n�mero de entradas devueltas es " . ldap_count_entries($ds, $sr) . "<br />";

    echo "Obteniendo entradas ...<p>";
    $info = ldap_get_entries($ds, $sr);
    echo "Los datos para " . $info["count"] . " objetos devueltos:<p>";

    for ($i=0; $i<$info["count"]; $i++) {
        echo "El dn es: " . $info[$i]["dn"] . "<br />";
        echo "La primera entrada cn es: " . $info[$i]["cn"][0] . "<br />";
        echo "La primera entrada de correo electr�nico es: " . $info[$i]["mail"][0] . "<br /><hr />";
    }

    echo "Cerando la conexi�n";
    ldap_close($ds);

} else {
    echo "<h4>No se puede conectar al servidor LDAP</h4>";
}
?>