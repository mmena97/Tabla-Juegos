<?php
    require_once 'clases/conexion.php';
    $obj= new conectar();
    $conexion=$obj->conexion();

    $sql="SELECT id_juego,TITULO,FECHA,NOTA,MEDIA,INO,GA,ME,HI,PE,MU,DU,GR,DI,SO,TR,DIFICULTAD
          FROM t_juegos";

    $result=mysqli_query($conexion,$sql);
?>

<div>
    <table class='table table-hover table-condensed table-bordered' style="width:100%"id='iddatable'>
        <thead>
            <tr>
                <td>Titulo</td>
                <td style="background-color:#65DEFF">Fecha Lanzamiento</td>
                <td style="background-color:#EB7DDF">Nota</td>
                <td style="background-color:#FFB965">Media</td>
                <td style="background-color:#F55559">IN</td>
                <td style="background-color:#F55559">GA</td>
                <td style="background-color:#F55559">ME</td>
                <td style="background-color:#F55559">HI</td>
                <td style="background-color:#F55559">PE</td>
                <td style="background-color:#F55559">MU</td>
                <td style="background-color:#F55559">DU</td>
                <td style="background-color:#F55559">GR</td>
                <td style="background-color:#F55559">DI</td>
                <td style="background-color:#F55559">SO</td>
                <td style="background-color:#4BE344">TR</td>
                <td style="background-color:#9B63FE">DIF</td>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>Titulo</td>
                <td style="background-color:#65DEFF">Fecha</td>
                <td style="background-color:#EB7DDF">Nota</td>
                <td style="background-color:#FFB965">Media</td>
                <td style="background-color:#F55559">IN</td>
                <td style="background-color:#F55559">GA</td>
                <td style="background-color:#F55559">ME</td>
                <td style="background-color:#F55559">HI</td>
                <td style="background-color:#F55559">PE</td>
                <td style="background-color:#F55559">MU</td>
                <td style="background-color:#F55559">DU</td>
                <td style="background-color:#F55559">GR</td>
                <td style="background-color:#F55559">DI</td>
                <td style="background-color:#F55559">SO</td>
                <td style="background-color:#4BE344">TR</td>
                <td style="background-color:#9B63FE">DIF</td>
                <td></td>
                <td></td>
            </tr>
        </tfoot>
        <tbody>
            <?php
                while($mostrar=mysqli_fetch_row($result)){

            ?>
            <tr>
                <td><?php echo $mostrar[1] ?></td>
                <td><?php echo $mostrar[2] ?></td>
                <td><?php echo $mostrar[3] ?></td>
                <td><?php echo $mostrar[4] ?></td>
                <td><?php echo $mostrar[5] ?></td>
                <td><?php echo $mostrar[6] ?></td>
                <td><?php echo $mostrar[7] ?></td>
                <td><?php echo $mostrar[8] ?></td>
                <td><?php echo $mostrar[9] ?></td>
                <td><?php echo $mostrar[10] ?></td>
                <td><?php echo $mostrar[11] ?></td>
                <td><?php echo $mostrar[12] ?></td>
                <td><?php echo $mostrar[13] ?></td>
                <td><?php echo $mostrar[14] ?></td>
                <td><?php echo $mostrar[15] ?></td>
                <td><?php echo $mostrar[16] ?></td>
                <td>
                    <span class='btn btn-warning btn-xs' data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
                        <span class='fas fa-edit'></span>
                    </span>
                </td>
                <td>
                    <span class='btn btn-danger btn-xs' onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
                        <span class='fas fa-trash-alt'></span>
                    </span>
                </td>
            </tr>
            <?php
               }
            ?>
        </tbody>
    </table>
</div>


<script type='text/javascript'>
    $(document).ready(function() {
        $('#iddatable').DataTable( {
            "paging":   false,
        } );
    } );
</script>