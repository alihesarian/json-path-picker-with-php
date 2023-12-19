<?php
  require_once 'config.php';
  $json = API();
?>
<!doctype HTML>
<html>
<head>
  <title>Json Path Picker With PHP</title>
  <meta charset="utf-8"/>

  <link href="./public/styles.css" type="text/css" rel="stylesheet"/>
  <link href="./public/jsonpath-picker.css" type="text/css" rel="stylesheet"/>
</head>
<body>

  <div class="content">
    <pre id="json-renderer" class="json-tree"></pre>
  </div>

  <div class="path-container">
    <form action="filter.php" method="POST" id="fetch-patch">
      <input class="path" type="text">
      <button type="submit">Fetch</button>
      <input type="hidden" class="json-input" value='<?php echo $json ?>'>
    </form>

    <div class="response"></div>
  </div>
  <script src="./public/jsonpath-picker.js"></script>
  <script src="./public/jquery-3.7.1.min.js"></script>
  <script src="./public/scripts.js"></script>
</body>
</html>
