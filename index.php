<html>
<body>
<h1>Shashi Kant</h1>
<h3>Welcome to my page</h3>

<p>Terraform integrated with AWS</p>
<br>
<?php
  $cloudfront_url = `head -n1 myimg.txt`;
  $img_path = "https://".$cloudfront_url."/awsefs.jpg";
  echo "<br>";
  echo "<img src='${img_path}' width=800 height=450>";
?>
</body>
</html>
