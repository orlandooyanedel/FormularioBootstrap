<h1>Carga Datos</h1>
<?php


echo "<h2>Nombre:".$_POST["nombre"]."</h2>";

?>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nombre</h5>
    <p class="card-text"><?=$_POST["nombre"]?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>