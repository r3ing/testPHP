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

//$server = "ldaps://w1156p.ripley.local";
$server = "10.0.1.50";

// connect to ldap server
$ldapconn = ldap_connect($server);

if ($ldapconn) {

    echo "Conecting ......";
    echo "<br>";
    echo "Connected to the server...Conect result: ".$server;
    echo "<br>";
    // binding to ldap server
    $ldapbind = ldap_bind($server);

    // verify binding
    if ($ldapbind) {
        echo "LDAP bind successful...";
    } else {
        echo "LDAP bind failed...";
    }

}else{
    echo "<br>";
    echo "Could not connect to LDAP server.";
}



?>
