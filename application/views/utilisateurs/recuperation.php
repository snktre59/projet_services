<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
            <div class="panel panel-light text-theme">
              <div class="panel-heading">
                <h3 class="panel-title">Récupération de mot de passe</h3>
              </div>
              <div class="panel-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url('utilisateurs/recuperation_validation'); ?>">
                <input type="hidden" name="adresseEmail" value="<?php echo $adresseEmail; ?>" />
                    <input type="hidden" name="tokenRecovery" value="<?php echo $tokenRecovery; ?>" />
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="motDePasse">Nouveau mot de passe :</label>
                    <div class="col-sm-10">
                      <input type="password" id="motDePasse" name="motDePasse" class="form-control" placeholder="Nouveau mot de passe">
                    </div>
                  </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label" for="motDePasseConfirm">Nouveau mot de passe confirmation :</label>
                    <div class="col-sm-10">
                      <input type="password" id="motDePasseConfirm" name="motDePasseConfirm" class="form-control" placeholder="Nouveau mot de passe confirmation">
                    </div>
                  </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                      </div>
                    </div>
                </form>
              </div>
            </div>
		</div>
		<div class="col-md-3">
		</div>
	</div>
</div>