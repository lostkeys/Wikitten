<?php
// Sanitize html content:
function e($dirty) {
    return htmlspecialchars($dirty, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <?php if($page['title'] === false): ?>
            <title><?php echo e(APP_NAME) ?></title>
        <?php else: ?>
            <title><?php echo e($page['title']) ?> - <?php echo e(APP_NAME) ?></title>
        <?php endif ?>

        <base href="<?php echo BASE_URL; ?>/">

        <link rel="shortcut icon" href="static/img/favicon.ico">

        <!--<link rel="stylesheet" href="static/css/bootstrap.min.css">-->
        <!--<link rel="stylesheet" href="static/css/prettify.css">-->
        <link rel="stylesheet" href="static/css/highlightjs-github.css">
        <link rel="stylesheet" href="static/css/codemirror.css">
        <link rel="stylesheet" href="static/css/codemirror-neo.css">
        <link rel="stylesheet" href="static/css/main.css">
        <link rel="stylesheet" href="static/css/custom.css">

        <meta name="description" content="<?php echo e($page['description']) ?>">
        <meta name="keywords" content="<?php echo e(join(',', $page['tags'])) ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php if(!empty($page['author'])): ?>
            <meta name="author" content="<?php echo e($page['author']) ?>">
        <?php endif; ?>

        <script src="static/js/jquery.min.js"></script>
        <!--<script src="static/js/prettify.js"></script>-->
        <script src="static/js/highlight.js"></script>
        <script src="static/js/codemirror.min.js"></script>
        <script src="static/js/scripts.js"></script>
    </head>
<body>

  <button type="button" id="toggle-menu" class="toggle-menu">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </button>

  <aside class="main-nav" id="main-nav">
    <!--<h1><a href="{{ base_url }}">{{ site_title }}</a></h1>-->

    <nav>
      <!--<h2><span><?php echo e(APP_NAME) ?></span></h2>-->
      <?php include('tree.php') ?>
      <!--
      <ul>
        <li {% if page == current_page %}class="active" id="current-page"{% endif %}>
          <a href="{{ page.url }}">{{ page.title }}</a>
          <ul class="page-nav"></ul>
        </li>
      </ul>
      -->
    </nav>
  </aside>

  <div class="main-content" id="main-content">
    <?php echo $content; ?>
  </div>

  <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
