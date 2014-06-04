 <head>
    <meta charset="utf-8">
    <title>Yo dono y todos ganamos</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
  </head>
  <body>

    <div id="container">
     
 
      <div id="content">
       
 
        <div class="content">
            <?php include_component('bloque', 'bloqueHeader'); ?>
          <?php echo $sf_content ?>
        <?php include_component('bloque', 'bloqueFooter'); ?> 
        </div>
      </div>
    </div><!--end container-->
  </body>
</html>