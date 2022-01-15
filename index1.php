<html>
<head>
<title>run my python files</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.a:link, .a:visited {
  background-color: navy;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 25px;
  border: 2px solid #73AD21;
}

.a:hover, .a:active {
  background-color: teal;
}

.div {
  background-image: linear-gradient(#d3cce3, #e9e4f0);
  min-width: 300px;
  border: 15px solid black;
  padding: 50px;
  margin: 20px;
}
</style>
<?PHP
echo'<nav class="navbar navbar-inverse"><div class="container-fluid"><div class="navbar-header"><a class="navbar-brand" href="form.php">Text Compresser</a></div><ul class="nav navbar-nav navbar-right"><li><a href="form.php">Home</a></li></ul></div></nav>';
echo'<center><div class="div">';

/*$filename1 = fopen("dictionary.txt", "r") or die("Unable to open file!");
echo 'Encoded Values : '.fread($filename1,filesize("dictionary.txt"));
fclose($filename1);

$filename2 = fopen("traversals.txt", "r") or die("Unable to open file!");
echo '<br>Binary Tree String : '.fread($filename2,filesize("traversals.txt"));
fclose($filename2);*/
echo '<br>Decompressed Text : ';
echo shell_exec("python decoder.py 'parameter1'");

$filename3 = 'input.txt';
echo '<br>Input File Size : '.filesize($filename3).' bytes<br>';

$filename4= fopen("size.txt", "r") or die("Unable to open file!");
while(!feof($filename4))
{
echo fgets($filename4)."<br>";
}
/*echo '<br>'.fread($filename4,filesize("size.txt"));*/
fclose($filename4);
echo'</div><br><a class="a" href="form.php">Submit another text?</a></center>';
echo'<br><br><br><br><br><br><br><br><br><br><hr><p style="text-align:center">Do you like this website? Share it!<br><br><a href="http://facebook.com/flashissue" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/ueBIjxRoTBuYR6XWW1iO_v3qVW5nRUq5VZF9RQXi2_twitter.png" /> </a>&nbsp; &nbsp; &nbsp;<a href="http://plus.google.com" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/gHd2XoyiQbKBqljm7bzg_63j3xtd7SX28TTMeOSfZ_google.png" /> </a>&nbsp; &nbsp;&nbsp;<a href="http://twitter.com/flashissue" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/MsIJsIsDT9WLAxxH4aIK_OgdHV3vxSR2737LGd8cq_facebook.png" /> </a>&nbsp; &nbsp;&nbsp;<a href="http://pinterest.com" target="_blank"><img alt="" src="https://s3.amazonaws.com/flashissue/b8Xt2lN8TCKhilmoHXGW_TCjqF6FgS86WoWzUOQCh_pinterest.png" /> </a></p>';
?>
</head>