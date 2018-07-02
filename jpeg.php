<html>
<head>
<title>Image Converter-Png to Jpeg</title>
<head>
<h1>Image convert Png to Jpeg</h1>
<form method="post" enctype="multipart/form-data">
<input type="file" name="image" />
<input type="submit" name="submit" value="Submit" />
</form>
 </html>
<?php
 
if(isset($_POST['submit']))
{
if('image==jpeg'){	
$img = imagecreatefrompng($_FILES['image']['tmp_name']);

imagejpeg($img,'example.jpeg'); // save image in jpeg
imagedestroy($img);//destroy an image
}
 

}

?>