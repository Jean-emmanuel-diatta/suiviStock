<?php
  include_once '../../../header.php';
?>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Ajouter un produit</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label
                      for="reference"
                      >Reference
                    </label>
                    <input
                      id="reference"
                      name="reference"
                      type="number"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="nom"
                      >Libelle</label
                    >
                    <textarea
                      class="form-control validate"
                      rows="1"
                      required
                    ></textarea>
                  </div>
                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="qte"
                            >Quantite  en Stock
                          </label>
                          <input
                            id="qte"
                            name="qte"
                            type="number"
                            class="form-control validate"
                            required
                          />
                        </div>   
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="Charger une Image de Produit"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="btnAdd">Ajouter Produit</button>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="btnUpdate">Modifier</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   <?php
    include_once '../../../footer.php';
   ?>