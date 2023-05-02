<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini_projet</title>
    
    <link rel="stylesheet" href="style/style.css">
    
</head>
<body>
    <h1>FORMULAIRE D'INSCRIPTION</h1>
    <form action="" method="post">
        
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NOM</label>
    <input type="nom" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">PRENOM</label>
    <input type="prenom" name="prenom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">DATE NAISSANCE</label>
    <input type="date" name="date_naissance" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  <button type="submit" name="enregistrer" class="btn btn-primary">ENREGISTRER</button>
</form>



<script src="script/jquery-3.6.4.js"></script>
<script src="script/query.js"></script>
   
</body>
</html>