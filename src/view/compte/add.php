<?php
include_once "../../../header.php";
require_once "../../modal/modelCompte.php";
?>

<div id="headerwrap">
    <div class="container">
        <h1 class="display-4" align="center" style="text-decoration: underline;">NOUVEAU COMPTE</h1>
        <br>
        <?php
        if (isset($_GET['ajout'])) {
            if($_GET['ajout'] == '1'){
                ?>
                <h1 class="display-6" align="center" style="color: green" >COMPTE CREE AVEC SUCCES !!!</h1>
                <?php
            }
            else{
                ?>
                <h1 class="display-6" align="center" style="color: red" >ERREUR !!!</h1>
                <?php
            }
        }
        ?>
        <div class="row" style="margin-left: 300px;">
            <div class="main-login main-center">
                <form class="form-horizontal" method="post" action="/mesprojets/BanqueDuPeuple/compteController">
                    <p class="divider-text">
                        <h2 align="center">CLIENT</h2>
                    </p>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="name" class="cols-sm-2 control-label">Nom</label>
                            <div class="cols-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="nom" id="name"  placeholder="Votre Nom" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="cols-sm-2 control-label">Prenom</label>
                            <div class="cols-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="prenom" id="name"  placeholder="Votrre Prenom" required/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Adresse</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="adr" id="email"  placeholder="Votre Adresse" required/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mobile" class="cols-sm-2 control-label required">Telephone</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-mobile aria-hidden="true"></i></span>
                                <input type="number" min="770000000"  max="789999999" class="form-control" name="tel" id="mobile"  placeholder="Votre Telephone" required/>
                            </div>
                        </div>
                    </div>

                    <p class="divider-text">
                        <h2 align="center">COMPTE</h2>
                    </p>
                    <div class="form-group">
                        <label for="nationality" class="cols-sm-2 control-label">Numero</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="numeroCompte" id="name" value="<?= genererNum(); ?>" readonly/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="country" class="cols-sm-2 control-label">Solde</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-dollar fa" aria-hidden="true"></i></span>
                                <input type="number" min="500" class="form-control" name="solde" id="mobile"  placeholder="Votre Solde" required/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <button type="submit" name="AjoutCompte" class="btn btn-primary btn-lg btn-block login-button">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include_once "../../../footer.php";
?>
