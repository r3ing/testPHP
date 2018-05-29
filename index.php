<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>-->


</head>
<body>

<div class="row col-md-10">
    <div class="col-md-12">
        <?php
        $link  = new PDO('mysql:host=localhost;dbname=CMS', 'root','faCV0512');
        ?>
        <div class="portlet box purple">
            <div class="portlet-title">
                <div class="tools">
                    <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                </div>
            </div>
            <div class="portlet-body">
                <br><br><br>
                <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">
                    <thead>
                    <tr  class="info">
                        <th>ID</th>
                        <th>Nombre</th>
                        <th width="5%" class="notReport">Activo</th>
                        <th width="5%" class="notReport">Operacion</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $SQL=" SELECT * FROM CATEGORY ORDER BY id";
                    $link->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                    $RES = $link->prepare($SQL);
                    $RES->execute();
                    foreach($RES as $k => $row)
                    {
                        ?>
                        <tr class="odd gradeX">
                            <td><?php echo $row[0] ?></td>
                            <td><?php echo $row[1] ?></td>
                            <td >
                                <i class="glyphicon glyphicon-ok" style="color:#006600;"></i>
                            </td>
                            <td align ='center' >
                                <form name="formJournal" action="" onSubmit="journalTerminal(); return false" class="form-horizontal">
                                    <button type="submit" name="guardar" id="guardar"  style="border:0px; background:transparent;"> <i class='glyphicon glyphicon-list-alt' style='color:blue;'></i> </button>
                                </form>
                                <script type="text/javascript">

                                    function objetoAjax(){
                                        var xmlhttp=false;
                                        try {
                                            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                                        } catch (e) {
                                            try {
                                                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                            } catch (E) {
                                                xmlhttp = false;
                                            }
                                        }
                                        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
                                            xmlhttp = new XMLHttpRequest();
                                        }
                                        return xmlhttp;
                                    }
                                    function journalTerminal(){
                                        //div donde se mostrará lo resultados
                                        divResultado = document.getElementById('divJournal');

                                        //recogemos los valores de los inputs
                                        dateJournal= '29-04-2018' // document.formJournal.dateJournal.value;
                                        cod_sucursal= '05-05-2018' // document.formJournal.cod_sucursal.value;

                                        //instanciamos el objetoAjax
                                        ajax=objetoAjax();

                                        //uso del medotod POST
                                        //archivo que realizará la operacion
                                        ajax.open("POST", "JOURNAL.php",true);
                                        //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
                                        ajax.onreadystatechange=function() {
                                            //la función responseText tiene todos los datos pedidos al servidor
                                            if (ajax.readyState==4) {
                                                divResultado.innerHTML=ajax.responseText;
                                            }else{
                                                //divResultado.innerHTML='../MASTER/images/loaders/loader6.gif';
                                                document.getElementById('divJournal').innerHTML='<img src="../../MASTER/images/loaders/loader6.gif" width="10%" height="10%" align="center">';
                                            }
                                        }
                                        ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                                        ajax.send("dateJournal="+dateJournal+"&cod_sucursal="+cod_sucursal)
                                    }
                                </script>

                            </td>
                        </tr>
                        <?php
                    }
                    $link = null;
                    $RES = null;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script>

    $(document).ready(function(){

        /*
        $('#sample_1').DataTable( {
            //dom: 'Bfrtip',
            buttons: [
                'print', 'pdf', 'csv'
            ]
        } );
        */

       // $('#sample_1').DataTable().destroy();

       //var datatable = $('#sample_1').DataTable();

        //datatable.buttons()


        $('#sample_1').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'print',
                    exportOptions: {
                        columns: ':not(.notReport)'
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: ':not(.notReport)'
                    }
                },
                {
                    extend: 'csv',
                    exportOptions: {
                        columns: ':not(.notReport)'
                    }
                }

            ]
        } );


    });
</script>

</body>
</html>