<?php
include 'Header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/87f52fdadc.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-md-6 d-flex flex-column align-items-center justify-content-center ">

        <div class="card mb-3 ">

          <div class="card-body ">

            <div class="pt-4 pb-2">
              <h5 class="card-title text-center pb-0 fs-4"> <img src="../image/R.png" width="70px">  Créer un compte</h5>
              
            </div>

            <form class="row g-3 needs-validation py-5  " novalidate>
            
            <div class="row ">
              <div class="col-4">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" name="prenom" class="form-control" id="prenom" required>
              </div>

              <div class="col-4">
                  <label for="nom" class="form-label">Nom</label>
                  <input type="text" name="name" class="form-control" id="nom" required>
                  
                </div>

                <div class="col-4">
                  <label for="ville" class="form-label">Tél</label>
                  <input type="tel" name="tel" class="form-control" id="tel" required>
                  
                </div>

                </div>
                 
                
            <div class="row">
                

                <div class="col">
                  <label for="ville" class="form-label">Ville</label>
                  <input type="text" name="ville" class="form-control" id="ville" required>
                </div>

                <div class="col">
                  <label for="codep" class="form-label">Code Postale</label>
                  <input type="text" name="codep" class="form-control" id="codep" required>
                 </div>

            </div> 
            <di class="row">
                <div class="form-check col">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Entreprise
                        </label>
                </div> 
                <div class="form-check col">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Admin
                        </label>
                </div>
                </di>
            <div class="row">
            <div class="col">
                  <label for="yourUsername" class="form-label">Email</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="username" class="form-control" id="yourUsername" required>
                    
                  </div>
                </div>

              <div class="col">
                <label for="yourEmail" class="form-label">Confirmation Email</label>
                <input type="email" name="email" class="form-control" id="yourEmail" required>
                
              </div>
            </div>

              

              <div class="col-12">
                <label for="yourPassword" class="form-label">Mot de Pass</label>
                <input type="password" name="password" class="form-control" id="yourPassword" required>
              
              </div>

              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                  <label class="form-check-label" for="acceptTerms">En cochant cette case, je confirme avoir lu les<a href="#"> Conditions Générales </a>  du site et les accèpte </label>
                  
                </div>
              </div>
              <div class="col-2 text-center">
                <button class="btn btn-primary w-100" type="submit">Inscription</button>
              </div>
              
            </form>
            <div class="col-12 " style="margin-left:75%">
                <p class="small mb-0 text-right">Avez dejà un compte? <a href="../PHP/Connexion.php">Connexion</a></p>
              </div>
          </div>
        </div>

        
      </div>
    </div>
  </div>

</section>

</div> 

<!-- Bootstrap JS bundle →
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->


<?php
include 'Footer.php';
?>
</body>
</html>