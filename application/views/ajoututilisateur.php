<div class="container text-right">
    <a href="<?php echo base_url('welcome/index'); ?>"><button class="btn btn-danger">Déconnexion</button></a>
</div>
<div class="small" style="margin: 0 auto; width: 300px;">
	    <h1><span class="label label-default">Ajout d' un utilisateur</span></h1>
</div>

<form action="<?php echo base_url('welcome/confirmajoututilisateur'); ?>" method='post' style="margin: 0 auto; width: 300px;">
                    <table width='300px'>
                        <tr>
                            <td>
                                <label for="inputPassword3" class="col-m-4 control-label">Matricule : </label>
                            </td>
                            <td>
                                <p style="text-align:center"> <input type="text" name="matricule"  required></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="inputPassword3" class="col-m-4 control-label" >Nom :</label>
                            </td>
                            <td>
                                <p style="text-align:center"> <input type="text" name="nom"  required></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="inputPassword3" class="col-m-4 control-label" >Prénom(s) :</label>
                            </td>
                            <td>
                                <p style="text-align:center"> <input type="text" name="prenoms"  required></p>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <label for="inputPassword3" class="col-m-4 control-label" >Poste :</label>
                            </td>
                            <td>
                                <p style="text-align:center"><select name="poste">
                                	<?php $i=0; while($i<sizeof($postes)) { ?>
                                	<option value="<?php echo $postes[$i]['idPoste']; ?>"><?php echo $postes[$i]['nomposte']; ?></option>
                                	 <?php $i++; } ?>
                                </select></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="inputPassword3" class="col-m-4 control-label" >Email :</label>
                            </td>
                            <td>
                                <p style="text-align:center"> <input type="text" name="email"  required></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="inputPassword3" class="col-m-4 control-label" >Code d'accès :</label>
                            </td>
                            <td>
                                <p style="text-align:center"> <input type="text" name="code"  value="<?php echo $code; ?>" required>  </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="inputPassword3" class="col-m-4 control-label" >Embauché(e) le :</label>
                            </td>
                            <td>
                                <p style="text-align:center" > <input type="date" name="embauche"  required></p>
                            </td>
                        </tr>
                        <p style="text-align:center" ><tr>
	                        <div style="text-align: center; padding: 20px; background-color: #ffcccc;">
						        <p>Mémorisez bien votre matricule et votre code d'accès</p>
							</div>
						</tr></p>
                    </table>
                    <p style="text-align: left;"><input type="submit" class="btn btn-success" value="Ajouter cet utilisateur"></p>
</form>