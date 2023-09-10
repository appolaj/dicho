<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<fieldset>
    <legend>conversion de devise </legend>
    <form action="" method="">
<table>
<tr>
    <td>montant en dhs</td>
    <td><input type="text" name="dhs"></td>
</tr>
<tr>
    <td>Devises:</td>
    <td><input type="checkbox" name="devises[]" value="euro">euro</td>
    <td><input type="checkbox" name="devises[]" value="dollar">dollar</td>
    <td><input type="checkbox" name="devises[]" value="livre">livre</td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" name="convertir" >convertir</td>
    <td><input type="reset" name="annuler" >annuler</td>
</tr>
</table>
</form>
</fieldset>    


</body>
</html>