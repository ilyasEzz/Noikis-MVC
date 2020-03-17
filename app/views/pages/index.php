<!-- Header -->
<?php require_once APP_ROOT . '/views/layout/header.php'; ?>

<!-- Body  -->
<h1><?= $data['title'] ?></h1>
<p>
  Don't forget to change the "config.php" file to math you Database. <br>
  And the ".htaccess" in the "public" directory : 
  RewriteBase /<strong>mvc</strong>/public =>
  RewriteBase /<strong>YOUR PROJECT</strong>/public 
</p>


<!-- Footer -->
<?php require_once APP_ROOT . '/views/layout/footer.php' ?>