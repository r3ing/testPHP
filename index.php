<?php

/*
// LDAP variables
$ldaphost = "proxy.ripley.local";  // your ldap servers
$ldapport = 8080;                 // your ldap server's port number

// Connecting to LDAP
$ldapconn = ldap_connect($ldaphost, $ldapport);

if($ldapconn){
    echo "Conect result {$ldapconn}";
}else{
    echo "Could not connect to $ldaphost";
}

*/

// LDAP variables
$ldaphost = "proxy.ripley.local";  // your ldap servers
$ldapport = 8080;                 // your ldap server's port number
$ldaprdn  = 'Andres Gutierrez Valle (CL)';     // ldap rdn or dn
$ldappass = 'Amparo16';  // associated password

// connect to ldap server
$ldapconn = ldap_connect($ldaphost, $ldapport);

if ($ldapconn) {

    echo "Conecting ......";

    echo "Connected to the server...Conect result: ".$ldapconn;

    // binding to ldap server
    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

    // verify binding
    if ($ldapbind) {
        echo "LDAP bind successful...";
    } else {
        echo "LDAP bind failed...";
    }

}else{
    echo "Could not connect to LDAP server.";
}



?>
