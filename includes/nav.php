<!-- Nav tabs -->
<?php  
include "includes/head.php"
?>
<ul class="nav nav-tabs" id="navId">
  <li class="nav-item">
    <a href="index.php" class="nav-link active">Hovedside</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sider</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="side1.php">Side 1</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="side2.php">Side 2</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="side3.php">Side 3</a>
    </div>
  </li>
 
  </li>
</ul>
<script>
  $('#navId a').click(e => {
    e.preventDefault();
    $(this).tab('show');
  });
</script>