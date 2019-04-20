<?php

class Conexao {

    private function abrir() {
        $local = "localhost";
        $banco = "sge";
        $usuario = "root";
        $senha = "usbw";
        $conn = mysqli_connect($local, $usuario, $senha, $banco);
        return $conn;
    }

    public function executar($sql) {
        $conn = $this->abrir();
        if ($conn != NULL) {
            $retorno = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $retorno;
        } else {
            return NULL;
        }
    }
    
     public function executarComRetornoId( $sql ){
        $conn = $this->abrir();
        if( $conn != NULL ){
            mysqli_query($conn, $sql);
            $id = mysqli_insert_id( $conn );
            mysqli_close( $conn );
            return $id;
        }  else {
            return NULL;
        }
    }

}
