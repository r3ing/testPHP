<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <link rel="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>


    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>-->


</head>
<body>

<br>
<br>
<br>

<table id="table1" class="table table-striped table-bordered table-hover dt-responsive" width="100%" style="width:100%">
    <thead>
    <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Age</th>
        <th>Salary</th>
        <th>Modal</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>$320,800</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Cedric Kelly</td>
        <td>Senior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>$433,060</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Sonya Frost</td>
        <td>Software Engineer</td>
        <td>Edinburgh</td>
        <td>23</td>
        <td>$103,600</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Quinn Flynn</td>
        <td>Support Lead</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>$342,000</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Dai Rios</td>
        <td>Personnel Lead</td>
        <td>Edinburgh</td>
        <td>35</td>
        <td>$217,500</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Gavin Joyce</td>
        <td>Developer</td>
        <td>Edinburgh</td>
        <td>42</td>
        <td>$92,575</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Martena Mccray</td>
        <td>Post-Sales support</td>
        <td>Edinburgh</td>
        <td>46</td>
        <td>$324,050</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Jennifer Acosta</td>
        <td>Junior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>43</td>
        <td>$75,650</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Shad Decker</td>
        <td>Regional Director</td>
        <td>Edinburgh</td>
        <td>51</td>
        <td>$183,000</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>$320,800</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Cedric Kelly</td>
        <td>Senior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>$402,293</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Sonya Frost</td>
        <td>Software Engineer</td>
        <td>Edinburgh</td>
        <td>23</td>
        <td>$103,600</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Quinn Flynn</td>
        <td>Support Lead</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>$342,000</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Dai Rios</td>
        <td>Personnel Lead</td>
        <td>Edinburgh</td>
        <td>35</td>
        <td>$217,500</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Gavin Joyce</td>
        <td>Developer</td>
        <td>Edinburgh</td>
        <td>42</td>
        <td>$92,575</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Martena Mccray</td>
        <td>Post-Sales support</td>
        <td>Edinburgh</td>
        <td>46</td>
        <td>$324,050</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Jennifer Acosta</td>
        <td>Junior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>43</td>
        <td>$75,650</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Shad Decker</td>
        <td>Regional Director</td>
        <td>Edinburgh</td>
        <td>51</td>
        <td>$183,000</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>$320,800</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Cedric Kelly</td>
        <td>Senior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>$402,293</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Sonya Frost</td>
        <td>Software Engineer</td>
        <td>Edinburgh</td>
        <td>23</td>
        <td>$103,600</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Quinn Flynn</td>
        <td>Support Lead</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>$342,000</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Dai Rios</td>
        <td>Personnel Lead</td>
        <td>Edinburgh</td>
        <td>35</td>
        <td>$217,500</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Gavin Joyce</td>
        <td>Developer</td>
        <td>Edinburgh</td>
        <td>42</td>
        <td>$92,575</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Martena Mccray</td>
        <td>Post-Sales support</td>
        <td>Edinburgh</td>
        <td>46</td>
        <td>$324,050</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Jennifer Acosta</td>
        <td>Junior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>43</td>
        <td>$75,650</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Shad Decker</td>
        <td>Regional Director</td>
        <td>Edinburgh</td>
        <td>51</td>
        <td>$183,000</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>$320,800</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Cedric Kelly</td>
        <td>Senior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>$402,293</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Sonya Frost</td>
        <td>Software Engineer</td>
        <td>Edinburgh</td>
        <td>23</td>
        <td>$103,600</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Quinn Flynn</td>
        <td>Support Lead</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>$342,000</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Dai Rios</td>
        <td>Personnel Lead</td>
        <td>Edinburgh</td>
        <td>35</td>
        <td>$217,500</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Gavin Joyce</td>
        <td>Developer</td>
        <td>Edinburgh</td>
        <td>42</td>
        <td>$92,575</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Martena Mccray</td>
        <td>Post-Sales support</td>
        <td>Edinburgh</td>
        <td>46</td>
        <td>$324,050</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Jennifer Acosta</td>
        <td>Junior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>43</td>
        <td>$75,650</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Shad Decker</td>
        <td>Regional Director</td>
        <td>Edinburgh</td>
        <td>51</td>
        <td>$183,000</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td>$320,800</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Cedric Kelly</td>
        <td>Senior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>$402,293</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Sonya Frost</td>
        <td>Software Engineer</td>
        <td>Edinburgh</td>
        <td>23</td>
        <td>$103,600</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Quinn Flynn</td>
        <td>Support Lead</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>$342,000</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Dai Rios</td>
        <td>Personnel Lead</td>
        <td>Edinburgh</td>
        <td>35</td>
        <td>$217,500</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Gavin Joyce</td>
        <td>Developer</td>
        <td>Edinburgh</td>
        <td>42</td>
        <td>$92,575</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Martena Mccray</td>
        <td>Post-Sales support</td>
        <td>Edinburgh</td>
        <td>46</td>
        <td>$324,050</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Jennifer Acosta</td>
        <td>Junior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>43</td>
        <td>$75,650</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    <tr>
        <td>Shad Decker</td>
        <td>Regional Director</td>
        <td>Edinburgh</td>
        <td>51</td>
        <td>$183,000</td>
        <td>
            <a class="btn btn-outline sbold"><i onclick="showModal(this.getAttribute('data-id'));" data-id="1234567890" data-toggle="modal" class="glyphicon glyphicon-search" style="color:blue;"></i></a>
        </td>
    </tr>
    </tbody>
