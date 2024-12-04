<?php
session_start();
require_once("conexao.php");
?>

<label for="prod">Produto</label>
<input type="text" id="prod" name="prod" require>

<label for="marca"></label>
<input type="text" id="marca" name="marca" require>

<label for="val">valor</label>
<input type="number" id="val" name="val">

<label for="data">Data</label>
<input type="date" id="data" name="data">
