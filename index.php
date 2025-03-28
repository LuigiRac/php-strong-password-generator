<?php
require_once "./function.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Password-generator</title>
</head>
<body>

<h3>GENERA PASSWORD</h3>
<form  class="form-inline d-flex">
  <div class="form-group mx-sm-3 mb-2">
    <input class="form-control" type="" id="password" name="password" min="5" max="20"  placeholder="Password">
    

  </div>
  <div class="container">
  <button class="btn btn-primary mb-2">Genera password</button>
  </div>

  
</form>



<?php
if($password!= "") {

?>
<div class="mx-sm-3 mb-2">
    <h3>La tua password è: </h3>
   <div class="form-control min-width-auto"> <?php echo $password ?></div> 
</div>

<?php

}
?>
</body>
</html>