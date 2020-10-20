<?php 
  $site_title = "Mon compte";
  include ("view/template/doctype_html.php");
  include ("view/template/nav.php");
  include ("view/template/header.php");
  require ("model/data/accounts.php");
?>

<h2>Votre compte</h2>
<div class="">
  <div class="col-12 col-sm-10 col-md-6 col-lg-4 mb-5">
    <div class="card text-center">
      <section class="card-body">
        <h5 class="card-title"><?php echo $account["account_type"];?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $account["account_number"];?></h6>
        <hr>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><?php echo $account["lastname"] ." ". $account["firstname"];?></li>
        </ul>
        <a href="depot-retrait.php" class="btn btn-primary">Dépot/Retrait</a>
        <a href="virement.php" class="btn btn-primary">Virement</a>
        <a href="supprimer.php" class="btn btn-primary">Cloturer</a>
        <a href="single.php?pos=<?php echo $key; ?>">Voir le compte</a>
      </section>
    </div> 
  </div>
</div>

<?php 
  include ("view/template/footer.php");
?>