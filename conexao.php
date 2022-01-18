<?php

$servidor = "localhost";
$usuario  = "root";
$senha    = "";
$bd       = "bdexercicio";

$con = mysqli_connect($servidor,$usuario,$senha,$bd);

if(!$con){
    echo "Não conectou ao BD";
}