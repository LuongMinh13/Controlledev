<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <script type="text/javascript" src="<?php echo base_url();?>JS/mesFonctions.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
</head>
<body>


    <form method='get' action='<?php echo base_url() ?>index.php/CtlrRegion/AfficherLesRegions'>
        <label>Votre Nom </label>
        <br>
        <input type="text" name="loginuser">
        <br>
        <div >
            <input type="submit" id="btnconnextion" value="Connexion" onclick ="AfficherRegion()">
        </div>

        <div id="divviewregion">
    </form>

    

    
</body>
</html>
