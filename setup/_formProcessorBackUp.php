<?php

///////////////////////////////////////LOGO UPLOAD////////////////////////////////////////////
//if they DID upload a file...
if($_FILES['logoUrl']['name'])
{
	//if no errors...
	if(!$_FILES['logoUrl']['error'])
	{
		//now is the time to modify the future file name and validate the file
		$logoNewFileName = "logo.".substr($_FILES['logoUrl']['name'],-3);
		if($_FILES['logoUrl']['size'] > (1024000)) //can't be larger than 1 MB
		{
			$valid_file = false;
			$uploadMessage = 'Oops!  Your file\'s size is to large.';
		}
		else {
			$valid_file = true;
		}

		//if the file has passed the test
		if($valid_file)
		{
			$projectRoot = realpath(".");
			$projectRoot = join('/',
				explode('/', $projectRoot, -1)
				);
			//move it to where we want it to be
			$success = move_uploaded_file($_FILES['logoUrl']['tmp_name'], $projectRoot.'/uploads/'.$logoNewFileName);
			if ($success) {
				$uploadMessage = 'Congratulations!  Your file was accepted.'.$projectRoot.'/uploads/'.$logoNewFileName;
			}
			else {
				$uploadMessage = 'Was not moved properly'.$projectRoot.'/uploads/'.$logoNewFileName;
			}
		}
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		$uploadMessage = 'Ooops!  Your upload triggered the following error:  '.$_FILES['logoUrl']['error'];
	}
}


///////////////////////////////////////BANNER #1 UPLOAD////////////////////////////////////////////
//if they DID upload a file...
if($_FILES['bannerImgLink1']['name'])
{
	//if no errors...
	if(!$_FILES['bannerImgLink1']['error'])
	{
		//now is the time to modify the future file name and validate the file
		$bannerNewFileName1 = "banner1.".substr($_FILES['bannerImgLink1']['name'],-3);
		if($_FILES['bannerImgLink1']['size'] > (1024000)) //can't be larger than 1 MB
		{
			$valid_file = false;
			$uploadMessage = 'Oops!  Your file\'s size is to large.';
		}
		else {
			$valid_file = true;
		}

		//if the file has passed the test
		if($valid_file)
		{
			$projectRoot = realpath(".");
			$projectRoot = join('/',
				explode('/', $projectRoot, -1)
				);
			//move it to where we want it to be
			$success = move_uploaded_file($_FILES['bannerImgLink1']['tmp_name'], $projectRoot.'/uploads/'.$bannerNewFileName1);
			if ($success) {
				$uploadMessage = 'Congratulations!  Your file was accepted.'.$projectRoot.'/uploads/'.$bannerNewFileName1;
			}
			else {
				$uploadMessage = 'Was not moved properly'.$projectRoot.'/uploads/'.$bannerNewFileName1;
			}
		}
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		$uploadMessage = 'Ooops!  Your upload triggered the following error:  '.$_FILES['bannerImgLink1']['error'];
	}
}

///////////////////////////////////////BANNER #2 UPLOAD////////////////////////////////////////////
//if they DID upload a file...
if($_FILES['bannerImgLink2']['name'])
{
	//if no errors...
	if(!$_FILES['bannerImgLink2']['error'])
	{
		//now is the time to modify the future file name and validate the file
		$bannerNewFileName2 = "banner2.".substr($_FILES['bannerImgLink2']['name'],-3);
		if($_FILES['bannerImgLink2']['size'] > (1024000)) //can't be larger than 1 MB
		{
			$valid_file = false;
			$uploadMessage = 'Oops!  Your file\'s size is to large.';
		}
		else {
			$valid_file = true;
		}

		//if the file has passed the test
		if($valid_file)
		{
			$projectRoot = realpath(".");
			$projectRoot = join('/',
				explode('/', $projectRoot, -1)
				);
			//move it to where we want it to be
			$success = move_uploaded_file($_FILES['bannerImgLink2']['tmp_name'], $projectRoot.'/uploads/'.$bannerNewFileName2);
			if ($success) {
				$uploadMessage = 'Congratulations!  Your file was accepted.'.$projectRoot.'/uploads/'.$bannerNewFileName2;
			}
			else {
				$uploadMessage = 'Was not moved properly'.$projectRoot.'/uploads/'.$bannerNewFileName2;
			}
		}
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		$uploadMessage = 'Ooops!  Your upload triggered the following error:  '.$_FILES['bannerImgLink2']['error'];
	}
}

///////////////////////////////////////BANNER #3 UPLOAD////////////////////////////////////////////
//if they DID upload a file...
if($_FILES['bannerImgLink3']['name'])
{
	//if no errors...
	if(!$_FILES['bannerImgLink3']['error'])
	{
		//now is the time to modify the future file name and validate the file
		$bannerNewFileName3 = "banner3.".substr($_FILES['bannerImgLink3']['name'],-3);
		if($_FILES['bannerImgLink3']['size'] > (1024000)) //can't be larger than 1 MB
		{
			$valid_file = false;
			$uploadMessage = 'Oops!  Your file\'s size is to large.';
		}
		else {
			$valid_file = true;
		}

		//if the file has passed the test
		if($valid_file)
		{
			$projectRoot = realpath(".");
			$projectRoot = join('/',
				explode('/', $projectRoot, -1)
				);
			//move it to where we want it to be
			$success = move_uploaded_file($_FILES['bannerImgLink3']['tmp_name'], $projectRoot.'/uploads/'.$bannerNewFileName3);
			if ($success) {
				$uploadMessage = 'Congratulations!  Your file was accepted.'.$projectRoot.'/uploads/'.$bannerNewFileName3;
			}
			else {
				$uploadMessage = 'Was not moved properly'.$projectRoot.'/uploads/'.$bannerNewFileName3;
			}
		}
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		$uploadMessage = 'Ooops!  Your upload triggered the following error:  '.$_FILES['bannerImgLink3']['error'];
	}
}

