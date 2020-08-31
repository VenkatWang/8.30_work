<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
2312sdasdasdasdas
  <?php foreach(  $data as $v){?>
   <ul>
       <li><?php echo $v["name"]?></li>
       <li><?php echo $v["age"]?></li>
       <li><?php echo $v["sex"]?></li>
   </ul>
  <?php } ?>

  <a href="index.php/teach/log/add">
      添加日报
  </a>
</body>
</html>