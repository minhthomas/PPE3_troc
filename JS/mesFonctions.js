function AfficherLesRayons(idSecteur)
{
    // alert(idSecteur);

$.ajax
(
    {
        type:"get",
        url:"index.php/GestionSuperMarche/AfficherLesRayon",
        data:"idSect="+idSecteur,
        // data:"idAct="+idActivite,
        success:function(data)
        {
            $("#divRayon").empty();
            $("#divRayon").append(data);
        },
        error:function()
        {
            alert("Ereur d'affichage sur les formations");
        }
    }
);
}

function AfficherLesEmployes(idRayon)
{
    //alert(idRay)
$.ajax
(
    {
        type:"get",
        url:"index.php/GestionSuperMarche/AfficherLesEmployes",
        data:"idRay="+idRayon,
        success:function(data)
        {
            $("#divEmploye").empty();
            $("#divEmploye").append(data);
        },
        error:function()
        {
            alert("Ereur d'affichage sur les formations");
        }

    }
);
}

function AfficherLesHeureTotal(idRayon)
{
    //alert(idRay)
$.ajax
(
    {
        type:"get",
        url:"index.php/GestionSuperMarche/AfficherLesHeureTotal",
        data:"idRay="+idRayon,
        success:function(data)
        {
            $("#divHeure").empty();
            $("#divHeure").append(data);
        },
        error:function()
        {
            alert("Ereur d'affichage sur les formations");
        }

    }
);
}