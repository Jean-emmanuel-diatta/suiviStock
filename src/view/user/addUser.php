<?php
  include_once '../../../header.php';
?>
      <div class="container mt-5">
        <div class="row tm-content-row">
          <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <h2 class="tm-block-title">Liste des comptes</h2>
              <p class="text-white">Comptes</p>
              <select class="custom-select">
                <option value="0">Selectionner un compte</option>
                <option value="1">Administrateur</option>
                <option value="2">Editor</option>
                <option value="3">Merchant</option>
                <option value="4">Customer</option>
              </select>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row tm-content-row">
         
          <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">Parametre  de Compte</h2>
              <form action="" class="tm-signup-form row">
                <div class="form-group col-lg-6">
                  <label for="name">Nom</label>
                  <input
                    id="nom"
                    name="nom"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="prenom">Prenom</label>
                  <input
                    id="prenom"
                    name="prenom"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="email">Email</label>
                  <input
                    id="email"
                    name="email"
                    type="email"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="password">Password</label>
                  <input
                    id="password"
                    name="password"
                    type="password"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="password2">Comfirme Password</label>
                  <input
                    id="password2"
                    name="password2"
                    type="password"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="phone">Etat</label>
                  <input
                    id="etat"
                    name="etat"
                    type="number"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label class="tm-hide-sm">&nbsp;</label>
                  <button
                    type="submit"
                    name="btnAjout"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                    Ajouter
                  </button>
                </div>
                <div class="col-12">
                  <button
                    type="submit"
                    name ="btnSupp"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                    Supprimer le compte
                  </button>
                </div>
                <div class="form-group col-lg-6">
                  <label class="tm-hide-sm">&nbsp;</label>
                  <button
                    type="submit"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                    Modifier
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php
        include_once '../../../footer.php';
      ?>