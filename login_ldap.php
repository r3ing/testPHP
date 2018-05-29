<?php

// ejemplo de autenticación
$ldaprdn  = 'RIPLEY-MAIN\agutierrezv';
$ldappass = 'Amparo16';

// conexión al servidor LDAP
$ldapconn = ldap_connect("w782p.ripley.local")
or die("Could not connect to LDAP server.");

if ($ldapconn) {

    // realizando la autenticación
    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

    // verificación del enlace
    if ($ldapbind) {
        echo "LDAP bind successful...";
    } else {
        echo "LDAP bind failed...";
    }

}

?>
