<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <title>Lista Videojuegos</title>
    <?php require_once "scripts.php" ?>
    <style>
        .container {
            min-width: 1600px !important;
        }
    </style>
</head>
<body>
    <div class='container'>
        <div class='row'>
            <div class='col-sm-12'>
                <div class='card text-center'>
                    <div class='card-header'>
                        LISTA VIDEOJUEGOS
                    </div>
                    </div class='card-body'>
                        <hr>
                        <span class='btn btn-primary' data-toggle="modal" data-target="#agregarjuego">
                            Añadir Juego <span class='fas fa-plus-circle'></span>
                        </span>
                        <hr>
                        <div>
                            <div id='tablaDatatable'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <div class="modal fade" id="agregarjuego" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Juego</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           <form id='frmnuevo'>
                <label>Titulo</label>
                <input type="text" class='form-control input-sm' id='titulo' name='titulo'>
                <div class="row">    
                    <div class="col">
                        <label>Fecha</label>
                        <input type="text" class='form-control input-sm' id='fecha' name='fecha'>
                    </div>
                    <div class="col">
                        <label>Nota</label>
                        <input type="text" class='form-control input-sm' id='nota' name='nota'>
                    </div>
                </div>  
                <div class="row">  
                    <div class="col">
                        <label>In</label>
                        <input type="text" class='form-control input-sm' id='in' name='in'>
                    </div>
                    <div class="col">
                        <label>Ga</label>
                        <input type="text" class='form-control input-sm' id='ga' name='ga'>
                    </div>
                    <div class="col">
                        <label>Me</label>
                        <input type="text" class='form-control input-sm' id='me' name='me'>
                    </div>
                    <div class="col">
                        <label>Hi</label>
                        <input type="text" class='form-control input-sm' id='hi' name='hi'>
                    </div>
                    <div class="col">
                        <label>Pe</label>
                        <input type="text" class='form-control input-sm' id='pe' name='pe'>
                    </div> 
                </div>
                <div class="row">  
                    <div class="col">
                        <label>Mu</label>
                        <input type="text" class='form-control input-sm' id='mu' name='mu'>
                    </div> 
                    <div class="col">
                        <label>Du</label>
                        <input type="text" class='form-control input-sm' id='du' name='du'>
                    </div> 
                    <div class="col">
                        <label>Gr</label>
                        <input type="text" class='form-control input-sm' id='gr' name='gr'>
                    </div> 
                    <div class="col">
                        <label>Di</label>
                        <input type="text" class='form-control input-sm' id='di' name='di'>
                    </div> 
                    <div class="col">
                        <label>So</label>
                        <input type="text" class='form-control input-sm' id='so' name='so'>
                    </div> 
                </div> 
                <div class="row">  
                    <div class="col">
                        <label>Traducción</label>
                        <input type="text" class='form-control input-sm' id='traduccion' name='traduccion'>
                    </div> 
                    <div class="col">
                        <label>Dificultad</label>
                        <input type="text" class='form-control input-sm' id='dificultad' name='dificultad'>
                    </div> 
                </div>
           </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" id='btnAgregar' class="btn btn-primary">Agregar</button>
        </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Actualizar Juego</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form id='frmnuevoU'>
                <input type="text" hidden="" id="idjuego" name="idjuego">
                <label>Titulo</label>
                <input type="text" class='form-control input-sm' id='tituloU' name='tituloU'>
                <div class="row">
                    <div class="col">
                        <label>Fecha</label>
                        <input type="text" class='form-control input-sm' id='fechaU' name='fechaU'>
                    </div>
                    <div class="col">
                        <label>Nota</label>
                        <input type="text" class='form-control input-sm' id='notaU' name='notaU'>
                    </div>    
                </div>  
                <div class="row">  
                    <div class="col">
                        <label>In</label>
                        <input type="text" class='form-control input-sm' id='inU' name='inU'>
                    </div>
                    <div class="col">
                        <label>Ga</label>
                        <input type="text" class='form-control input-sm' id='gaU' name='gaU'>
                    </div>
                    <div class="col">
                        <label>Me</label>
                        <input type="text" class='form-control input-sm' id='meU' name='meU'>
                    </div>
                    <div class="col">
                        <label>Hi</label>
                        <input type="text" class='form-control input-sm' id='hiU' name='hiU'>
                    </div>
                    <div class="col">
                        <label>Pe</label>
                        <input type="text" class='form-control input-sm' id='peU' name='peU'>
                    </div> 
                </div>
                <div class="row">  
                    <div class="col">
                        <label>Mu</label>
                        <input type="text" class='form-control input-sm' id='muU' name='muU'>
                    </div> 
                    <div class="col">
                        <label>Du</label>
                        <input type="text" class='form-control input-sm' id='duU' name='duU'>
                    </div> 
                    <div class="col">
                        <label>Gr</label>
                        <input type="text" class='form-control input-sm' id='grU' name='grU'>
                    </div> 
                    <div class="col">
                        <label>Di</label>
                        <input type="text" class='form-control input-sm' id='diU' name='diU'>
                    </div> 
                    <div class="col">
                        <label>So</label>
                        <input type="text" class='form-control input-sm' id='soU' name='soU'>
                    </div> 
                </div> 
                <div class="row">  
                    <div class="col">
                        <label>Traducción</label>
                        <input type="text" class='form-control input-sm' id='traduccionU' name='traduccionU'>
                    </div> 
                    <div class="col">
                        <label>Dificultad</label>
                        <input type="text" class='form-control input-sm' id='dificultadU' name='dificultadU'>
                    </div> 
                </div>
           </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
        </div>
        </div>
    </div>
    </div>

