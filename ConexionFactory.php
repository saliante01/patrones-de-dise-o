<?php

class ConexionFactory {
    public function crearConexion(): ConexionBD {
        return ConexionBD::obtenerInstancia();
    }
}
?>
