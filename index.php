<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="Bruno Assis">
        <link rel="icon" href="images/favicon.ico">


        <title>xPaper</title>

        <link href="css/bootstrapValidator.min.css" rel="stylesheet">
        <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/dashboard.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">

    </head>

    <?php
    session_start();
    include_once("conection.php");
    include_once("sessionValidation.php");
    ?>
    <body>

     
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">    
                <div class="navbar-header">   
                    <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#navbarNav" aria-expanded="true"        aria-controls="navbarNav" aria-label="Toggle navigation">   
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">xPaper</a>
                </div>

                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                            if ($_SESSION['status'] == 2) {
                                echo  '<li><a href="users.php"><span class="glyphicon glyphicon glyphicon-user" aria-hidden="true"> Usuarios</a></li>';
                            }
                        ?>
                        <li><a href="personalConfig.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"> Configuracao</a></li> 
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"> Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>

      
        <br />
        

        <!-- <div class="form-inline text-center" role="form">  alinhado no centro-->
        <div class="form-inline"   style="padding-left:20px; padding-right:20px;" >
            <div class="col-md-1"></div>
            <div class="form-group">
                <div class='input-group date' id='dtp_inicio'>
                    <input type='text' class="form-control text-center" placeholder="Início..." readonly="true" style="background-color: #fff"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div> 
        
        
            <div class="form-group">
                <div class="input-group date" id="dtp_fim">
                    <input type='text' class="form-control text-center" placeholder="Fim..." readonly="true" style="background-color: #fff" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>

            <div class="form-group"> 
                <select name="" id="option_local"  class="form-control text-center">
                    <option value="Todas" selected="selected">Todas</option>
                    <option value="Laqueadora">Laquedora</option>
                    <option value="Tocchio">Tocchio</option>
                </select>
            </div>
        </div>   
        <br />

        <div class="row" style="padding-left:20px; padding-right:20px;">   
            <div class="col-md-1"></div>

            <div class="col-md-10" >
                <table id="example" class="display " cellspacing="0" width="100%"">
                    <thead>
                        <tr>

                            <th>Inicio</th>
                            <th>Fim</th>
                            <th>Total</th>
                            <th>Velocidade</th>
                            <th>Turno</th>
                            <th>Local</th>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="col-md-1"></div>
        </div>
    </div>
</div>
<div class="col-md-12">

</div>
<br />
<br />
<br />
<div id="img" class=" text-center">
    <a href="http://www.eucatex.com.br/pt/"> <img src="images/site.gif"></a>
    <a href="https://www.facebook.com/EucatexOficial"> <img src="images/facebook.gif"></a>
    <a href="https://twitter.com/Eucatex_Oficial"> <img src="images/twiter.gif"></a>
    <a href="https://br.pinterest.com/tintaseucatex/  "> <img src="images/pintes.gif"></a>
    <a href="https://www.instagram.com/eucatex_oficial/"> <img src="images/instagram.gif"></a>
</div>

</div> <!-- /container -->

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<script type="text/javascript" language="javascript" src="js/jquery-1.12.3.min.js">

    < script > window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="js/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/moment.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>

</script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.min.js">
</script>
<script scr="js/bootstrap-select.min.js"></script>


<script>
    $(document).ready(function () {
        //Inicia datatable
        //Exemplo conforme explicado em: http://britseyeview.com/software/dtgs/poptable.html

        var oTable = $('#example').DataTable({
            "sAjaxSource": 'getReelData.php',
            "language": {
                "search": "Buscar",
                "lengthMenu":  "Mostrar _MENU_ registros",
                "info":    " _START_.._END_ de _TOTAL_ registros",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Próximo"
                    }
            },
            "order": [[1, "desc"]],
            "columnDefs": [{
                    "defaultContent": "-",
                    "className": "dt-center", 
                    "targets": "_all"
                }]
        });

        //Inicia datetimepicker           
        $('#dtp_inicio').datetimepicker({
            useCurrent: false, //Important! See issue #1075
            format: 'DD/MM/YYYY HH:mm',
            locale: 'pt-br',
            ignoreReadonly: true,
            allowInputToggle: true
        });
        
        $('#dtp_fim').datetimepicker({
            useCurrent: false, //Important! See issue #1075
            format: 'DD/MM/YYYY HH:mm',
            locale: 'pt-br',
            ignoreReadonly: true,
            allowInputToggle: true
        });

        $("#dtp_inicio").on("dp.change", function (e) {
            $('#dtp_fim').data("DateTimePicker").minDate(e.date);
            refresh();
        });

        $("#dtp_fim").on("dp.change", function (e) {
            $('#dtp_inicio').data("DateTimePicker").maxDate(e.date);
            refresh();
        });

        $('#option_local').change(function() {
            refresh();
        });

        function refresh() {
            var data_inicio = $('#dtp_inicio').find("input").val();
            var data_fim = $('#dtp_fim').find("input").val();
            var local = $('#option_local option:selected').index();
            //Retorna o texto selecionado
            //var local = $('#option_local').val();


            if (data_inicio !== 0 && data_fim !== 0 || local !== 0) {
                $.post("getReelData.php", {'inicio': data_inicio, 'fim': data_fim, 'local': local}, function (data) {
                    jsdata = jQuery.parseJSON(data);
                    $('#example').dataTable().fnClearTable();
                    if (jsdata.aaData.length)
                        $('#example').dataTable().fnAddData(jsdata.aaData);
                    $('#example').dataTable().fnDraw();
                });
            }
        }

        $('#btn_buscar').click(function () {
            refresh();
        });
    });
</script>
</body>
</html>
