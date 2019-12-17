<?php
$exercice = 'Exercice1';
include 'header.php';
?>
<div class="container">
    <p class="display-4">Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.</p>
    <div class="row justify-content-center">
        <div class="col-md-5 bg-secondary">
            <form action="../user.php" method="POST">
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