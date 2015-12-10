<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
        <style>
            *{
                /*border: 2px dashed red;*/
            }
            .tdTit{
                width: 160px;
            }
        </style>
    </head>
    <body class="container">
        <div class="row">
            <?php // include 'base/sql.php'; ?>
            <div class="col-md-12">
                <div class="col-md-5"></div>
                <form action="insertsql.php" method="POST">
                    <table class="table table-condensed col-md-3">
                        <thead>
                        <th colspan="2" class="text-center"><h3>Test</h3></th>                
                        </thead>
                        <tbody>
                            <tr>
                                <td class="tdTit">Id</td>
                                <td><input type="number" name="id"></td>
                            </tr>
                            <tr>
                                <td>Título</td>
                                <td><input type="text" name="titulo" size="100" placeholder="Título"></td>
                            </tr>
                            <tr>
                                <td>descripción</td>
                                <td><textarea name="descripcion" size="100" cols="100" rows="2"  placeholder="Descripción"></textarea></td>
                            </tr>
                            <tr>
                                <td>Tabla (URL)</td>
                                <td><input type="url" size="100" placeholder="url de tabla" name="tabla"></td>
                            </tr>
                            <tr>
                                <td>Icono (URL)</td>
                                <td><input type="url" size="100" placeholder="url de icono" name="icono"></td>
                            </tr>
                            <tr>
                                <td>Autor</td>
                                <td><input type="text" size="100" placeholder="Autor" name="autor"></td>
                            </tr>
                            <tr>
                                <td>Año</td>
                                <td><input type="number" maxlength="4" name="anio" placeholder="Año"></td>
                            </tr>
                            <tr>
                                <td>Número de preguntas</td>
                                <td><input type="number" name="num_preguntas"></td>
                            </tr>
                            <tr>
                                <td>Última actualización</td>
                                <td><input type="date"  name="ultima_actualiza" placeholder="Última actualización"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center"><input type="submit" value="Guardar Test" class="btn btn-large btn-info"></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-12">
                <?php
                require 'conexion.php';
                $sqlconsulta = "SELECT * FROM test";
                
                if ($conn->query($sqltconsulta) === TRUE) {
                    echo '<table>';
                    echo '    <tr>';
                    echo '        <td>' . print_r($sqlconsulta) . '</td>';
                    echo '    </tr>';
                    echo '</table>';
                } else {
                    echo "Error: " . $sqlconsulta . "<br>" . $conn->error;
                }
                ?>
            </div>
        </div>
    </body>
</html>