///////////////////////////////////////BANNER #4 UPLOAD////////////////////////////////////////////
//if they DID upload a file...
if($_FILES['bannerImgLink4']['name'])
{
	//if no errors...
	if(!$_FILES['bannerImgLink4']['error'])
	{
		//now is the time to modify the future file name and validate the file
		$bannerNewFileName4 = "banner4.".substr($_FILES['bannerImgLink4']['name'],-3);
		if($_FILES['bannerImgLink4']['size'] > (1024000)) //can't be larger than 1 MB
		{
			$valid_file = false;
			$uploadMessage = 'Oops!  Your file\'s size is to large.';
		}
		else {
			$valid_file = true;
		}

		//if the file has passed the test
		if($valid_file)
		{
			$projectRoot = realpath(".");
			$projectRoot = join('/',
				explode('/', $projectRoot, -1)
				);
			//move it to where we want it to be
			$success = move_uploaded_file($_FILES['bannerImgLink4']['tmp_name'], $projectRoot.'/uploads/'.$bannerNewFileName4);
			if ($success) {
				$uploadMessage = 'Congratulations!  Your file was accepted.'.$projectRoot.'/uploads/'.$bannerNewFileName4;
			}
			else {
				$uploadMessage = 'Was not moved properly'.$projectRoot.'/uploads/'.$bannerNewFileName4;
			}
		}
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		$uploadMessage = 'Ooops!  Your upload triggered the following error:  '.$_FILES['bannerImgLink4']['error'];
	}
}



///////////////////////////////////////FORM HANDLING////////////////////////////////////////////
if($_FILES['logoUrl']['name']) {
	$_POST['logoUrl'] = $logoNewFileName;
}
else {
	$_POST['logoUrl'] = $_POST['existingLogoUrl'];
}


if ($_FILES['bannerImgLink1']['name']) {
	$_POST['bannerImgLink1'] = $bannerNewFileName1;
}
else {
	$_POST["bannerImgLink1"] = $_POST['existingBannerImgLink1'];
}

if ($_FILES['bannerImgLink2']['name']) {
	$_POST['bannerImgLink2'] = $bannerNewFileName2;
}
else {
	$_POST["bannerImgLink2"] = $_POST['existingBannerImgLink2'];
}

if ($_FILES['bannerImgLink3']['name']) {
	$_POST['bannerImgLink3'] = $bannerNewFileName3;
}
else {
	$_POST["bannerImgLink3"] = $_POST['existingBannerImgLink3'];
}

if ($_FILES['bannerImgLink4']['name']) {
	$_POST['bannerImgLink4'] = $bannerNewFileName4;
}
else {
	$_POST["bannerImgLink4"] = $_POST['existingBannerImgLink4'];
}

$formData = serialize($_POST);
$encodedFormData = convertQuotes($formData);
function convertQuotes($formData)
	{

		$charlist = "[^\\]'";
		return addcslashes($formData, $charlist);

	}

$fp = fopen('../config/_array.php', 'w');
fwrite($fp, '<?php $rawFormValues =');
fwrite($fp, '\''.$encodedFormData.'\';');
fwrite($fp, chr(10).'$formValues = unserialize($rawFormValues);');
fclose($fp);

$successMessage = "Thanks!";



///////////////////////////////////////EMAIL BACKUP////////////////////////////////////////////
$curUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$to = 'startersitebackups@gmail.com';

$subject = $_POST["bizName"].','. $_POST["bizId"] ;

$bound_text =	"jimmyP123";
$bound =	"--".$bound_text."\r\n";
$bound_last =	"--".$bound_text."--\r\n";

$headers =	"From: robot@startersites.com\r\n";
$headers .=	"MIME-Version: 1.0\r\n"
 	."Content-Type: multipart/mixed; boundary=\"$bound_text\"";



$message =	$bound."Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
 	."Content-Transfer-Encoding: 7bit\r\n\r\n"
 	."Domain: "
 	."$curUrl"
 	."<br><br>"
 	."$encodedFormData\r\n"
 	.$bound;


if ($_FILES['logoUrl']['name']) {
  $file1Path = $projectRoot.'/uploads/'.$logoNewFileName;
}
else {
    $file1Path = '../uploads/'.$_POST['existingLogoUrl'];
}
$file1 = file_get_contents($file1Path);


$message .= "Content-Type: image/jpg; name=\"".$file1Path."\"\r\n"
 	."Content-Transfer-Encoding: base64\r\n"
 	 	."Content-disposition: attachment; file=\"".$file1Path."\"\r\n"
 	."\r\n"
 	.chunk_split(base64_encode($file1))
 	.$bound;


// if ($_FILES['bannerImgLink']['name']) {
//   $file2Path = $projectRoot.'/uploads/'.$logoNewFileName;
// }
// else {
//   $file2Path = '../uploads/'.$_POST['existingLogoUrl'];
// }
// $file2 = file_get_contents($file2Path);


// $message .= "Content-Type: image/jpg; name=\"".$file2Path."\"\r\n"
//  	."Content-Transfer-Encoding: base64\r\n"
//  	 	."Content-disposition: attachment; file=\"".$file2Path."\"\r\n"
//  	."\r\n"
//  	.chunk_split(base64_encode($file2))
//  	.$bound_last;

mail($to, $subject, $message, $headers);

header('Location: index.php?success=1');


?>
