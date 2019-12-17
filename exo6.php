<?php
$exercice = 'Exercice6';
include 'header.php';
$lastname = '';
$firstname = '';
$civility = '';
$result = '';
$afficheForm = 'block';
$message = '';

if(empty($_GET['civility']) || empty($_GET['lastname']) || empty($_GET['firstname'])){
    $message = "Veuillez remplir tous les champs du formulaire";
}
else {
    if(!empty($_GET['lastname'])){
        $lastname = htmlspecialchars($_GET['lastname']);
    }

    if(!empty($_GET['firstname'])){
        $firstname = htmlspecialchars($_GET['firstname']);
    }

    if(!empty($_GET['civility'])){
        $civility = htmlspecialchars($_GET['civility']);
    }
    $afficheForm = 'none'; 
}
?>
<div class="container">
    <p class="display-5">
        Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas 
        être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.<br>
        Utiliser qu'une seule page.    
    </p>
    <div class="row justify-content-center">
        <div class="col-md-5 bg-secondary">
            <form id="form1" action="#" method="GET" style="display:<?= $afficheForm ?>">
                <fieldset>
                    <legend class="text-white">Remplissez le formulaire svp</legend>
                    <div class="form-group">
                        <label for="civility" class="text-white">Civilité</label>
                        <select id="civility" name="civility">
                            <option value="" selected="selected">Sélectionnez</option>
                            <option value="Monsieur">Monsieur</option>
                            <option value="Madame">Madame</option>
                            <option value="Mademoiselle">Mademoiselle</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="text-white">Nom</label>
                        <input class="form-control" type="text" id="lastname" name="lastname" placeholder="DUPONT" />
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="text-white">Prénom</label>
                        <input class="form-control" type="text" id="firstname" name="firstname" placeholder="Jean" />
                    </div>
                    <input class="btn btn-primary" type="submit" value="Envoyez" />
                </fieldset>
            </form>
        </div>
    </div>
    <?php
    if(empty($_GET['civility']) || empty($_GET['lastname']) || empty($_GET['firstname'])){ ?>
        <div class="row justify-content-center">
            <div class="col-md-5 bg-secondary text-white">
                <?= $message ?>
            </div>
     <?php 
    } ?>
    </div>
</div>
<div>
    <?php
    if(!empty($_GET['civility']) || !empty($_GET['lastname']) || !empty($_GET['firstname'])){ ?>
        <p>select Civilité = <?= $civility ?></p>
        <p>input nom = <?= $lastname ?></p> 
        <p>$input prénom = <?= $firstname ?></p>
    <?php
    } ?>
</div>
</body>
</html> 