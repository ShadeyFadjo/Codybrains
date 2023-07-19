<div class="small" >
	    <h1><span class="label label-default">Code d'accès : <?php echo $code; ?></span></h1>
</div>

<div class="container text-right">
    <a href="<?php echo base_url('welcome/deconnexion?id='.$idutilisateur); ?>"><button class="btn btn-danger">Déconnexion</button></a>
</div>

<div class="small" >
	    <h1><span class="label label-default">Liste des utilisateurs connectés</span></h1>
</div>
<table class="table">
    <tr>
        <th>Matricule</th>
        <th>Nom</th>
        <th>Prénom(s)</th>
        <th>Poste</th>
    </tr>
    <?php $i=0; while($i<sizeof($connectes)) { ?>
    <tr>
        <td><?php echo $connectes[$i]['matricule']; ?></td>
        <td><?php echo $connectes[$i]['nom']; ?></td>
        <td><?php echo $connectes[$i]['prenoms']; ?></td>
        <td><?php echo $connectes[$i]['nomposte']; ?></td>
    </tr>
    <?php $i++; } ?>
</table>