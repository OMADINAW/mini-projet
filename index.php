<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <link rel="stylesheet" type="text/css" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
  </head>
  <body>

  <style>
    body{
        background-color: #EFEFEF;
    }
    .circle {
      width: 700px;
      height: 500px;
      border-radius: 25%;
      background-color:#FFF8DC ;
      position: relative;
      left: 300px;
      top: 80px;
      border: 3px solid black;
      
    }
    .h1{
      position: relative;
      left: 300px;
      top: 50px;
    }
    .mb-1{
        position: relative;
        top: 80px;
        left: 200px;
    }
    .mb-2{
        position: relative;
        top: 90px;
        left: 200px;
    }
    .mb-3{
        position: relative;
        top: 100px;
        left: 200px;

    }
    .gap-2{
        position: relative;
        top: 110px;
        left: 200px;
    }


  </style>




<div class="circle"> <h1 class="h1">Formulaire</h1>

    <form action="enregistrement.php" method="post">
    <div class="mb-1">
  <label for="nom" class="form-label">Nom</label>
  <input type="text" class="form-control" id="nom" name="nom" required>
</div>

<div class="mb-2">
  <label for="prenom" class="form-label">Prénom</label>
  <input type="text" class="form-control" id="prenom" name="prenom" required>
</div>

<div class="mb-3">
  <label for="date_de_naissance" class="form-label">Date de naissance</label>
  <input type="date" class="form-control" id="date" name="date_naissance" required>
</div>

<div class=" gap-2">
  <input class="btn btn-primary" type="submit" value="Enregistrer">
</div>
</div>
      
    </form>
  </body>
</html>