</table>

<br>
<br>
<br>

<div class="modal fade centered-modal" id="full" tabindex="-1" role="dialog" aria-hidden="true" style="padding-right: 15px;">
    <div class="modal-dialog modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Detalles</h4>
            </div>
            <div id="modal-body-data" class="modal-body">
                <div id="loadingModal" hidden  width="100%" align="center">
                    <h1> Cargando Informaci&oacute;n ... </h1>
                    <h2> Esto puede tardar varios minutos. </h2>
                </div>
                <div id="bodyDatatable" hidden> </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function(){
       //$('table.display').DataTable();
    //});

        $('#table1').dataTable({
            language:{
                aria:{
                    sortAscending:": Activar para ordenar la columna ascendente",
                    sortDescending:": Activar para ordenar la columna descendente"
                },
                emptyTable:"No hay datos disponibles en la tabla",
                info:"Mostrando _START_ a _END_ de _TOTAL_ Registros",
                infoEmpty:"Registros no encontradas",
                infoFiltered:"(filtered1 from _MAX_ total entries)",
                lengthMenu:"_MENU_ Registros",
                search:"Buscar:",
                zeroRecords:"No se encontraron registros"
            },
            buttons:[
                {
                    extend:"print",
                    className:"btn dark btn-outline"
                },
                {
                    extend:"pdf",
                    className:"btn green btn-outline"
                },
                {
                    extend:"csv",
                    className:"btn purple btn-outline "
                }
            ],
            responsive:{
                details:{}
            },
            order:[
                [0,"asc"]
            ],
            lengthMenu:[
                [5,10,15,20,-1],
                [5,10,15,20,"Todos"]
            ],
            pageLength:10,
            dom:"<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>"
        });

        $('#table2').dataTable({
            language:{
                aria:{
                    sortAscending:": Activar para ordenar la columna ascendente",
                    sortDescending:": Activar para ordenar la columna descendente"
                },
                emptyTable:"No hay datos disponibles en la tabla",
                info:"Mostrando _START_ a _END_ de _TOTAL_ Registros",
                infoEmpty:"Registros no encontradas",
                infoFiltered:"(filtered1 from _MAX_ total entries)",
                lengthMenu:"_MENU_ Registros",
                search:"Buscar:",
                zeroRecords:"No se encontraron registros"
            },
            buttons:[
                {
                    extend:"print",
                    className:"btn dark btn-outline"
                },
                {
                    extend:"pdf",
                    className:"btn green btn-outline"
                },
                {
                    extend:"csv",
                    className:"btn purple btn-outline "
                }
            ],
            responsive:{
                details:{}
            },
            order:[
                [0,"asc"]
            ],
            lengthMenu:[
                [5,10,15,20,-1],
                [5,10,15,20,"Todos"]
            ],
            pageLength:10,
            dom:"<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>"
        });

    });

    function showModal(val){
        var datos = 'valor='+val;
        $('#table1').DataTable().destroy();
        $('#loadingModal').show();
        $('#bodyDatatable').hide();
        $('#full').modal('show');
        $.ajax({
            type: 'POST',
            url: 'tableModal.php',
            data: datos,
            success: function(r) {
                $('#bodyDatatable').html(r);
            },
            complete: function(){
                $('#loadingModal').hide();
                $('#bodyDatatable').fadeIn('slow');
            }
        });
    }
</script>

</body>
</html>