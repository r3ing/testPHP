<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
        table
        {
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        table th
        {
            background-color: #F7F7F7;
            color: #333;
            font-weight: bold;
        }
        table th, table td
        {
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
<table id="tblCustomers" cellspacing="0" cellpadding="0">
    <tr>
        <th>Customer Id</th>
        <th>Name</th>
        <th>Country</th>
    </tr>
    <tr>
        <td>2000365618252</td>
        <td>John Hammond</td>
        <td>United States</td>
    </tr>
    <tr>
        <td>2000366679337</td>
        <td>Mudassar Khan</td>
        <td>India</td>
    </tr>
    <tr>
        <td>2000366952607</td>
        <td>Suzanne Mathews</td>
        <td>France</td>
    </tr>
    <tr>
        <td>2000370143459</td>
        <td>Robert Schidner</td>
        <td>Russia</td>
    </tr>
</table>
<br />
<input type="button" id="btnExport" value="Export Excel" onclick="Export()" />
<input type="button" id="btnExport" value="Export PDF" onclick="exportPDF()" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="jquery.table2excel.min.js" type="text/javascript"></script>
<script src="jspdf.debug.js" type="text/javascript"></script>
<script type="text/javascript">
    function Export() {
        $("#tblCustomers").table2excel({
            filename: "Table.xls"
        });
    }

    function pdf(){
        window.open('data:application/pdf;base64,' + Base64.encode(buffer) + encodeURIComponent($('#tblCustomers').html()));
        //window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#tblCustomers').html()));
    }

    var specialElementHandlers = {
        // element with id of "bypass" - jQuery style selector
        '.no-export': function(element, renderer) {
            // true = "handled elsewhere, bypass text extraction"
            return true;
        }
    };

    function exportPDF() {

        var doc = new jsPDF('p', 'pt', 'a4');
        //A4 - 595x842 pts
        //https://www.gnu.org/software/gv/manual/html_node/Paper-Keywords-and-paper-size-in-points.html


        //Html source
        var source = document.getElementsByTagName('table')[0].innerHTML;

        var margins = {
            top: 10,
            bottom: 10,
            left: 10,
            width: 595
        };

        doc.fromHTML(
            source, // HTML string or DOM elem ref.
            margins.left,
            margins.top, {
                'width': margins.width,
                'elementHandlers': specialElementHandlers
            },

            function(dispose) {
                // dispose: object with X, Y of the last line add to the PDF
                //          this allow the insertion of new lines after html
                doc.save('Test.pdf');
            }, margins);
    }
</script>
</body>
</html>