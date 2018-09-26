<?php
    $conect_vertica  = new PDO('odbc:Driver={Vertica};Database=SWITCH;Servername=10.0.31.122', 'readOnly','X4rg#mV?G%h9&-Jq');
    $conect_vertica->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
    $conect_vertica->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $conect_vertica->setFetchMode(PDO::ATTR_ERRMODE, PDO::FETCH_ASSOC);

    $SQL1 = "select * from ripley.trx_cabecera
                where comercio = 1 and
                      fecha between to_date('26112017','ddmmyyyy') and to_date('30112017','ddmmyyyy')";

    $SQL = "select * from ripley.trx_cabecera
             where comercio = 1 and
                   fecha between to_date('0111017','ddmmyyyy')  and to_date('30112017','ddmmyyyy') and
                   cod_sucursal in (10012,10018,10016,10026) and
                   cod_trx in (1,3,9,10,21,23,29,30)";

    $result = $conect_vertica->prepare($SQL);
    $result->execute();

    $filename = 'noviembre2017.csv';
    $list = array();
    $flag = true;

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        if($flag)
            array_push($list, array_keys($row));

        array_push($list, array_values($row));
        $flag = false;
    }

    $fp = fopen('php://output', 'w');
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="'.$filename.'"');
    foreach ($list as $ferow) {
        fputcsv($fp, $ferow);
    }
?>