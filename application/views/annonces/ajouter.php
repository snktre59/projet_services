<div class="row mb">
      <div class="col-md-6 col-sm-offset-3" id="pageTitle">
        <h3 class="title-md hr-left text-theme">Ajouter un troc</h3>
        <div class="panel panel-light text-theme">
          <div class="panel-heading">
            <h3 class="panel-title">Formulaire</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal">
            <fieldset>
                  <legend>Catégorie de l'annonce</legend>
                  <!-- Catégorie -->
                  <div class="form-group">
                    <label for="categorie" class="control-label col-sm-2">Catégorie :</label>
                    <div class="col-sm-10">
                      <select name="categorie" id="categorie" class="form-control">
                          <option selected>"Choisissez la catégorie"</option>
                          
                        <!-- CATEGORIES PERE -->
                        <?php foreach($categorie->getCategorieByParent() as $catPere): ?>
                          <option disabled>--<?php echo $catPere["nom"]; ?>--</option>
                          
                            <!-- CATEGORIES FILS -->
                            <?php foreach($categorie->getCategorieByPere($catPere["id"]) as $catFils): ?>
                                <option value="<?php echo $catFils["id"]; ?>"><?php echo $catFils["nom"]; ?></option>
                            <?php endforeach; ?>
                          <!-- FIN FILS -->
    
                        <?php endforeach; ?>
                        <!-- FIN PERE -->
                          
                      </select>
                    </div>
                  </div>
              </fieldset>    
            
              <fieldset>
                  <legend>Localisation</legend>
                  <!-- CODE POSTAL -->
                  <div class="form-group">
                    <label for="codePostal" class="control-label col-sm-2">Code Postal :</label>
                    <div class="col-sm-10">
                      <input type="number" id="codePostal" name="codePostal" class="form-control" placeholder="Code Postal" />
                    </div>
                  </div>
                  <!-- VILLE -->
                  <div class="form-group">
                    <label for="ville" class="control-label col-sm-2">Ville :</label>
                    <div class="col-sm-10">
                      <input type="text" name="ville" class="form-control" placeholder="Ville" />
                    </div>
                  </div>
              </fieldset>
                
              <fieldset>
                  <legend>Vos informations</legend>
                  <!-- PSEUDO -->
                  <div class="form-group">
                    <label for="pseudo" class="control-label col-sm-2">Pseudo :</label>
                    <div class="col-sm-10">
                      <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" />
                    </div>
                  </div>
                  <!-- ADRESSE EMAIL -->
                  <div class="form-group">
                    <label for="adresseEmail" class="control-label col-sm-2">Adresse email :</label>
                    <div class="col-sm-10">
                      <input type="email" id="adresseEmail" name="adresseEmail" class="form-control" placeholder="Adresse email" value="<?php echo $utilisateurCourant->getAdresseEmail(); ?>" disabled/>
                    </div>
                  </div>
                  <!-- TELEPHONE (A voir)-->
                  <!--<div class="form-group">
                    <label for="telephone" class="control-label col-sm-2">Téléphone :</label>
                    <div class="col-sm-10">
                      <input type="number" name="telephone" class="form-control" placeholder="Téléphone" />
                    </div>
                  </div>-->
                  <!-- MASQUER NUMERO DE TELEPHONE -->
                  <!--<div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" /> Masquer mon numéro de téléphone</label>
                      </div>
                    </div>
                  </div>-->
              </fieldset>
              
              <fieldset>
                  <legend>Votre troc</legend>
                  <!-- TITRE DE L'ANNONCE -->
                  <div class="form-group">
                    <label for="titre" class="control-label col-sm-2">Titre de l'annonce :</label>
                    <div class="col-sm-10">
                      <input type="text" name="titre" id="titre" class="form-control" placeholder="Titre de l'annonce" />
                    </div>
                  </div>

                  <!-- TEXTE DE L'ANNONCE -->
                  <div class="form-group">
                    <label for="texte" class="control-label col-sm-2">Texte de l'annonce :</label>
                    <div class="col-sm-10">
                        <textarea type="text" name="pseudo" class="form-control" placeholder="Description du troc" style="height:200px"></textarea>
                    </div>
                  </div>
              </fieldset>
                
                <div class="row row-code">
                    <div class="col-sm-4">
                      <div class="content-box bordered">
                        <a href="feature-content-box.html#" class="img-box text-theme-sm">
                          <h3 class="caption-box">Photo 1</h3>
                          <img class="img-responsive" src="<?php echo img_url('placeholder/1050x750.png');?>" alt="img-theme">
                        </a>
                        <h3 class="title-sm text-theme-sm">Example Title</h3>
                        <p class="text-theme-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempor facilisis odio at malesuada.</p>
                        <a class="btn btn-primary btn-tiny btn-sm text-theme-sm" href="feature-content-box.html#">Read More</a>
                      </div>
                    </div>
                    
                    <div class="col-sm-4">
                      <div class="content-box bordered">
                        <a href="feature-content-box.html#" class="img-box text-theme-sm">
                          <h3 class="caption-box">Photo 2</h3>
                          <img class="img-responsive" src="<?php echo img_url('placeholder/1050x750.png');?>" alt="img-theme">
                        </a>
                        <h3 class="title-sm text-theme-sm">Example Title</h3>
                        <p class="text-theme-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempor facilisis odio at malesuada.</p>
                        <a class="btn btn-primary btn-tiny btn-sm text-theme-sm" href="feature-content-box.html#">Read More</a>
                      </div>
                    </div>
                    
                    <div class="col-sm-4">
                      <div class="content-box bordered">
                        <a href="feature-content-box.html#" class="img-box text-theme-sm">
                          <h3 class="caption-box">Photo 3</h3>
                          <img class="img-responsive" src="<?php echo img_url('placeholder/1050x750.png');?>" alt="img-theme">
                        </a>
                        <h3 class="title-sm text-theme-sm">Example Title</h3>
                        <p class="text-theme-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempor facilisis odio at malesuada.</p>
                          <input class="btn btn-primary btn-tiny btn-sm text-theme-sm" type="file" />
                      </div>
                    </div>
                </div>
                
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Envoyer</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>