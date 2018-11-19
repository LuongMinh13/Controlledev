var codeRegion;
function AfficherRegion()
{
    // alert ();
    $.ajax(
        {
            type:"get",
            url:"index.php/CtlrRegion/AfficherLesRegions",
            data:"",
            success:function(data)
            {
                $("#divviewregion").empty();
                $("#divviewregion").append(data);
            },
            error:function()
            {
                alert('Erreur SQl');
            }
        }

    );
}

function AfficherVilles(idRegion)
{
    codeRegion = idRegion;
    $.ajax(
        {
            type:"get",
            url:"http://localhost/SIO2/Controlledev-1/index.php/CtlrRegion/AfficherLesVilles",
            data:"idRegion="+idRegion,
            success:function(data)
            {
                $("#divviewvilles").empty();
                $("#divviewvilles").append(data);
            },
            error:function()
            {
                alert('Erreur SQl');    
            }
        }

    );
}


function AjouterScore(idVille)
{
    $.ajax(
        {
            type:"get",
            url:"http://localhost/SIO2/Controlledev-1/index.php/CtlrRegion/AjouterLesScores",
            data:"idVille="+idVille+"&codeRegion="+codeRegion,
            success:function(data)
            {
                alert('MJA succes');
            },

        }
    );
}

