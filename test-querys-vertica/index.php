<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<br>
<a href="#" class="" onclick="tableToCSV('report.csv')">Exportar a CSV</a>


<?php
    $conect_vertica  = new PDO('odbc:Driver={Vertica};Database=SWITCH;Servername=10.0.31.122', 'readOnly','X4rg#mV?G%h9&-Jq');
    $conect_vertica->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
    $conect_vertica->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $conect_vertica->setFetchMode(PDO::ATTR_ERRMODE, PDO::FETCH_ASSOC);

    $SQL = "select * from ripley.trx_cabecera
            where comercio = 1 and
                  fecha between to_date('01072017','ddmmyyyy')   and to_date('01072017','ddmmyyyy')";

    $SQL = "select * from ripley.trx_cabecera
             where comercio = 1 and
                   fecha between to_date('01072018','ddmmyyyy')  and to_date('31072018','ddmmyyyy') and
                   cod_sucursal in (10012,10018,10016,10026) and
                   cod_trx in (1,3,9,10,21,23,29,30)";

    $result = $conect_vertica->prepare($SQL);
    $result->execute();

    $rows = array();
    $count = 0;
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        //$rows[] = $row;
        $count++;
    }
echo $count
 //print json_encode($rows);

/*

    while($array=$result->fetch(PDO::FETCH_ASSOC)) {

        if(empty($columns)) {
            $columns = array_keys($array);
            foreach ($columns as $col) {
                $columnDescr = array();
                $columnDescr['id'] = $col;
                $columnDescr['label'] = $col;
                $columnDescr['type'] = 'string';
                $ret['cols'][] = $columnDescr;
            }
        }

        $values=array_values($array);
        $rowData=array();
        $rowData['c']=array();
        $col_index = 0;
        $colType = '';
        foreach($values as $value) {
            $colType = $ret['cols'][$col_index]['type'];
            if ($colType =='number') {
                $rowData['c'][]=array("v"=>$value*1);
            }
            else if ($colType =='datetime') {
                $rowData['c'][]=array("v"=> "Date(".substr($value,0,4).", ".substr($value,5,2).", ".substr($value,8,2).")");
            }
            else {
                $rowData['c'][]=array("v"=>utf8_encode($value));
            }
            $col_index++;
        }
        $ret['rows'][]=$rowData;
    }
*/

//Easy Query
/*
$result=array('statement' => $SQL, 'resultSet' => $ret);
json_encode($result);

switch(json_last_error()) {
    case JSON_ERROR_NONE:
        echo ' - Sin errores';
        break;
    case JSON_ERROR_DEPTH:
        echo ' - Excedido tamaño máximo de la pila';
        break;
    case JSON_ERROR_STATE_MISMATCH:
        echo ' - Desbordamiento de buffer o los modos no coinciden';
        break;
    case JSON_ERROR_CTRL_CHAR:
        echo ' - Encontrado carácter de control no esperado';
        break;
    case JSON_ERROR_SYNTAX:
        echo ' - Error de sintaxis, JSON mal formado';
        break;
    case JSON_ERROR_UTF8:
        echo ' - Caracteres UTF-8 malformados, posiblemente codificados de forma incorrecta';
        break;
    default:
        echo ' - Error desconocido';
        break;
}
echo "<br>";

//echo json_encode($ret['rows'][0]);


//Imprime Table
echo "<h4>".sizeof($ret['rows'])." Registros<h4>";
*/

?>
    <table>
        <tr>
            <!--<th>#</th>-->
        <?php
        /*
             foreach($ret['cols'] as $c){
               echo "<th>". $c['label'] . "</th>";
             }
        */
        ?>
        </tr>
        <?php
        /*
            for($i = 0; $i < sizeof($ret['rows']); $i++){
                echo "<tr>";
                //echo "<td>".($i+1)."</td>";
                    foreach($ret['rows'][$i] as $c){
                        for($j = 0; $j < sizeof($c); $j++){
                            echo "<td>".$c[$j]['v']."</td>";
                        }
                    }
                echo "</tr>";
            }
        */
        ?>
    </table>

<script>
    function downloadCSV(csv, filename) {
        var csvFile;
        var downloadLink;

        // CSV file
        csvFile = new Blob([csv], {type: "text/csv"});
        // Download link
        downloadLink = document.createElement("a");
        // File name
        downloadLink.download = filename;
        // Create a link to the file
        downloadLink.href = window.URL.createObjectURL(csvFile);
        // Hide download link
        downloadLink.style.display = "none";
        // Add the link to DOM
        document.body.appendChild(downloadLink);
        // Click download link
        downloadLink.click();
    }

    function tableToCSV(filename) {
        var csv = [];
        var rows = document.querySelectorAll("table tr");


        for (var i = 0; i < rows.length; i++) {
            var row = [], cols = rows[i].querySelectorAll("td, th");

            for (var j = 0; j < cols.length; j++)
                row.push(cols[j].innerText);

            csv.push(row.join(","));
        }
        // Download CSV file
        downloadCSV(csv.join("\n"), filename);
    }
</script>
</body>
</html>


