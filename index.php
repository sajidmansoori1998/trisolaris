

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Trisolaris</title>
  <link rel="stylesheet" href="css/general.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
  <?php

  ?>
  <div id="head">
  <h1><a href="javascript: void(0);" id="index-title">
  <?php
    // 预加载内容
    // 输出标题
    require 'php/load-nav.php';
    $tree = getnav($conn, "indexnav", 0);
  ?>
  </a></h1>
  </div>

  <div id="user-panel">
    <p><span><a href="a/2/" target="_blank">投稿</a></span></p>
  </div>

  <div id="features-panel">
  </div>
  <div id="index-body">
    <ul id="great-nav">
      <?php
        insertnav($tree, 2);
      ?>
    </ul>
  </div>

  <br><br>
  <p><h5>Copyright &copy; 2018 Sunshine+Ice All rights reserved.</h5></p>
</body>
</html>