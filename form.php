<!DOCTYPE html>
<html>
<head>
<title>Store form data in .txt file</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: navy;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: teal;
}

.a {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Text Compressor</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#">Home</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <h3>Compress text files online for free.</h3>
  <p>Reduce the file size of text.</p>
</div>

<div class="a">
  <form method="post">
    Enter Your Text Here:<br>
    <input type="text" name="textdata" placeholder="Enter text..."><br>
    <input type="submit" name="submit">
    
  </form>
</div>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br>
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

<?php           
$del=unlink('input.txt');  
$my_file = 'input.txt';
$handle = fopen($my_file, 'w');
if(isset($_POST['textdata']))
{
$data=$_POST['textdata'];
$fp = fopen('input.txt', 'w');
fwrite($fp, $data);
fclose($fp);
header("refresh:0; url=index.php");
}
?>