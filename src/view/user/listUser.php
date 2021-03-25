<?php
  include_once '../../../header.php';
?>
<div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Etat</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><input type="checkbox" />1</th>
                    <td class="tm-product-name">Diatta</td>
                    <td>jean</td>
                    <td>jenmndmfnn@gmail.com</td>
                    <td>paser1</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="addUser.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Ajouter un nouveau Utilisateur</a>
            <button class="btn btn-primary btn-block text-uppercase">
              Supprimer un utilisateur
            </button>
          </div>
        </div>
      </div>
    </div>
 <?php
  include_once '../../../footer.php';
 ?>




