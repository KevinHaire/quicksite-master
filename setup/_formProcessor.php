<?php

$navObjects = array();

for ($i=0; $i < sizeof($_POST['navOptions']) ; $i++) { 
	$temp = explode('|', $_POST['navOptions'][$i]);
	$newNav = array();
	$newNav['title'] = $temp[0];
	$newNav['position'] = $temp[1];
	$newNav['type'] = $temp[2];
	$newNav['parameters'] = $temp[3];
	array_push($navObjects, $newNav);
}


///////////////////////////////////////IMAGE UPLOAD FUNCTION////////////////////////////////////////////
function uploadImage($inputField, $fileName, $existingFile)
{
	if ($_FILES[$inputField]['name'])
	{
		if($_FILES[$inputField]['size'] > (1024000)) //can't be larger than 1 MB
		{
			//use existing file for logo if uploaded is larger than 1mb
			$_POST[$inputField] = $_POST[$existingFile];
			$valid_file = false;
			$uploadMessage = '<div class="error"><h1>Oops!</h1> '.$_FILES[$inputField]['name'].' is to large. Please upload a file less than 1mb. <a href="index.php">Back</a></div>';
			echo '<link rel="stylesheet" type="text/css" href="../css/setup.css"/>';
			echo $uploadMessage;
		}
		else {
			$valid_file = true;
		}
		//now is the time to modify the future file name and validate the file
		$newFileName = $fileName.".".substr($_FILES[$inputField]['name'],-3);

		//if the file has passed the test
		if($valid_file)
		{
			$projectRoot = realpath(".");
			$projectRoot = join('/', explode('/', $projectRoot, -1));
			//move it to where we want it to be
			$success = move_uploaded_file($_FILES[$inputField]['tmp_name'], $projectRoot.'/uploads/'.$newFileName);
			if ($success)
			{
				$uploadMessage = 'Congratulations!  Your file was accepted.'.$projectRoot.'/uploads/'.$newFileName;
				//set the post to the new filename for use on front end
				$_POST[$inputField] = $newFileName;
			}
			else
			{
				$uploadMessage = 'Was not moved properly'.$projectRoot.'/uploads/'.$newFileName;
			}
		}
	}
	else {
		//if they dont upload a new file set the post to existing file
		$_POST[$inputField] = $_POST[$existingFile];
	}
}


///////////////////////////////////////RUN UPLOAD IMAGE FUNCTION////////////////////////////////////////////
uploadImage('logoUrl', 'logo', 'existingLogoUrl');
uploadImage('bannerImgLink1', 'banner1', 'existingBannerImgLink1');
uploadImage('bannerImgLink2', 'banner2', 'existingBannerImgLink2');
uploadImage('bannerImgLink3', 'banner3', 'existingBannerImgLink3');
uploadImage('bannerImgLink4', 'banner4', 'existingBannerImgLink4');


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
fwrite($fp, chr(10).'$navOptions = '.'\''.join(',', $_POST['navOptions']).'\';');
fclose($fp);

include $masterPath.'/setup/_navBuilder.php';

$successMessage = "Thanks!";

///////////////////////////////////////PHPMAILER EMAIL BACKUP////////////////////////////////////////////
require $masterPath.'/setup/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'startersitebackups@gmail.com';     // SMTP username
$mail->Password = 'pwmgocpuqxmavyeo';                 // SMTP password
$mail->Port = 587;
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->From = 'robot@startersitebackups.com';
$mail->FromName = 'Robot';
$mail->addAddress('startersitebackups@gmail.com');    // Name is optional
$mail->addReplyTo('startersitebackups@gmail.com', 'Information');

$file1Path ='../uploads/'.$_POST['logoUrl'];

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->addAttachment($file1Path);                     // Add attachments
$mail->addAttachment('../config/_array.php');                     // Add attachments
$mail->isHTML(true);                                  // Set email format to HTML

$curUrl = "http://$_SERVER[HTTP_HOST]";

$mail->Subject = $_POST["bizName"].','. $_POST["bizId"];
$mail->Body    = '<h1>Website Url:</h1><h2>'.$curUrl.'</h2>';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

header('Location: index.php?success=1');

?>
