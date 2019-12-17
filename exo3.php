<?php
$exercice = 'Exercice3';
include 'header.php';
?>
<div class="container">
    <p class="display-4">Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.</p>
    <div class="row justify-content-center">
        <div class="col-md-5 bg-secondary">
            <form action="../user.php" method="GET">
                <fieldset>
                    <legend class="text-white">Remplissez le formulaire svp</legend>
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
</body>
</html>