<html>
<head>
<title>Image Converter-Jpeg to Png</title>
<head>
<h1>Image convert Jpeg to Png</h1>
<body>
<form method="post" enctype="multipart/form-data">
<input type="file" name="image" />
<input type="submit" name="submit" value="Submit" />
</form>
</body>
 </html>
<?php
 
if(isset($_POST['submit']))
{
if('image==jpeg'){	
$img = imagecreatefromjpeg($_FILES['image']['tmp_name']); 

imagepng($img,'example.png'); // save image in png
imagedestroy($img);//destroy an image
}
 

}

?>