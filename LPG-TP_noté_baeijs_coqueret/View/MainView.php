<?php
session_start();
echo "Id session = ".session_id()."<br/>";
?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <head>
        <title>Index</title>
        <meta charset="UTF-8">
    </head>
    <body style="width: 90%; margin-left: auto; margin-right: auto; margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Renseigner une nouvelle structure</h1>

                    <form method="post" action="index.php?action=saveStructure">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" id="entreprise" value="entreprise">
                            <label class="form-check-label" for="entreprise">Entreprise</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" id="association" value="association">
                            <label class="form-check-label" for="association">Association</label>
                        </div>
                        <div class="form-group">
                            <label for="adresse">Adresse </label>
                            <input class="form-control" type="text" name="adresse" required>
                        </div>
                        <div class="form-group">
                            <label for="code_postal">Code Postal </label>
                            <input class="form-control" type="number" name="code_postal" required>
                        </div>
                        <div class="form-group">
                            <label for="ville">Ville </label>
                            <input class="form-control" type="text" name="ville" required>
                        </div>
                        <div class="form-group">
                            <label for="secteurs">Secteur(s) d'activité </label>
                            <input class="form-control" type="text" name="secteurs" required>
                            <small id="secteursHelp" class="form-text text-muted">Renseignez plusieurs secteurs en les séparant par ";"</small>
                        </div>
                        <div class="form-group">
                            <label for="nbAssocies">Nombre d'associés </label>
                            <input class="form-control" type="number" name="nbAssocies">
                            <small id="associesHelp" class="form-text text-muted">Laissez vide si "Association"</small>
                        </div>
                        <div class="form-group">
                            <label for="nbDonateurs">Nombre de donateurs </label>
                            <input class="form-control" type="number" name="nbDonateurs">
                            <small id="donateursHelp" class="form-text text-muted">Laissez vide si "Entreprise"</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Enregistrer la structure</button>
                    </form>
                </div>
                <div class="col">
                    <h1>Renseigner un nouveau secteur</h1>
                    <form method="post" action="index.php?action=saveSecteurs">
                        <div class="form-group">
                            <label for="libelle">Libelle </label>
                            <input class="form-control" type="text" name="libelle">
                            <small id="libelleHelp" class="form-text text-muted">Nom du secteur d'activité</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Enregistrer le secteur</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>