<!doctype html>

    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reporte</title>
    </head>
<body>
<style>
    body{ font-family: "Roboto", helvetica, arial, sans-serif;}
    
    div.table-title {
        display: block;
        margin: auto;
        max-width: 600px;
        padding:5px;
        width: 100%;
    }

    .table-title h3 {
        color: #fafafa;
        font-size: 30px;
        font-weight: 400;
        font-style:normal;
        text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
        text-transform:uppercase;
    }


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child { border-top-left-radius:3px; }
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
 
tr:first-child { border-top:none; }
tr:last-child { border-bottom:none; } 
tr:nth-child(odd) td { background:#EBEBEB; } 
tr:last-child td:first-child { border-bottom-left-radius:3px; } 
tr:last-child td:last-child { border-bottom-right-radius:3px; }
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

    td:last-child { border-right: 0px; }
    th.text-center { text-align: center; }
    .text-center { text-align: center; }
    nav .right{
        float: right;
    }
</style>
    <header>
        <nav>
            <img src="./../public/img/mppeu.jpg" width="150" height="150">
            <small class="right"><?php echo e($date); ?></small>
        </nav>
    </header>
    <main>
        <div class="text-center">
            <h1>Datos estadísticos en el año  <i><?php echo e($y); ?></i></h1>
        </div>   
        <p>En el presente reporte se observan los datos generados al año y por cada mes de los boletines informativos, eventos institucionales y las tareas creadas por los usuarios</p>   
        <div class="table-title">
            <h3>Datos tabla</h3>
        </div>
        <table class="table-fill">
            <thead>
                <tr>
                    <th class="text-center" colspan="1">&nbsp;</th>
                    <th class="text-center">Noticias</th>
                    <th class="text-center">Eventos</th>
                    <th class="text-center">Tareas</th>
                </tr>
            </thead>
            <tbody class="table-hover">
                <tr>
                    <td class="text-center">Anual <small> <?php echo e($y); ?> </small></td>  
                    <td class="text-center"><?php echo e($postY); ?></td>  
                    <td class="text-center"><?php echo e($eventY); ?></td>    
                    <td class="text-center"><?php echo e($tasksY); ?></td>
                </tr>
                <tr>
                    <td class="text-center">Mes de <small><?php echo e($m); ?></small></td>
                    <td class="text-center"><?php echo e($postM); ?></td>  
                    <td class="text-center"><?php echo e($eventM); ?></td>    
                    <td class="text-center"><?php echo e($tasksM); ?></td>
                </tr>
            </tbody>
        </table>
    </main>
    
    </body>
</html>
<?php /**PATH /var/www/html/intranet2/resources/views/admin/reports/report.blade.php ENDPATH**/ ?>