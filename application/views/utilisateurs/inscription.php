<div class="section section-xs section-bottom">
  <div class="container">
    <div class="row mb">
      <div class="col-md-6 col-sm-offset-3">
        <h3 class="title-md hr-left text-theme">Inscription</h3>
        <div class="panel panel-primary text-theme">
          <div class="panel-heading">
            <h3 class="panel-title">Formulaire d'inscription</h3>
          </div>
          <div class="panel-body">
            <div id="inscriptionValide" class="alert alert-success" style="display:none">
              <strong>Bravo !</strong> Vous êtes désormais inscrit sur le site Troc'It Easy ! <strong>Vous allez recevoir un email avec un lien vous permettant de valider votre inscription, pensez à vérfier vos spams.</strong>
            </div>
            <form id="inscriptionForm" action="<?php echo base_url('utilisateurs/do_inscription'); ?>">
              <div class="form-group">
                <label for="input-name">Nom : </label>
                <input type="text" class="form-control" id="input-name" name="nom" placeholder="Nom" />
              </div>
              <div class="form-group">
                <label for="first-name">Prénom :</label>
                <input type="text" class="form-control" id="first-name" name="prenom" placeholder="Prénom" />
              </div>
              <div class="form-group">
                <label for="inputEmail">Adresse email :</label>
                <input type="email" class="form-control" id="inputEmail" name="adresseEmail" placeholder="Adresse email" />
              </div>
      <div class="form-group">
                <label for="inputEmail">Confirmation de l'adresse email :</label>
                <input type="email" class="form-control" id="inputEmail" name="adresseEmailConfirm" placeholder="Confirmation de l'adresse email" />
              </div>
              <div class="form-group">
                <label for="inputPassword">Mot de passe :</label>
                <input type="password" class="form-control" id="inputPassword" name="motDePasse" placeholder="Mot de passe" />
              </div>
      <div class="form-group">
                <label for="inputPassword">Confirmation du mot de passe :</label>
                <input type="password" class="form-control" id="inputPassword" name="motDePasseConfirm" placeholder="Confirmation du mot de passe" />
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="termesEtConditions" value="on"/> <span>J'accepte les <a href="<?php echo base_url()."contact/index"; ?>">termes et les conditions</a></span></label><br />
                  <div class="alert alert-danger" id="termesAlert" style="display:none">Vous devez accepter les termes et conditions pour terminer votre inscription.</div>
              </div>
              <button type="submit" class="btn btn-primary">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>