<div class="small" >
	    <h1><span class="label label-default">Liste des utilisateurs supprimés/inactifs</span></h1>
</div>
 <table class="table">
    <tr>
        <th>Matricule</th>
        <th>Nom</th>
        <th>Prénom(s)</th>
        <th>Poste</th>
        <th>Date d'embauche</th>
    </tr>
    <?php $i=0; while($i<sizeof($uinactifs)) { ?>
    <tr>
        <td><?php echo $uinactifs[$i]['matricule']; ?></td>
        <td><?php echo $uinactifs[$i]['nom']; ?></td>
        <td><?php echo $uinactifs[$i]['prenoms']; ?></td>
        <td><?php echo $uinactifs[$i]['nomposte']; ?></td>
        <td><?php echo $uinactifs[$i]['dateembauche']; ?></td>
        <td>
          
          <a href="<?php echo base_url('welcome/reactiver?id='.$uinactifs[$i]['idUtilisateur']); ?>"> <input type="button" class="btn btn-success" value="Réactiver"></a>
        </td>
    </tr>
    <?php $i++; } ?>
</table> 