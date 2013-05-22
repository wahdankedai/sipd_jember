<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo isset($title) ? $title : 'SIPD Jember'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
    echo css(array(
        'bootstrap.min',
        'bootstrap-responsive.min',
        'style',
        'login'
    ));
    ?>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <?php echo js(array('html5shiv')) ?>
    <![endif]-->

    <!-- Fav and touch icons -->
    <?php echo link_tag(base_url().'webroot/img/favicon.png', 'shortcut icon', 'image/ico'); ?>

    <?php
    echo js(array(
        'jquery.min',
        'bootstrap.min',
        'scripts'
    ));
    ?>
  </head>

  <body>
    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" placeholder="Email address" class="input-block-level">
        <input type="password" placeholder="Password" class="input-block-level">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button type="submit" class="btn btn-large btn-primary">Sign in</button>
      </form>

    </div>
  </body>
</html>
