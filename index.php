<html>
<head>
<title>run my python files</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body{
  
}
.b {
  background-image: linear-gradient(#d3cce3, #e9e4f0);
  width: 300px;
  border: 15px solid black;
  padding: 50px;
  margin: 20px;
}
.c:link, .c:visited {
  background-color: navy;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 25px;
  border: 2px solid #73AD21;
}

.c:hover, .c:active {
  background-color: teal;
}

</style>
<?PHP
echo'<nav class="navbar navbar-inverse"><div class="container-fluid"><div class="navbar-header"><a class="navbar-brand" href="form.php">Text Compresser</a></div><ul class="nav navbar-nav navbar-right"><li><a href="form.php">Home</a></li></ul></div></nav>';
echo'<center><div class="b">';
echo shell_exec("python encoder.py 'parameter1'");
echo'<br><br>';
$filename = 'input.txt';
echo 'File Size : '.filesize($filename).' bytes';
echo'</div></center>';
?>
</head>
<body>
<center>
<a class="c" href="index1.php">Submit File for Compression</a>
</center>
<br><br><br><br>
<br><br><br>
<hr>
<p style="text-align:center">
<!--Facebook icon-->
Do you like this website? Share it!<br><br>
<a href="http://facebook.com/flashissue" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/ueBIjxRoTBuYR6XWW1iO_v3qVW5nRUq5VZF9RQXi2_twitter.png" /> </a>&nbsp; &nbsp; &nbsp;
<!--Google+ icon-->
<a href="http://plus.google.com" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/gHd2XoyiQbKBqljm7bzg_63j3xtd7SX28TTMeOSfZ_google.png" /> </a>&nbsp; &nbsp;&nbsp;
<!--Twitter icon-->
<a href="http://twitter.com/flashissue" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/MsIJsIsDT9WLAxxH4aIK_OgdHV3vxSR2737LGd8cq_facebook.png" /> </a>&nbsp; &nbsp;&nbsp;
<!--Linkedin icon-->
<a href="http://pinterest.com" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/b8Xt2lN8TCKhilmoHXGW_TCjqF6FgS86WoWzUOQCh_pinterest.png" /> </a>
</p>
</body>
</html>