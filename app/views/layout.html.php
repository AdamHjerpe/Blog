<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo isset($title) ? _h($title) : config('blog.title') ?></title>
    <link rel="alternate" type="application/rss+xml" title="<?php echo config('blog.title')?>  Feed" href="<?php echo site_url()?>rss" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" user-scalable="no" />
    <meta name="description" content="<?php echo config('blog.description')?>" />
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <header class="main-header">
        <section class="header-wrap">
          <h1><a href="<?php echo site_url() ?>"><?php echo config('blog.title') ?></a></h1>
        </section>
    </header>
    <!-- /.main-header -->    
    <section class="wrapper">
    <aside class="sidebar">


        <p class="description"><?php echo config('blog.description')?></p>

        <ul>
            <li><a href="<?php echo site_url() ?>">Home</a></li>
        </ul>

        <p class="author"><?php echo config('blog.authorbio') ?></p>

    </aside>

  <section class="content">

    <?php echo content()?>

  </section>

    </section>
    <!-- /.wrapper -->
    <footer class="main-footer">
      
    </footer>
    <!-- /.main-footer -->
    <!-- Keep script import at bottom, right before closing </body> tag -->
  </body>
</html>