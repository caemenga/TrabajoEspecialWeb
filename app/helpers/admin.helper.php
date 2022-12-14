<?php
class AdminHelper {
    public function __construct(){
        
    }

     /**
     * Verifica que el user este logueado y si no lo está
     * lo redirige al login.
     */
    public function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . 'log-in-form');
            die();
        }
    } 

    public function getUser(){
        return $_SESSION;
    }
}
