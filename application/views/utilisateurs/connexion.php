<div class="section section-xs section-bottom">
      <div class="container">
        <div class="row mb">
          <div class="col-md-6 col-md-offset-3">
            <h3 class="title-md hr-left text-theme">Connexion</h3>
            <div class="panel panel-primary text-theme">
              <div class="panel-heading">
                <h3 class="panel-title">Connexion</h3>
              </div>
              <div class="panel-body">
                <form id="connexionForm" action="<?php echo base_url('utilisateurs/connexion'); ?>" method="POST">
                  <div class="form-group">
                    <label for="inputEmail">Adresse email :</label>
                    <input type="email" class="form-control" id="inputEmail" name="adresseEmail" placeholder="Adresse email">
                  </div>
                  <div class="form-group">
                    <label for="inputPassword">Mot de passe :</label>
                    <input type="password" class="form-control" id="inputPassword" name="motDePasse" placeholder="Password">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Se souvenir de moi ?</label>
                  </div>
                  <button type="submit" class="btn btn-primary text-theme-xs">Se connecter</button>
                  <a href="<?php echo base_url("utilisateurs/mot_de_passe_oublie"); ?>" class="text-theme-xs pull-right a-black">Mot de passe oublié ?</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>