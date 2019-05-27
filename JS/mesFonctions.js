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

function openWindowOffre(idOffre)
{
    $.ajax
    (
        {
            type:"get",
            url:"addInformationOffre",
            data:"idOffre="+idOffre,
            success:function(data)
            {
                $("#divUpdateForm").empty();
                $("#divUpdateForm").append(data);
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
            url:"setInformationOffre",
            data:"idOffre="+idOffre+"&nomServ="+nomService+"&descOffre="+descOffre+"&dateOffre="+dateOffre,
            success:function(data)
            {
                alert("La modification de l'offre à été effectué.");
                CloseWindow();
                window.location = 'index';
            },
            error:function()
            {
                alert("Erreur lors de la modification de l'offre");
            }
        }
    )
}

function openWindowDemande(idDemande)
{
    $.ajax
    (
        {
            type:"get",
            url:"addInformationDemande",
            data:"idDemande="+idDemande,
            success:function(data)
            {
                $("#divUpdateForm").empty();
                $("#divUpdateForm").append(data);
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
            url:"setInformationDemande",
            data:"idDemande="+idDemande+"&nomServ="+nomService+"&descDemande="+descDemande+"&dateDemande="+dateDemande,
            success:function(data)
            {
                alert("La modification de la demande à été effectué.");
                CloseWindow();
                window.location = 'index';
            },
            error:function()
            {
                alert("Erreur lors de la modification de la demande");
            }
        }
    )
}

function addOffre()
{
    // var txtnextidoffre = $('#txtnextidoffre').val();
    // var txtadddescOffre = $('#txtadddescOffre').val();
    // var idservice = $('#idservice').val();

    if($('#txtadddescOffre').val() == "")
    {
        alert("Veuillez saisir une description de l'offre.");
    }
    else
    {
        $.ajax
        (
            {
                type:"get",
                url:"insertOffre",
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
}

function addDemande()
{
    if($('#txtadddescDemande').val() == "")
    {
        alert("Veuillez saisir une description de la demande.");
    }
    else
    {
        $.ajax
        (
            {
                type:"get",
                url:"insertDemande",
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
}

function openWindowDeals(idDeal)
{
    $.ajax
    (
        {
            type:"get",
            url:"addInformationDeals",
            data:"idDeal="+idDeal,
            success:function(data)
            {
                $("#divUpdateForm").empty();
                $("#divUpdateForm").append(data);
                openUpdateWindow();
            },
            error:function()
            {
                alert("Erreur d'affichage de la vue");
            }
        }
    )
}

function updateDeal()
{
    var idDeal = $('#txtIdDeal').val();
    var noteUser1 = $('#txtNoteUser1').val();
    var noteUser2 = $('#txtNoteUser2').val();

    // console.log("idDeal->", idDeal);
    // console.log("noteUser1->", noteUser1);
    // console.log("noteUser2->", noteUser2);

    if(noteUser1 != 0 && noteUser2 != 0)
    {
        $.ajax
        (
            {
                type:"get",
                url:"setNoteDealAndIdEtat",
                data:"idDeal="+idDeal+"&noteUser1="+noteUser1+"&noteUser2="+noteUser2,
                success:function(data)
                {
                    alert("La mise à jour de votre note à été effectué.");
                    CloseWindow();
                    window.location = 'index';
                },
                error:function()
                {
                    alert("Erreur de la modification de la note.");
                }
            }
        )
    }
    else
    {
        $.ajax
        (
            {
                type:"get",
                url:"setNoteDeal",
                data:"idDeal="+idDeal+"&noteUser1="+noteUser1+"&noteUser2="+noteUser2,
                success:function(data)
                {
                    alert("La mise à jour de votre note à été effectué.");
                    CloseWindow();
                    window.location = 'index';
                },
                error:function()
                {
                    alert("Erreur de la modification de la note.");
                }
            }
        )
    }
}

function rechercherOffre()
{
    // console.log($('#txtRecherche').val());
    var txtRecherche = $('#txtRecherche').val();
    if(txtRecherche.length >= 2)
    {
        $.ajax
        (
            {
                type:"get",
                url:"RechercherOffre",
                data:"offre="+txtRecherche,
                success:function(data)
                {
                    $("#viewUser").empty();
                    $("#viewOffresEtDemandes").empty();
                    $("#viewUser").append(data);
                },
                error:function()
                {
                    alert("Erreur lors de l'affichage des utilisateurs.");
                }
            }
        )
    }
    else
    {
        $("#viewUser").empty();
        $("#viewOffresEtDemandes").empty();
    }
}

function selectUserForDeal(idUser)
{
    // console.log(idUser);
    $.ajax
    (
        {
            type:"get",
            url:"getOffreAndDemandeOfSelectedUser",
            data:"idUser="+idUser,
            success:function(data)
            {
                $("#viewOffresEtDemandes").empty();
                $("#viewOffresEtDemandes").append(data);
            },
            error:function()
            {
                alert("Erreur lors de la récupération des offres et demandes de l'utilisateur sélectionné.");
            }
        }
    )
}

var idDemandeConnectUser;
var idServiceDemandeConnectUser;

var idOffreConnectUser;
var idServiceOffreConnectUser;

var idDemandeSelectedUser;
var idServiceDemandeSelectedUser;

var idOffreSelectedUser;
var idServiceOffreSelectedUser;

function setidDemandeConnectUser(id, idService)
{
    idDemandeConnectUser = id;
    idServiceDemandeConnectUser = idService;
    console.log("idDemandeConnectUser->", idDemandeConnectUser);
    console.log("idServiceDemandeConnectUser->", idServiceDemandeConnectUser);
}

function setidOffreConnectUser(id, idService)
{
    idOffreConnectUser = id;
    idServiceOffreConnectUser = idService;
    console.log("idOffreConnectUser->", idOffreConnectUser);
    console.log("idServiceOffreConnectUser->", idServiceOffreConnectUser);
}

function setidDemandeSelectedUser(id, idService)
{
    idDemandeSelectedUser = id;
    idServiceDemandeSelectedUser = idService;
    console.log("idDemandeSelectedUser->", idDemandeSelectedUser);
    console.log("idServiceDemandeSelectedUser->", idServiceDemandeSelectedUser);
}

function setidOffreSelectedUser(id, idService)
{
    idOffreSelectedUser = id;
    idServiceOffreSelectedUser = idService;
    console.log("idOffreSelectedUser->", idOffreSelectedUser);
    console.log("idServiceOffreSelectedUser->", idServiceOffreSelectedUser);
}

function CreateDeal()
{
    if(idServiceDemandeConnectUser == idServiceOffreSelectedUser && idServiceOffreConnectUser == idServiceDemandeSelectedUser)
    {
        if(idDemandeConnectUser != idOffreSelectedUser && idOffreConnectUser != idDemandeSelectedUser)
        {
            $.ajax
            (
                {
                    type:"get",
                    url:"addDealInDB",
                    data:"idOffreUser1="+idOffreSelectedUser+"&idOffreUser2="+idOffreConnectUser,
                    success:function(data)
                    {
                        alert("L'insertion du deal à été effectué");
                        window.location = 'index';
                    },
                    error:function()
                    {
                        alert("Erreur lors de l'ajout du deal");
                    }
                }
            )
        }
        else
        {
            alert("Vous ne pouvez demandez une offre en échange de la même offre");
        }
    }
    else
    {
        if(idServiceDemandeConnectUser != idServiceOffreSelectedUser)
        {
            alert("L'offre choisie ne correspond à aucune de vos demandes");
        }
        else
        {
            alert("L'offre que vous proposez ne correspond à aucunes des demandes de l'utilisateur sélectionner");
        }
    }
}