<!-- Header -->
<?php require_once APP_ROOT . '/views/layout/header.php'; ?>

<!-- Body  -->
<h1><?= $data['title'] ?></h1>

<ul>
  <?php foreach($data['posts'] as $post) : ?>
    <li><?= $post->title ?></li>
  <?php endforeach; ?>
</ul>

<!-- Footer -->
<?php require_once APP_ROOT . '/views/layout/footer.php' ?>