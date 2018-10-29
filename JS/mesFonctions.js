function openUpdateWindow()
{
    var modal = document.getElementById('fenetreUpdate');

    // Afficher la fenêtre
    modal.style.display = "block";

    // Quand l'utilisateur clique en dehors de la fenêtre
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}

function CloseWindow()
{
    var modal = document.getElementById('fenetreUpdate');
    modal.style.display = "none";
}

function openWindowOffre(idOffre, nomService, descriptionOffre, dateOffre)
{
    // alert(idOffre +" - " + nomService +" - " + descriptionOffre +" - " + dateOffre);
    $.ajax
    (
        {
            type:"get",
            url:"http://localhost/SIO2/PPE3/PPE3_troc/index.php/Ctrl_Acceuil/addInformationOffre",
            data:"idOffre="+idOffre+"&nomServ="+nomService+"&descOffre="+descriptionOffre+"&dateOffre="+dateOffre,
            success:function(data)
            {
                $("#updateForm").empty();
                $("#updateForm").append(data);
                openUpdateWindow();
            },
            error:function()
            {
                alert("Erreur d'affichage de la vue");
            }
        }
    )
}

function updateOffre()
{
    var idOffre = $('#numOffre').val();
    var descOffre = $('#descOffre').val();
    var dateOffre = $('#dateOffre').val();
    var nomService = $('#nomService').val();

    $.ajax
    (
        {
            type:"get",
            url:"http://localhost/SIO2/PPE3/PPE3_troc/index.php/Ctrl_Acceuil/setInformationOffre",
            data:"idOffre="+idOffre+"&nomServ="+nomService+"&descOffre="+descOffre+"&dateOffre="+dateOffre,
            success:function(data)
            {
                alert("Update OFFRE OK");
                CloseWindow();
            },
            error:function()
            {
                alert("Erreur de la modification de l'offre");
            }
        }
    )
}

function openWindowDemande(idDemande, nomService, descriptionDemande, dateDemande)
{
    $.ajax
    (
        {
            type:"get",
            url:"http://localhost/SIO2/PPE3/PPE3_troc/index.php/Ctrl_Acceuil/addInformationDemande",
            data:"idDemande="+idDemande+"&nomServ="+nomService+"&descDemande="+descriptionDemande+"&dateDemande="+dateDemande,
            success:function(data)
            {
                $("#updateForm").empty();
                $("#updateForm").append(data);
                openUpdateWindow();
            },
            error:function()
            {
                alert("Erreur d'affichage de la vue");
            }
        }
    )
}

function updateDemande()
{
    var idDemande = $('#numDemande').val();
    var descDemande = $('#descDemande').val();
    var dateDemande = $('#dateDemande').val();
    var nomService = $('#nomService').val();

    $.ajax
    (
        {
            type:"get",
            url:"http://localhost/SIO2/PPE3/PPE3_troc/index.php/Ctrl_Acceuil/setInformationDemande",
            data:"idDemande="+idDemande+"&nomServ="+nomService+"&descDemande="+descDemande+"&dateDemande="+dateDemande,
            success:function(data)
            {
                alert("Update DEMANDE OK");
                CloseWindow();
            },
            error:function()
            {
                alert("Erreur de la modification de l'offre");
            }
        }
    )
}

function addOffre()
{
    // var txtnextidoffre = $('#txtnextidoffre').val();
    // var txtadddescOffre = $('#txtadddescOffre').val();
    // var idservice = $('#idservice').val();

    $.ajax
    (
        {
            type:"get",
            url:"http://localhost/SIO2/PPE3/PPE3_troc/index.php/Ctrl_Acceuil/insertOffre",
            data:"txtnextidoffre="+$('#txtnextidoffre').val()+"&txtadddescOffre="+$('#txtadddescOffre').val()+"&idservice="+$('#idservice').val(),
            success:function(data)
            {
                alert("Insert ok");
            },
            error:function()
            {
                alert("Erreur de la modification de l'offre");
            }
        }
    );
}

function addDemande()
{
    $.ajax
    (
        {
            type:"get",
            url:"http://localhost/SIO2/PPE3/PPE3_troc/index.php/Ctrl_Acceuil/insertDemande",
            data:"txtnextdemande="+$('#txtnextdemande').val()+"&txtadddescDemande="+$('#txtadddescDemande').val()+"&idservice="+$('#idservice').val(),
            success:function(data)
            {
                alert("Insert ok");
            },
            error:function()
            {
                alert("Erreur de la modification de l'offre");
            }
            
        }
    );
}