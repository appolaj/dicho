<!DOCTYPE html>
<?php 
session_start();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>login page </title>
</head>
<body  class="blockquote text-center" style="background-color:#93C5F3">
<nav class="navbar navbar-light" style="background-color:#379BF9;margin:auto;">
<span class="navbar-text">
   <h2 style="text-transform:uppercase; color:white;"> welcome to dicho</h2>
  </span>
</nav>

<div class="container" >
<div class="row" >
<div class="col-md-6 col-md-offset-3">
 <div class="panel panel-login" style="background-color:#93C5F3">

<div class="panel-body" style="background-color:#93C5F3" >
 <div class="row">
    <div class="col-lg-12">
     <form id="login-form" action="dicho.php" method="post"  style="display: block; ">
     <h1 style="text-align: center;"><u> Guess the number</u></h1>
      <div class="form-group">
       <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="<?php if(isset($_SESSION['username'])){echo $_SESSION['username'];}?>">
        </div>
         <!-- des boutons radio pour choisir le niveau souhaité-->
                                
         
 <div class="form-group">
<div class="row">
<h1 style="text-align: center;"><u> choose level</u></h1>
<div class="col-sm-6 col-sm-offset-3">

<div class="radio">
<label><input type="radio" name="difficulty" id="easy" value="easy" <?php  if(isset($_SESSION['difficulty'])&& $_SESSION['difficulty']=='easy'){echo 'checked';}  ?> >Easy (1-10) with 5 guesses</label>
</div>
<div class="radio">
<label><input type="radio" name="difficulty" id="medium" value="medium" <?php if(isset($_SESSION['difficulty'])&& $_SESSION['difficulty']=='medium'){echo 'checked';} ?> >Medium (1-50) with 10 guesses</label>
</div>
<div class="radio">
<label><input type="radio" name="difficulty" id="hard" value="hard" <?php if(isset($_SESSION['difficulty'])&& $_SESSION['difficulty']=='hard'){echo 'checked';} ?> >Hard (1-100) with 20 guesses</label>
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn btn-outline-success" value="Let's Begin">
</div>
</div>
</div>

</form>


    
</body>
</html>