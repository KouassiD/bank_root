<?php 
    $site_title = "Articles";
    include ("view/template/doctype_html.php");
    include ("view/template/nav.php");
    include ("view/template/header.php");
?>

<main class="container">
    <div>
      <section class="card-body" id="card">
        <!-- <h6 class="card-subtitle mb-2 text-muted">id</h6> -->
        <!-- <h5 class="card-title">titre</h5> -->
        <!-- <p class="card-text">contenu</p> -->
        <!-- <a href="#" class="card-link">Lire</a> -->
      </section>
    </div>
  </main>


<?php 
    $script = "<script src='public/js/articles.js'></script>";
    include ("view/template/footer.php");
?>