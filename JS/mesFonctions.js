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

// Marche pour les premières offres ET demandes MAIS
// Ne marche pas pour les dernières offres ET Demandes ?
// (?? Uncaught SyntaxError: missing ) after argument list ??)
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

// Même problème que offre ??
// Se référer aux commentaires de updateOffre
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

function addDemande()
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

function deconnection()
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/GestionLogin/Logout",
            data:"",
            success:function(data)
            {
                alert("Déconnection OK");
            },
            error:function()
            {
                alert("Erreur lors de la déconnection");
            }
        }
    )
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

    console.log("idDeal->", idDeal);
    console.log("noteUser1->", noteUser1);
    console.log("noteUser2->", noteUser2);

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
            },
            error:function()
            {
                alert("Erreur de la modification de la note.");
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

function deconnection()
{
    $.ajax
    (
        {
            type:"get",
            url:"http://localhost/SIO2/PPE3/PPE3_troc/index.php/GestionLogin/Logout",
            data:"",
            success:function(data)
            {
                alert("Déconnection OK");
            },
            error:function()
            {
                alert("Erreur lors de la déconnection");
            }
        }
    )
}