<div class="container text-right">
    <a href="<?php echo base_url('welcome/index'); ?>"><button class="btn btn-danger">Déconnexion</button></a>
</div>

<div class="small" style="margin: 0 auto; width: 300px;">
	    <h1><span class="label label-default">Bienvenue Admnistrateur</span></h1>
</div>



<div class="container" style="text-align: center; padding-top: 50px;">
        <div class="row">
            <a href="<?php echo base_url('welcome/ajoututilisateur'); ?>"><div class="col-xs-6">
                <button type="button" class="btn btn-primary btn-lg btn-block btn-rounded"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter un utilisateur</button>
            </div></a>
            <a href="<?php echo base_url('welcome/inactifs'); ?>"><div class="col-xs-6">
                <button type="button" class="btn btn-success btn-lg btn-block btn-rounded"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Liste des utilisateurs inactifs/supprimés  </button>
            </div></a>
        </div>
</div>

<div class="small" >
	    <h1><span class="label label-default">Liste des utilisateurs (actifs)</span></h1>
</div>
<table class="table">
    <tr>
        <th>Matricule</th>
        <th>Nom</th>
        <th>Prénom(s)</th>
        <th>Poste</th>
        <th>Date d'embauche</th>
    </tr>
    <?php $i=0; while($i<sizeof($uactifs)) { ?>
    <tr>
        <td><?php echo $uactifs[$i]['matricule']; ?></td>
        <td><?php echo $uactifs[$i]['nom']; ?></td>
        <td><?php echo $uactifs[$i]['prenoms']; ?></td>
        <td><?php echo $uactifs[$i]['nomposte']; ?></td>
        <td><?php echo $uactifs[$i]['dateembauche']; ?></td>
        <td>
          
          <a href="<?php echo base_url('welcome/desactiver?id='.$uactifs[$i]['idUtilisateur']); ?>"> <input type="button" class="btn btn-danger" value="Désactiver/Supprimer"></a>
        </td>
    </tr>
    <?php $i++; } ?>
</table>


