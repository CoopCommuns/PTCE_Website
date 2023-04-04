<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="../CSS/select2.min.css" rel="stylesheet" media="all">
    <link href="../CSS/daterangepicker.css" rel="stylesheet" media="all">
    <link href="../CSS/main.css" rel="stylesheet" media="all">
</head>
<body>


<div class="page-wrapper bg-gra-03 p-t-45 p-b-50 " style="background-image: url('../images/background_form.jpg');">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">S'inscrire</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="inserer.php">
                            <div class="form-row ">
                                <div class="name">Name</div>
                                <div class="value">
                                     <div class="input-group">
                                        <input class="input--style-5" type="text" name="nom"  required>
    
                                     </div>
                                </div>
                            </div>
                        

                        <div class="form-row ">
                            <div class="name">Prénom</div>
                            <div class="value">
                                 <div class="input-group">
                                    <input class="input--style-5" type="text" name="prenom" required>

                                 </div>
                            </div>
                        </div>
                        
                        <div class="form-row ">
                            <div class="name">Téléphone</div>
                            <div class="value">
                                 <div class="input-group">
                                    <input class="input--style-5" type="tel" id="tel" name="tel" minlength="10" maxlength="10" required>
                                   
                                 </div>
                            </div>
                        </div>

                        <div class="form-row ">
                            <div class="name">Adresse</div>
                            <div class="value">
                                 <div class="input-group">
                                    <input class="input--style-5" type="text" id="adresse" name="adresse" required>
                                  
                                 </div>
                            </div>
                        </div>

                        <div class="form-row ">
                            <div class="name">Code postal</div>
                            <div class="value">
                                 <div class="input-group">
                                    <input class="input--style-5" type="text" id="code_postal" name="code_postal" required>
                                    
                                 </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row ">
                            <div class="name">Confirmation email</div>
                            <div class="value">
                                 <div class="input-group">
                                    <input class="input--style-5" type="text" id="email_confirmation" name="email_confirmation" required>
                                 </div>
                            </div>
                        </div>

                        <div class="form-row ">
                            <div class="name">Mot de passe</div>
                            <div class="value">
                                 <div class="input-group">
                                    <input class="input--style-5" type="password" id="mot_de_passe" name="mot_de_passe" required>
                                 </div>
                            </div>
                        </div>

                        <div class="form-row ">
                            <div class="name">Confirmation du mot de passe</div>
                            <div class="value">
                                 <div class="input-group">
                                    <input class="input--style-5" type="password" id="passwd_confirmation" name="passwd_confirmation" required>
                                 </div>
                            </div>
                        </div>

                        <div class="container-login100-form-btn m-t-15">
                            <button class="login100-form-btn" type="submit">
                                Inscription
                            </button>
                        </div>

                        <div>
                            
                      <span class="txt2">
                       Avez-vous dejà un compte?
                      </span>

                      <a href="connexion.php" class="txt2"> Se connecter</a>
				          	</div>
                    </form>
                </div>
            </div>
        </div>
    </div>




  <script src="../JS/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../JS/select2.min.js"></script>
    <script src="../JS/moment.min.js"></script>
    <script src="../JS/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../JS/global.js"></script>

</body>
</html>