</body>
</html>

<script type='text/javascript'>
    $(document).ready(function(){
        $('#btnAgregar').click(function(){
            datos=$('#frmnuevo').serialize();

            $.ajax({
                type: "POST",
                data: datos,
                url: "procesos/agregar.php",
                success:function(r){
                    if(r==1){
                        $('#frmnuevo')[0].reset();
                        $('#tablaDatatable').load('tabla.php');
                        alertify.success("Agregado con exito");
                    }else{
                        alertify.error("Fallo al agregar");
                    }
                }
            });
        });

        $('#btnActualizar').click(function(){
            datos=$('#frmnuevoU').serialize();

            $.ajax({
                type: "POST",
                data: datos,
                url: "procesos/actualizar.php",
                success:function(r){
                    if(r==1){
                        $('#tablaDatatable').load('tabla.php');
                        alertify.success("Actualizar con exito");
                    }else{
                        alertify.error("Fallo al actualizar");
                    }
                }
            });
        });

    });
</script>

<script type='text/javascript'>
    $(document).ready(function(){
        $('#tablaDatatable').load('tabla.php');$('#tablaDatatable').load('tabla.php');
    });
</script>

<script type='text/javascript'>
    function agregaFrmActualizar(idjuego){
        $.ajax({
            type: "POST",
            data: "idjuego=" +idjuego,
            url: "procesos/obtenDatos.php",
            success:function(r){
                datos=jQuery.parseJSON(r);
                $('#idjuego').val(datos['id_juego']);
                $('#tituloU').val(datos['TITULO']);
                $('#fechaU').val(datos['FECHA']);
                $('#notaU').val(datos['NOTA']);
                $('#mediaU').val(datos['MEDIA']);
                $('#inU').val(datos['INO']);
                $('#gaU').val(datos['GA']);
                $('#meU').val(datos['ME']);
                $('#hiU').val(datos['HI']);
                $('#peU').val(datos['PE']);
                $('#muU').val(datos['MU']);
                $('#duU').val(datos['DU']);
                $('#grU').val(datos['GR']);
                $('#diU').val(datos['DI']);
                $('#soU').val(datos['SO']);
                $('#traduccionU').val(datos['TR']);
                $('#dificultadU').val(datos['DIFICULTAD']);
            }
        });
    }

    function eliminarDatos(idjuego){
        alertify.confirm('Eliminar Juego', '¿Seguro que desea eliminarlo?', function(){
            $.ajax({
            type: "POST",
            data: "idjuego=" +idjuego,
            url: "procesos/eliminar.php",
            success:function(r){
                if(r==1){
                    $('#tablaDatatable').load('tabla.php');
                    alertify.succes("Eliminado con exito!");
                }else{
                    alertify.error("Error al eliminar");
                }
                }
            });
        }
        , function(){
            
        });
    }
</script>