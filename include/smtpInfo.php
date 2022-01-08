<?php
    function getEmail(){
        return $email = getenv('EMAIL');
    }

    function getPassword(){
        return $password= getenv('PASSWORD');
    }

    function getPort(){
        return $port = getenv('PORT');
    }
?>