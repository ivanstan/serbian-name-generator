<?php

spl_autoload_register(function($class) {
  require_once 'core' . DIRECTORY_SEPARATOR . $class . '.php';
});

$generator = new SerbianNameGenerator();
$names = $generator->generate();

?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Serbian Name Generator</title>
  <meta name="description" content="Serbian Name Generator. Are you having a baby? You are in dilemma about a name for your new born? Say no more.">
  <meta name="author" content="Ivan Stanojevic">

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron mt-1">
        <h1 class="display-3">Serbian Name Generator</h1>
        <p class="lead">Are you having a baby? You are in dilemma about a name for your new born? Say no more.</p>
        <hr class="my-2">
        <p>We use carefully selected suffixes and prefixes to generate authentic Serbian names.</p>
        <form method="post" action="#result">
          <div class="form-group">
            <label>Prefixes: </label>
            <?php foreach ($generator->getPrefixes() as $tag): ?>
              <span class="tag tag-primary"><?php print $tag; ?></span>
            <?php endforeach; ?>
          </div>
          <div class="form-group">
            <label>Suffixes: </label>
            <?php foreach ($generator->getSuffixes() as $tag): ?>
              <span class="tag tag-primary"><?php print $tag; ?></span>
            <?php endforeach; ?>
          </div>
          <p class="lead">
            <input type="submit" value="Generate" class="btn btn-primary btn-lg" role="button">
          </p>
        </form>
      </div>
    </div>
  </div>

  <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>

    <div class="jumbotron" id="result">
      <p class="lead">We recommend name</p>
      <h1 class="display-3"><?php print $names[array_rand($names)]; ?></h1>
    </div>

    <p>Don't like it? Check all generated names bellow: </p>

    <div class="row">
      <div class="col-md-6">
        <img src="moon-moon.jpg" class="img-fluid" alt="Moon moon">
      </div>
      <div class="col-md-6">
        <ul class="list-group">
          <?php foreach ($names as $name): ?>
            <li class="list-group-item"><?php print $name?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  <?php endif; ?>

</div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
</body>
</html>