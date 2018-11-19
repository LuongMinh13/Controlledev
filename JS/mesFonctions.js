var codeFilm;

function AfficherFilm(idCinema)
{
    // alert (idCinema);
    $.ajax(
        {
            type:"get",
            url:"index.php/Ctrl_cinema/AfficherUnFilm",
            data:"idCinema="+idCinema,
            success:function(data)
            {
                $("#divActeur").empty();
                $("#divFilm").empty();
                $("#divFilm").append(data);
            },
            error:function()
            {
                alert('Erreur SQl');    
            }
        }

    );
}


function AfficherActeur(idFilm)
{
    codeFilm = idFilm;
    //  alert(idFilm);
    $.ajax(
        {
            type:"get",
            url:"index.php/Ctrl_cinema/AfficherUnActeurs",
            data:"idFilm="+idFilm,
            success:function(data)
            {
                $("#divActeur").empty();
                $("#divActeur").append(data);

            },
            error:function()
            {
                alert('Erreur SQl');
            }
        }

    );
}

function AfficherVote(votefilm)
{
    $.ajax(
        {
            type:"get",
            url:"index.php/Ctrl_cinema/AddVoteFilm",
            data:"votefilm="+votefilm+"&codeFilm="+codeFilm,
            success:function(data)
            {
                alert('MJA succes');
            },

        }
    );
}