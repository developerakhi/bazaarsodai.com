<?php
//----------------------------------------- start edit here ---------------------------------------------//
$maxlimit = 90048576; // maxim image limit
$folder = "../../../images/products/"; // folder where to save images

// requirements
$minwidth = 80; // minim width
$minheight = 50; // minim height
$maxwidth = 5000; // maxim width
$maxheight = 4000; // maxim height

//thumbnails - 1 or 0 to allow or disallow
$thumb = 0; // allow to create thumb n.1
$thumb2 = 1; // allow to create thumb n.2
$thumb3 = 1; // allow to create thumb n.3

// allowed extensions
$extensions = array('.png', '.gif', '.jpg', '.jpeg','.PNG', '.GIF', '.JPG', '.JPEG');
//----------------------------------------- end edit here ---------------------------------------------//

	// check that we have a file
	if((!empty($_FILES["uploadfile"])) && ($_FILES['uploadfile']['error'] == 0)) {

	// check extension
	$extension = strrchr($_FILES['uploadfile']['name'], '.');
	if (!in_array($extension, $extensions))	{
		echo 'wrong file format, alowed only .png , .gif, .jpg, .jpeg
		<script language="javascript" type="text/javascript">window.top.window.formEnable();</script>';
	} else {

// get file size
$filesize = $_FILES['uploadfile']['size'];

	// check filesize
	if($filesize > $maxlimit){ 
		echo "File size is too big.";
	} else if($filesize < 1){ 
		echo "File size is empty.";
	} else {

// temporary file
$uploadedfile = $_FILES['uploadfile']['tmp_name'];

// capture the original size of the uploaded image
list($width,$height) = getimagesize($uploadedfile);

	// check if image size is lower
	if($width < $minwidth || $height < $minheight){ 
		echo 'Image is to small. Required minimum '.$minwidth.'x'.$minheight.'
		<script language="javascript" type="text/javascript">window.top.window.formEnable();</script>';
	} else if($width > $maxwidth || $height > $maxheight){ 
		echo 'Image is to big. Required maximum '.$maxwidth.'x'.$maxheight.'
		<script language="javascript" type="text/javascript">window.top.window.formEnable();</script>';
	} else {

// all characters lowercase
$filename = strtolower($_FILES['uploadfile']['name']);

// replace all spaces with _
$filename = preg_replace('/\s/', '_', $filename);

// extract filename and extension
$pos = strrpos($filename, '.'); 
$basename = substr($filename, 0, $pos); 
$ext = substr($filename, $pos+1);

// get random number
$rand = time();

// image name
$image = $basename .'-'. $rand . "." . $ext;

// check if file exists
$check = $folder . '/' . $image;
	if (file_exists($check)) {
		echo 'Image already exists';
	} else {

// check if it's animate gif
$frames = exec("identify -format '%n' ". $uploadedfile ."");
	if ($frames > 1) {
		// yes it's animate image
		// copy original image
		copy($_FILES['uploadfile']['tmp_name'], $folder . '/' . $image);

		// orignal image location
		$write_image = $folder . '/' . $image;
		//ennable form
		echo '<img src="' . $write_image . '" alt="'. $image .'" alt="'. $image .'" width="200" /><br />
<input type="text" name="top_img2" value="[IMG]'.$script_location.''.$write_image.'[/IMG]" class="location corners" />
<script language="javascript" type="text/javascript">window.top.window.formEnable();</script>';
	} else {

// create an image from it so we can do the resize
 switch($ext){
  case "gif":
	$src = imagecreatefromgif($uploadedfile);
  break;
  case "jpg":
	$src = imagecreatefromjpeg($uploadedfile);
  break;
  case "jpeg":
	$src = imagecreatefromjpeg($uploadedfile);
  break;
  case "png":
	$src = imagecreatefrompng($uploadedfile);
  break;
 }


if ($thumb == 1){
// create first thumbnail image - resize original to 80 width x 80 height pixels 
$newheight = ($height/$width)*80;
$newwidth = 80;
$tmp=imagecreatetruecolor($newwidth,$newheight);
imagealphablending($tmp, false);
imagesavealpha($tmp,true);
$transparent = imagecolorallocatealpha($tmp, 255, 255, 255, 127);
imagefilledrectangle($tmp, 0, 0, $newwidth, $newheight, $transparent);
imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

// write thumbnail to disk
$write_thumbimage = $folder .'/thumb-'. $image;
 switch($ext){
  case "gif":
	imagegif($tmp,$write_thumbimage);
  break;
  case "jpg":
	imagejpeg($tmp,$write_thumbimage,100);
  break;
  case "jpeg":
	imagejpeg($tmp,$write_thumbimage,100);
  break;
  case "png":
	imagepng($tmp,$write_thumbimage);
  break;
 }
}

if ($thumb2 == 1){
// create second thumbnail image - resize original to 125 width x 125 height pixels 
$newheight = ($height/$width)*1130;
$newwidth = 1130;
$tmp=imagecreatetruecolor($newwidth,$newheight);
imagealphablending($tmp, false);
imagesavealpha($tmp,true);
$transparent = imagecolorallocatealpha($tmp, 255, 255, 255, 127);
imagefilledrectangle($tmp, 0, 0, $newwidth, $newheight, $transparent);
imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

// write thumbnail to disk
$write_thumb2image = $folder .'/thumb2-'. $image;
 switch($ext){
  case "gif":
	imagegif($tmp,$write_thumb2image);
  break;
  case "jpg":
	imagejpeg($tmp,$write_thumb2image,100);
  break;
  case "jpeg":
	imagejpeg($tmp,$write_thumb2image,100);
  break;
  case "png":
	imagepng($tmp,$write_thumb2image);
  break;
 }
}

if ($thumb3 == 1){
// create third thumbnail image - resize original to 125 width x 125 height pixels 
$newheight = ($height/$width)*250;
$newwidth = 250;
$tmp=imagecreatetruecolor($newwidth,$newheight);
imagealphablending($tmp, false);
imagesavealpha($tmp,true);
$transparent = imagecolorallocatealpha($tmp, 255, 255, 255, 127);
imagefilledrectangle($tmp, 0, 0, $newwidth, $newheight, $transparent);
imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

// write thumbnail to disk
$write_thumb3image = $folder .'/thumb3-'. $image;
 switch($ext){
  case "gif":
	imagegif($tmp,$write_thumb3image);
  break;
  case "jpg":
	imagejpeg($tmp,$write_thumb3image,100);
  break;
  case "jpeg":
	imagejpeg($tmp,$write_thumb3image,100);
  break;
  case "png":
	imagepng($tmp,$write_thumb3image);
  break;
 }
}

// all is done. clean temporary files
imagedestroy($src);
imagedestroy($tmp);

// image preview
if ($thumb == 1){
echo "<img src='" . $write_thumbimage . "' alt='". $image ."' /><br />
<input type='hidden' name='pro_img2' value=". $write_thumbimage ." class='location corners' />
";
}
if ($thumb2 == 1){
echo "<img src='../images/products/thumb2-".$image ."' width='200px' />
<input type='hidden' id='img2' name='pro_img2' value='thumb2-".$image ."' class='location corners' />
";
}
if ($thumb3 == 1){
echo "
<input type='hidden' name='pro_img1' value='thumb3-".$image ."' class='location corners' />
";
}


	  }
	}
  }
}
	
	  }
		// error all fileds must be filled
	} else {
		echo '<div class="wrong">You must to fill all fields!</div>'; }
?>