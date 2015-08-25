<head>
...
  <?php criticalCSS();  // function call to inline the critical CSS ?>

  <script>
    loadCSS( ... ){ ... }  // include loadCSS here...
    loadCSS("PATH/TO/main.css");  // load main.css async
  </script>
  <noscript>
    <link href="PATH/TO/main.css" rel="stylesheet">
  </noscript>
...
</head>
