<?php

// ejemplo de autenticaci�n
$ldaprdn  = 'RIPLEY-MAIN\agutierrezv';
$ldappass = 'Amparo16';

// conexi�n al servidor LDAP
$ldapconn = ldap_connect("w782p.ripley.local")
or die("Could not connect to LDAP server.");

if ($ldapconn) {

    // realizando la autenticaci�n
    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

    // verificaci�n del enlace
    if ($ldapbind) {
        echo "LDAP bind successful...";
    } else {
        echo "LDAP bind failed...";
    }

}

?>
