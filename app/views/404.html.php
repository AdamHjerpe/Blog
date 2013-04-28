<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />

  <title>404 Not Found | <?php echo config('blog.title') ?></title>
  <link href="css/styles.css" rel="stylesheet" />

</head>
<body class="error-404">

  <div class="center message">
    <h1>This page doesn't exist!</h1>
    <p>Would you like to try our <a href="<?php echo site_url() ?>">homepage</a> instead?</p>
  </div>

</body>
</html>