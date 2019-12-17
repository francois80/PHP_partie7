<?php
$exercice = 'Exercice5';
include 'header.php';
$lastname = '';
$firstname = '';
$civility = '';

if(isset($_GET['lastname'])){
    $lastname = htmlspecialchars($_GET['lastname']);
}

if(isset($_GET['firstname'])){
    $firstname = htmlspecialchars($_GET['firstname']);
}

if(isset($_GET['civility'])){
    $civility = htmlspecialchars($_GET['civility']);
}
?>
<div class="container">
    <p class="display-5">
        Créer un formulaire sur la page index.php avec :<br>
        Une liste déroulante pour la civilité (Mr ou Mme)<br>
        Un champ texte pour le nom<br>
        Un champ texte pour le prénom<br>
        Ce formulaire doit rediriger vers la page exo5.php.<br>
        Vous avez le choix de la méthode.    
    </p>
    <div class="row justify-content-center">
        <div class="col-md-5 bg-secondary">
            <form action="#" method="GET">
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
                    <input class="btn btn-primary" type="submit" value="Envoyez" name="submit" />
                </fieldset>
            </form>
        </div>
    </div>
</div>
<div>
    <?php 
    if($lastname != "" || $firstname != "" || $civility != ""){ ?>
    <p>select civilité = <?= $civility ?></p>
    <p>input nom = <?= $lastname ?></p>
    <p>input prénom = <?= $firstname ?></p>   
    <?php
    }
    ?>
</div>
</body>
</html> 