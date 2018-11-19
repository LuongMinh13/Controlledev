<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <script type="text/javascript" src="<?php echo base_url();?>JS/mesFonctions.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
    <script>
            $
            (
                function()
                {
                    $('input[name=nomRegion]').click
                    (
                        function()
                        {
                            AfficherVilles($(this).val());
                        }
                    )
                }
            );

    </script>
</head>
<body>
<?php
    foreach ($lesregions  as $uneregion)
    {
   ?>
        <div click="AfficherVilles('<?php echo $uneregion->idRegion?>')">
        <input type='radio' value='<?php echo $uneregion->idRegion?>' name='nomRegion'><?php echo $uneregion->nomRegion." ".$uneregion->scoreRegion ?> <br>
        <div>
        
   <?php
    }
    ?>
    <div id="divviewvilles">
    <?php
?>
</body>
</html>

