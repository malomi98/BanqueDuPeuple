<?php
include_once "../../../header.php";
require_once "../../modal/modelCompte.php";
require_once "../../modal/modelClient.php";
$comptes = getAllCompteByClient($_GET['idClient']);
$client = getClientById($_GET['idClient']);
?>

<div id="headerwrap">
    <div class="container">
        <br>
        <h1 class="display-4" align="center" style="text-decoration: underline;">CLIENT</h1>
        <br>
        <div class="content">
            <table class="table table-dark">

                <thead>
                <tr>
                    <th scope="col">NOM</th>
                    <th scope="col">PRENOM</th>
                    <th scope="col">ADRESSE</th>
                    <th scope="col">TEL</th>
                </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><?= $client['nom'] ?></td>
                        <td><?= $client['pnom'] ?></td>
                        <td><?= $client['adr'] ?></td>
                        <td><?= $client['tel'] ?></td>
                    </tr>
                </tbody>

            </table>
        </div>
        <br>
        <h1 class="display-4" align="center" style="text-decoration: underline;">COMPTES</h1>
        <br>
        <table class="table table-dark">

            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NUMERO</th>
                <th scope="col">DATE CREATION</th>
                <th scope="col">SOLDE</th>
            </tr>
            </thead>

            <tbody>
            <?php
            if ($comptes){

                foreach ($comptes as $key => $c){
                    echo '
                            <tr>
                                <td>
                                    '.($key+1).'
                                </td>
                                <td>
                                    '.$c['numero'].'
                                </td>
                                <td>
                                    '.$c['date'].'
                                </td>
                                <td>
                                    '.$c['solde'].'
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
<?php
include_once "../../../footer.php";
?>
