<form action="<?php echo base_url('welcome/utilisateur'); ?>" method='post' style="margin: 0 auto; width: 300px;">
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
                                <label for="inputPassword3" class="col-m-4 control-label" >Code d'accès :</label>
                            </td>
                            <td>
                                <p style="text-align:center"> <input type="text" name="code"  required></p>
                            </td>
                        </tr>
                    </table>
                    <p style="text-align: left;"><input type="submit" class="btn btn-success" value="Log in as utilisateur"></p>
</form>
<hr/>

<form action="<?php echo base_url('welcome/admin'); ?>" method='post' style="margin: 0 auto; width: 300px;">
                    <table width='300px'>
                        <tr>
                            <td>
                                <label for="inputPassword3" class="col-m-4 control-label">Mail admnistrateur </label>
                            </td>
                            <td>
                                <p style="text-align:center"> <input type="text" name="mail" value="admin@gmail.com" required> </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="inputPassword3" class="col-m-4 control-label" >Code admnistrateur </label>
                            </td>
                            <td>
                                <p style="text-align:center"> <input type="password" name="code" value="admin" required></p>
                            </td>
                        </tr>
                    </table>
                    <p style="text-align: left;"><input type="submit" class="btn btn-success" value="Log in as admnistrateur"></p>
</form>
