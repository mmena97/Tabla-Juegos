<?php

    class crud{
        public function agregar($datos){
            $obj= new conectar();
            $conexion=$obj->conexion();

            if($datos[13]=="T/V"){
                $media= (($datos[3]+$datos[4]+$datos[5]+$datos[6]+$datos[7]+$datos[8]+$datos[9]+$datos[10]+$datos[11]+$datos[12]) / 10)+0.2;
            }else{
                $media= ($datos[3]+$datos[4]+$datos[5]+$datos[6]+$datos[7]+$datos[8]+$datos[9]+$datos[10]+$datos[11]+$datos[12]) / 10;
            }

            $sql="INSERT into t_juegos (TITULO,FECHA,NOTA,MEDIA,INO,GA,ME,HI,PE,MU,DU,GR,DI,SO,TR,DIFICULTAD)
                VALUES ('$datos[0]',
                '$datos[1]',
                $datos[2],
                $media,
                $datos[3],
                $datos[4],
                $datos[5],
                $datos[6],
                $datos[7],
                $datos[8],
                $datos[9],
                $datos[10],
                $datos[11],
                $datos[12],
                '$datos[13]',
                '$datos[14]')";

            return mysqli_query($conexion,$sql);
        }

        public function obtenDatos($idjuego){
            $obj= new conectar();
            $conexion=$obj->conexion();

            $sql="SELECT id_juego,TITULO,FECHA,NOTA,MEDIA,INO,GA,ME,HI,PE,MU,DU,GR,DI,SO,TR,DIFICULTAD
            FROM t_juegos
            WHERE id_juego='$idjuego'";

            $result=mysqli_query($conexion,$sql);
            $ver=mysqli_fetch_row($result);

            $datos=array(
                'id_juego' => $ver[0],
                'TITULO' => $ver[1],
                'FECHA' => $ver[2],
                'NOTA' => $ver[3],
                'MEDIA' => $ver[4],
                'INO' => $ver[5],
                'GA' => $ver[6],
                'ME' => $ver[7],
                'HI' => $ver[8],
                'PE' => $ver[9],
                'MU' => $ver[10],
                'DU' => $ver[11],
                'GR' => $ver[12],
                'DI' => $ver[13],
                'SO' => $ver[14],
                'TR' => $ver[15],
                'DIFICULTAD' => $ver[16]
            );

            return $datos;
        }

        public function actualizar($datos){
            $obj= new conectar();
            $conexion=$obj->conexion();

            if($datos[13]=="T/V"){
                $media= (($datos[3]+$datos[4]+$datos[5]+$datos[6]+$datos[7]+$datos[8]+$datos[9]+$datos[10]+$datos[11]+$datos[12]) / 10)+0.2;
            }else{
                $media= ($datos[3]+$datos[4]+$datos[5]+$datos[6]+$datos[7]+$datos[8]+$datos[9]+$datos[10]+$datos[11]+$datos[12]) / 10;
            }

            $sql="UPDATE t_juegos SET 
            TITULO ='$datos[0]',
            FECHA ='$datos[1]',
            NOTA ='$datos[2]',
            MEDIA ='$media',
            INO ='$datos[3]',
            GA ='$datos[4]',
            ME ='$datos[5]',
            HI ='$datos[6]',
            PE ='$datos[7]',
            MU ='$datos[8]',
            DU ='$datos[9]',
            GR ='$datos[10]',
            DI ='$datos[11]',
            SO ='$datos[12]',
            TR ='$datos[13]',
            DIFICULTAD  ='$datos[14]'
            WHERE id_juego='$datos[15]'";

            return mysqli_query($conexion,$sql);
        }

        public function eliminar($idjuego){
            $obj= new conectar();
            $conexion=$obj->conexion();

            $sql="DELETE FROM t_juegos WHERE id_juego='$idjuego'";
            return mysqli_query($conexion,$sql);
        }
    }

?>