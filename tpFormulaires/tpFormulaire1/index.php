<?php 

require_once "controller_index.php"

?>
<!doctype html>
<html lang="fr">

<head>
    <title>Formulaire 1 tp</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <form action="index.php" method="POST" id="formContact" novalidate>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <h1>Formulaire d'inscription espace apprenant</h1>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" class="form-control" placeholder="ex: Dupont"
                            value="<?= isset($_POST['nom']) ? htmlspecialchars($_POST['nom'])  : ''?>" required />
                        <div class="text-danger">
                            <span><?= isset($errorMessage['nom']) ? $errorMessage['nom'] : '' ?></span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example2">Prénom</label>
                        <input type="text" id="form6Example2" name="prenom" class="form-control"
                            placeholder="ex: Martin" value="<?= isset($_POST['prenom']) ? $_POST['prenom'] : ''?>"
                            required />
                        <div class="text-danger">
                            <span><?= isset($errorMessage['prenom']) ? $errorMessage['prenom'] : '' ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dateDeNaissance">
                <label for="birthday">Date de naissance :</label>
                <input type="date" id="birthday" name="birthday" placeholder="25/04/1990"
                    value="<?= isset($_POST['bithday']) ? $_POST['birthday'] : ''?>" required>
                <div class="text-danger">
                    <span><?= isset($errorMessage['birthday']) ? $errorMessage['birthday'] : '' ?></span>
                </div>
            </div>
            <!-- selecteur de pays -->
            <label for="cityBirth">Pays de naissance : </label>
            <select name="cityBirth" id="cityBirth" class="paysDeNaissance">
                <option selected disabled>Veuillez selectionner un pays</option>
                <?php 
                foreach($cityBirthArray as $key => $value){?>
                    <option value="<?= $key ?>"<?= isset($_POST['cityBirth']) && $_POST['cityBirth'] == $key ? "selected" : "" ?>><?= $value ?></option>
                <?php } ?>
            </select>
            <p class="text-danger"><?= isset($errorMessage['cityBirth']) ? $errorMessage['cityBirth'] : '' ?></p>

            <!-- Adresse postale-->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example3">Adresse</label>
                <input type="text" id="form6Example3" name="adress" class="form-control" placeholder="35 rue des gens"
                    value="<?= isset($_POST['adress']) ? $_POST['adress'] : ''?>" required />
                <div class="text-danger">
                    <span><?= isset($errorMessage['adress']) ? $errorMessage['adress'] : '' ?></span>
                </div>
            </div>

            <!-- code postale -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="zipCode">Code postale</label>
                        <input type="text" id="zipCode" name="zipCode" class="form-control" placeholder="75001"
                            value="<?= isset($_POST['zipCode']) ? $_POST['zipCode'] : ''?>" required />
                        <div class="text-danger">
                            <span><?= isset($errorMessage['zipCode']) ? $errorMessage['zipCode'] : '' ?></span>
                        </div>
                    </div>
                </div>
                <!-- ville -->
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="city">Ville</label>
                        <input type="text" id="city" name="city" class="form-control" placeholder="Paris"
                            value="<?= isset($_POST['city']) ? $_POST['city'] : ''?>" />
                        <div class="text-danger">
                            <span><?= isset($errorMessage['city']) ? $errorMessage['city'] : '' ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Email -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="adressMail">Addresse Email</label>
                        <input type="email" id="adressMail" name="adressMail" class="form-control"
                            placeholder="abcgde@gmail.com"
                            value="<?= isset($errorMessage['adressMail']) ? $errorMessage['adressMail'] : '' ?>"
                            required />
                        <div class="text-danger">
                            <span><?= isset($errorMessage['adressMail']) ? $errorMessage['adressMail'] : '' ?></span>
                        </div>
                    </div>
                </div>

                <!-- Numero de telephone -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="phoneNumber">Télèphone</label>
                    <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="0212345678"
                        value="<?= isset($errorMessage['phoneNumber']) ? $errorMessage['phoneNumber'] : '' ?>"
                        required />
                    <div class="text-danger">
                        <span><?= isset($errorMessage['phoneNumber']) ? $errorMessage['phoneNumber'] : '' ?></span>
                    </div>
                </div>
            </div>

            <!-- liste déroulante des diplômes -->
            <label for="diplome">Vos dipôme</label>
            <select name="diplome" id="selectedQualification">
                <option>Diplôme</option>
                <option>Sans diplôme</option>
                <option>Bac</option>
                <option>Bac+2</option>
                <option>Bac+3</option>
                <option>ou Supérieur</option>
                <option>autres</option>
            </select>

            <!-- Numero de pole emploi-->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline mb-3">
                        <label class="form-label" for="poleEmploiNumber">Muméro identifiant pôle emploi</label>
                        <input type="text" id="poleEmploiNumber" name="poleEmploiNumber" class="form-control"
                            placeholder="3300984HJ"
                            value="<?= isset($errorMessage['poleEmploiNumber']) ? $errorMessage['poleEmploiNumber'] : '' ?>" />
                        <div class="text-danger">
                            <span><?= isset($errorMessage['poleEmploiNumber']) ? $errorMessage['poleEmploiNumber'] : '' ?></span>
                        </div>
                    </div>
                </div>

                <!-- Liens codeacademy -->
                <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="codeAcademy">Lien codeAcademy</label>
                    <input type="url" id="codeAcademy" name="codeAcademy" class="form-control"
                        placeholder="https://wwww.monadresseurl.houle"
                        value="<?= isset($errorMessage['codeAcademy']) ? $errorMessage['codeAcademy'] : '' ?>" />
                    <div class="text-danger">
                        <span><?= isset($errorMessage['codeAcademy']) ? $errorMessage['codeAcademy'] : '' ?></span>
                    </div>
                </div>
                </div>
            </div>

            <!-- nombre de badge -->
            <label for="nomberBadge">Numéro de badge :</label>
            <select name="nomberBadge" id="numberBadge">
                <p>Nombre de badge</p>
                <option>Entre 0 et 15</option>
                <option>15 et 30</option>
                <option>30 et 45</option>
                <option>45 et 60</option>
                <option>60 et 75</option>
                <option>75 et 90</option>
                <option>90 et 105</option>
                <option>105 et 120</option>
                <option>plus...</option>
            </select>

            <!--Si vous étiez un super héros/une super héroîne, qui seriez-vous et pourquoi?-->
            <div class="form-outline mb-4">
                <label class="form-label" for="heroinQuestion">Si vous étiez un super héros/une super héroîne, qui
                    seriez-vous et pourquoi?</label>
                <textarea class="form-control" name="heroinQuestion" id="heroinQuestion" rows="4"
                    placeholder="Ecrivez ici"><?= isset($_POST['heroinQuestion']) ? $_POST['heroinQuestion'] : '' ?></textarea>
                <div class="text-danger">
                    <span><?= isset($errorMessage['heroinQuestion']) ? $errorMessage['heroinQuestion'] : '' ?></span>
                </div>
            </div>

            <!-- Racontez-nous un de vos "hacks"(pas forcément technique ou informatique) -->
            <div class="form-outline mb-4">
                <label class="form-label" for="hacksQuestion">Racontez-nous un de vos "hacks"(pas forcément technique ou
                    informatique)</label>
                <textarea class="form-control" name="hacksQuestion" id="hacksQuestion" rows="4"
                    placeholder="Ecrivez ici"><?= isset($_POST['hacksQuestion']) ? $_POST['hacksQuestion'] : '' ?></textarea>
                <div class="text-danger">
                    <span><?= isset($errorMessage['hacksQuestion']) ? $errorMessage['hacksQuestion'] : '' ?></span>
                </div>
            </div>

            <!-- radio experience programmation et ou informatique-->
            <label for="">Avez vous déja eu une expérience avec la programmation
                et/ou l'informatique avant de remplir ce formulaire ?</label>
            <div class="form-check">

                <input class="form-check-input" type="radio" name="radioQuestionExperience"
                    id="radioQuestionExperienceOne"
                    value="Oui" <?= isset($_POST['radioQuestionExperience']) && $_POST['radioQuestionExperience'] == "Oui" ? "checked" : "" ?>>
                <label class="form-check-label" for="radioQuestionExperience">Oui</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioQuestionExperience"
                    id="radioQuestionExperience"
                    value="Non" <?= isset($_POST['radioQuestionExperience']) && $_POST['radioQuestionExperience'] == "Non" ? "checked" : "" ?>>
                <label class="form-check-label" for="radioQuestionExperience">Non</label>
                <div class="text-danger">
                    <span><?= isset($errorMessage['radioQuestionExperience']) ? $errorMessage['radioQuestionExperience'] : '' ?></span>
                </div>
            </div>

            <div class="buttonForm">
                <!-- boutton validation de l'inscription -->
                <button type="submit" class="btn btn-primary" name="valider" id="valider">Valider</button>
                <button type="submit" class="btn btn-warning" name="afficher" id="afficher">Afficher</button>
            </div>
        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>