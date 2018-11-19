<?php
    foreach($lesVilles as $unville)
    {
        ?>
        <input type='radio' value='<?php echo $unville->idVille?>' name='nomRegion'><?php echo $unville->nomVille." ".$unville->scoreVille ?> <br>
        <?php
        
    }
?>
<input type="submit" id="btnAjouterScore" value="Connexion" onclick="AjouterScore('<?php echo  $unville->idVille?>')">