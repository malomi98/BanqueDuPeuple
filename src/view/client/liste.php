<?php
    include_once "../../../header.php";
    require_once "../../modal/modelClient.php";
    require_once "../../modal/modelCompte.php";
    $clients = getClients();
?>

<div id="headerwrap">
    <div class="container">
        <br><br><br><br>
        <h1 class="display-4" align="center" style="text-decoration: underline;">LISTE DES CLIENTS</h1>
        <br>
        <?php
        if (isset($_GET['ajout'])) {
            if($_GET['ajout'] == '1'){
                ?>
                <h1 class="display-6" align="center" style="color: green" >COMPTE AJOUTE AVEC SUCCES !!!</h1>
                <?php
            }
            else{
                ?>
                <h1 class="display-6" align="center" style="color: red" >ERREUR !!!</h1>
                <?php
            }
        }
        if (isset($_GET['modif'])) {
            if($_GET['modif'] == '1'){
                ?>
                <h1 class="display-6" align="center" style="color: green" >CLIENT MODIFIE AVEC SUCCES !!!</h1>
                <?php
            }
            else{
                ?>
                <h1 class="display-6" align="center" style="color: red" >ERREUR !!!</h1>
                <?php
            }
        }
        ?>
        <br><br><br>
        <div class="content">
            <table class="table table-dark">

                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NOM</th>
                    <th scope="col">PRENOM</th>
                    <th scope="col">ADRESSE</th>
                    <th scope="col">TEL</th>
                    <th scope="col">ACTIONS</th>
                </tr>
                </thead>

                <tbody>
                <?php
                if ($clients){
                    foreach ($clients as $key => $cli){
                    echo '
                            <tr>
                                <td>
                                    '.($key+1).'
                                </td>
                                <td>
                                    '.$cli['nom'].'
                                </td>
                                <td>
                                    '.$cli['pnom'].'
                                </td>
                                <td>
                                    '.$cli['adr'].'
                                </td>
                                <td>
                                    '.$cli['tel'].'
                                </td>
                                <td>
                                    <button class="btn btn-outline-success" idAjouter="'.$cli['id'].'" data-toggle="modal" data-target="#basicExampleModal"><i class="fa fa-plus fa" aria-hidden="true"></i></button>
                                    <button class="btn btn-outline-warning" idModifier="'.$cli['id'].'" data-toggle="modal" data-target="#basicExampleModal2"><i class="fa fa-edit fa" aria-hidden="true"></i></button>
                                    <a href="/mesprojets/BanqueDuPeuple/listeCompteCli?idClient='.$cli['id'].'"><button class="btn btn-outline-primary"><i class="fa fa-list fa" aria-hidden="true"></i></button></a>
                                </td>
                            </tr>
                        ';
                    }
                }
                ?>
                </tbody>

            </table>
        </div>

    </div>
</div>
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" align="center" id="exampleModalLabel">NOUVEAU COMPTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/mesprojets/BanqueDuPeuple/addClient">
                    <input type="text" name="idClient" id="idClient" hidden>
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" name="addClient" class="btn btn-primary">Valider</button>
                    </div>
                </form>
        </div>
    </div>
</div>

<div class="modal fade" id="basicExampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" align="center" id="exampleModalLabel">NOUVEAU COMPTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/mesprojets/BanqueDuPeuple/compteController">
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Nom</label>
                        <div class="cols-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="nom" id="nom"  placeholder="Votre Nom" required/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Prenom</label>
                        <div class="cols-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="prenom" id="prenom"  placeholder="Votrre Prenom" required/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">Adresse</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="adr" id="adr"  placeholder="Votre Adresse" required/>
                            </div>
                        </div>
                    </div>
                    <input id="idClient2" name="idClient" hidden>
                    <div class="form-group">
                        <label for="mobile" class="cols-sm-2 control-label required">Telephone</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-mobile aria-hidden="true"></i></span>
                                <input type="number" min="770000000"  max="789999999" class="form-control" name="tel" id="tel"  placeholder="Votre Telephone" required/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <button type="submit" name="Modifier" class="btn btn-primary btn-lg btn-block login-button">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    include_once "../../../footer.php";
?>
