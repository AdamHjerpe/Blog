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
    <link rel="stylesheet" href="css/style.css">
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
            <li><a href="https://github.com/AdamHjerpe/">Github</a></li>
        </ul>

        <p>This blog template and engine is open source, fork it on <a href="https://github.com/AdamHjerpe/Blog">Github</a></p>

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
    <script src="js/highlight.pack.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script type="text/javascript">
      var _gauges = _gauges || [];
      (function() {
        var t   = document.createElement('script');
        t.type  = 'text/javascript';
        t.async = true;
        t.id    = 'gauges-tracker';
        t.setAttribute('data-site-id', '51c61296108d7b116700000d');
        t.src = '//secure.gaug.es/track.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(t, s);
      })();
    </script>
    <!--script type="text/javascript" src="js/prettify.min.js"></script-->
  </body>
</html>
