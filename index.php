<!DOCTYPE html>
<html lang="en">
<head>
  <title>Barcoder Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="site description">
  <meta name="keywords" content="<site keywords">
  <meta name="author" content="MeeDO51">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="style.css">
<script>
function myFunction() {
    window.open("https://github.com/meedo51wd/Responsive-forms.github.io");
}
</script>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-xl bg-default">
      <h2>Barcoder Project</h2>

      <form action="index.php" method="post" class="form-signin">
        <h2 class="form-signin-heading">Create Your Barcode</h2>
        <label for="bctext" class="sr-only">Barcode Text</label>
        <input type="text" id="bctext" name="bctext" class="form-control" placeholder="Barcode Text.." required autofocus>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Create</button>
      </form>
<?php
if(isset($_POST['submit'])){
$bctext = $_POST['bctext'];
if($bctext == ''){
  echo'
  <div class="alert alert-warning">
    <strong>Warning!</strong> You did not enter data.<br>
    <meta http-equiv="refresh" content="5; url=addcat.php">
  </div>';
}else{
  echo'
  <div class="panel-group">
  <div class="panel panel-success">
    <div class="panel-heading" style="background-color: #00FF00;">Your Barcode:</div>
    <div class="panel-body"><div class="bctext">'.$bctext.'</div></div>
  </div>
  </div>';
}
}
?>
    </div>
  </div>
</div>

<!-- This project was created by MeeDO51 -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="ajax/jquery/jquery.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>