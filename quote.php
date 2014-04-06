<?php

$chosen_co = $_GET['co'];
$expr = $_GET['expr'];
$text = $_GET['text'];
$flag_alt = $_GET['alt'];
$time = time();

if ($flag_alt == "")
	$flag_alt = 0;

switch ($expr)
{
	case "normal":
		$offset = 0;
		break;
	case "win":
		$offset = 48;
		break;
	case "lose":
		$offset = 96;
		break;
	default:
		$offset = 0;
		break;
}

$image = imagecreatefrompng("images/backdrop/backdrop.png");
$co = imagecreatefromgif("images/co/" . $chosen_co . "-left.gif");

if ($flag_alt == "false")
	$name = imagecreatefromgif("images/co/name/" . $chosen_co . ".gif");
else
	$name = imagecreatefromgif("images/co/name/" . $chosen_co . "_eu.gif");

imagecopymerge($image, $co, 8, 2, $offset, 0, 48, 48, 100);
imagecopymerge($image, $name, 0, 44, 0, 0, 60, 15, 100);

$white = imagecolorallocate($image, 255, 255, 255);

$fontpath = realpath('fonts/');
putenv('GDFONTPATH='.$fontpath);
$font = "aw2text.ttf";

$lines = explode("\r\n", $text);

$line1 = '';
$line2 = '';

/* Attempts to break up a line into multiple parts
   Not perfect, but good for general usage */

// If we have two lines, then we are already done
if(count($lines) == 2) {
	$line1 = $lines[0];
	$line2 = $lines[1];
}
else { // Otherwise, break em up with wordwrap()
	$newLines = wordwrap($lines[0], 40, "\r\n");
	$newLines = explode("\r\n", $newLines);
	$line1 = $newLines[0];
	if(isset($newLines[1]))
		$line2 = $newLines[1];
}

Imagettftext($image, 6,0,64,24,$white,$font,$line1);
Imagettftext($image, 6,0,64,40,$white,$font,$line2);

// Capture the image data from imagegif() and then convert to to base64 for uploading to imgur
ob_start();
imagepng($image);
$image_data = ob_get_contents();
ob_end_clean();

// Get image in base64
$image64 = base64_encode($image_data);
print $image64;

?>
