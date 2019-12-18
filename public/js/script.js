$(document).ready(function () {
    $('.btn').click(function (event) {
        var btnClic = $(event.target).closest('button');
        var idAjouter = $(btnClic).attr('idAjouter');
        $('#idClient').attr('value',idAjouter);
        var idModifier = $(btnClic).attr('idModifier');
        if(idModifier){
            var tr = $(btnClic).closest('tr');
            var td = $(tr).children('td');
            document.getElementById('nom').value = $(td)[1].innerText;
            document.getElementById('prenom').value = $(td)[2].innerText;
            document.getElementById('adr').value = $(td)[3].innerText;
            document.getElementById('tel').value = $(td)[4].innerText;
            $('#idClient2').attr('value',idModifier);
        }

        var idSupprimer = $(btnClic).attr('idSupprimer');
        if(idSupprimer){
            var confirmation = confirm("Voulez-vous vraiment supprimer ? ");
            if(confirmation){
                $.ajax({
                        url : '/mesprojets/BanqueDuPeuple/ajax/supprimer.php',
                        type : 'GET',
                        data : {idCompte : idSupprimer},
                        success : function (data) {
                            if(data == 1){
                                $(btnClic).closest('tr').fadeOut(500);
                            }
                        },
                        error : function () {
                            alert("dsajcdjnc");
                        }
                    }
                );
            }
        }
    })
})