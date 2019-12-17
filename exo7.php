<?php
$exercice = 'Exercice7';
include 'header.php';
$message1 = '';
$message2 = '';
?>
<h2 class = "text-primary text-center pt-4 pb-2 font-weight-bold">Exercice 7</h2>
<div class = "container">
<div class = "row mt-2 justify-content-center">
<div class = "col-md-5">
<?php
// Récupère et vérifie que les champs sont remplis
if (!empty($_POST['gender']) &&!empty($_POST['lastName']) &&!empty($_POST['firstName'])) {
$gender = $_POST['gender'];
$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
// Vérifie que le fichier a bien été téléchargé
if (isset($_FILES['userfile']) && $_FILES['userfile']['error'] == 0) {
// Récupére le nom du fichier et son extension dans les tableaux concernés (pour récupérer les clés et les valeurs d'un tableau, utiliser le var_dump)
$fileInfo = pathinfo($_FILES['userfile']['name']);
// Récupère le chemin et l'extension du fichier
$fileName = $fileInfo['basename'];
$message1 = 'Bienvenue ' . htmlspecialchars($gender) . ' ' . htmlspecialchars($firstName) . ' ' . htmlspecialchars($lastName) . ' !';
$message2 = 'Merci, votre fichier ' . htmlspecialchars($fileName) . ' a bien été pris en compte';
} else {
$message2 = 'Veuillez réessayer, l\'envoi de votre fichier n\'a pas abouti';
}
} else {
?>
<form action="ex7.php" method="post" enctype="multipart/form-data">
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