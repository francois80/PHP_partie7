<?php
$exercice = 'Exercice8';
include 'header.php';
?>
<h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 8</h2>
<h3 class="text-center pb-5"></h3>
<div class="container">
    <div class="row mt-2 justify-content-center">
        <div class="col-md-5">
            <?php
            $message1 = '';
            $message2 = '';
            $displayForm = true; // Permet de dire si je dois afficher mon formulaire
            // Récupère et vérifie que les champs sont remplis
            if (!empty($_POST['gender']) && !empty($_POST['lastName']) && !empty($_POST['firstName'])) {
                // Vérifie que le fichier a bien été téléchargé
                if (isset($_FILES['userfile']) && $_FILES['userfile']['error'] == 0) {
                    // Récupére le nom du fichier et son extension dans les tableaux concernés (pour récupérer les clés et les valeurs d'un tableau, utiliser le var_dump)
                    $fileInfo = pathinfo($_FILES['userfile']['name']);
                    // Récupère le chemin et l'extension du fichier
                    $fileName = $fileInfo['basename'];
                    if (strtolower($fileInfo['extension']) == 'pdf') { //"strlower" permet de convertir tous les caractères en minuscule
                        $gender = $_POST['gender'];
                        $lastName = $_POST['lastName'];
                        $firstName = $_POST['firstName'];
                        $message1 = 'Bienvenue ' . htmlspecialchars($gender) . ' ' . htmlspecialchars($firstName) . ' ' . htmlspecialchars($lastName) . ' !';
                        $message2 = 'Merci, votre fichier ' . htmlspecialchars($fileName) . ' a bien été pris en compte';
                        $displayForm = false; // Cache le formulaire si la condition est remplie
                    }
                } else {
                    $message2 = 'Veuillez réessayer, l\'envoi de votre fichier n\'a pas abouti';
                }
            }
            if ($displayForm) { // Si le displayForm est toujours "true" affiche le formulaire 
                ?>
                <p>Veuillez entrer vos informations</p>
                <form action="ex8.php" method="post" enctype="multipart/form-data">
                    <div class="form-group"> 
                        <label for='gender'>Civilité : </label>
                        <select name="gender">
                            <option value="Madame">Madame</option>
                            <option value="Monsieur">Monsieur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="lastName" for="lastName">Nom : </label>
                        <input class="form-control" type="text" name="lastName" id="lastName" />
                    </div>
                    <div class="form-group">
                        <label class="firstName" for="firstName">Prénom : </label>
                        <input class="form-control" type="text" name="firstName" id="firstName" />
                    </div>
                    <div class="form-group">
                        <label class="file" for="userfile">Votre fichier : </label>
                        <input class="form-control" type="file" name="userfile" id="userfile" />
                    </div>
                    <div class="text-center pt-2">
                        <button class="btn btn-primary mt-3" type="submit" name="submit" id="button">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php }
?>
<p><?= $message1 ?> <br/> <?= $message2 ?></p>
</body>
</html> 