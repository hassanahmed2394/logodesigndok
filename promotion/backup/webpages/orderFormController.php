<?php
## CONFIG ##
include("connectiondb.php");

# LIST EMAIL ADDRESS
$recipient = "forms@Logodesigndok.com";

# SUBJECT (Subscribe/Remove)
$subject = "Banner Form Query";
// $ebpage = "App development";

# RESULT PAGE
$location = "/thankyou";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = "support@Logodesigndok.com";


if (isset($_POST['NDA'])) {

    $sNDA = "Required";

} else {

   $sNDA = "Not Required";

}

# MAIL BODY
$subscriber_email = $_REQUEST['Email'];
$subscriber_subject = "THANK YOU FOR YOUR ORDER, ONE OF OUR CONSULTANTS WILL REACH YOU SOON.
";
$subscriber_email_data = file_get_contents('https://Logodesigndok.com/email/queryFormThankyou.html');







if(isset($_REQUEST['hiddencapcha']) && $_REQUEST['hiddencapcha'] == "" ){
  if(isset($_REQUEST['Name']) && $_REQUEST['Name'] != "" 
  && isset($_REQUEST['Email']) && $_REQUEST['Email'] != "" 
  && isset($_REQUEST['pc']) && $_REQUEST['pc'] != ""
  && isset($_REQUEST['ctry']) && $_REQUEST['ctry'] != ""
  && isset($_REQUEST['Number']) && $_REQUEST['Number'] != ""
  && isset($_REQUEST['Packages']) && $_REQUEST['Packages'] != ""){


$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "Email: ".$_REQUEST['Email']." \n";
$body .= "Country Code: ".$_REQUEST['pc']." \n";
$body .= "Country: ".$_REQUEST['ctry']." \n";
$body .= "Number: ".$_REQUEST['Number']." \n";
$body .= "Package Selected: ".$_REQUEST['Packages']." \n";
$body .= "NDA Status: ".$sNDA." \n";
$body .= "Message: ".$_REQUEST['Comment']." \n";



if($_FILES["file"]["error"]>0)
{
    echo "FILE ERROR";
    die();
}
// $filename = "FOLDER/".$_FILES["file"]["name"];

 $info = pathinfo($_FILES['wordfile']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = time().'.'.$ext; 

$target = '../Folder/'.$newname;
// move file to a folder
if (!move_uploaded_file($_FILES["wordfile"]["tmp_name"], $target)) { 
    //  echo "Sorry, there was an error uploading your file.";
    //  die();
    $target = 'No file attached';
 }

$body .= "file: ".$target." \n";




// switch ($_REQUEST['Packages']) {


//       case 'Special Logo Package - $17.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=8b3b0c14-7678-11e9-b9f9-0cc47ac0118b";
//          break;
         
//       case 'Bronze Logo Package - $41.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=a7cfafc2-7678-11e9-b9f9-0cc47ac0118b";
//          break;


//       case 'Silver Logo Package - $74.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=bfa6f50e-7678-11e9-b9f9-0cc47ac0118b";
//          break;

//       case 'Gold Logo Package - $99.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=d579db80-7678-11e9-b9f9-0cc47ac0118b";
//          break;

//       case 'Platinum Logo Package - $144.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=eda1f51a-7678-11e9-b9f9-0cc47ac0118b";
//          break;

//       case 'Basic Illustration Logo Package - $149.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=04254c0f-7679-11e9-b9f9-0cc47ac0118b";
//          break;

//       case 'Startup Illustration Logo Package - $249.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=1a0957cc-7679-11e9-b9f9-0cc47ac0118b";
//          break;               

//       case 'Professional Illustration Logo Package - $349.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=300f4a2a-7679-11e9-b9f9-0cc47ac0118b";
//          break;

//       case '3D Logo Package - $399.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=4779c2a4-7679-11e9-b9f9-0cc47ac0118b";
//          break;

//       case 'Stationery Package - $74.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=907d80e8-7679-11e9-b9f9-0cc47ac0118b";
//          break;         

//       case 'Infographic Package - $139.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=ac291530-7679-11e9-b9f9-0cc47ac0118b";
//          break;

//       case 'Brochure/Flyer Package - $134.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=c3b13cf8-7679-11e9-b9f9-0cc47ac0118b";
//          break;

//       case 'Basic Social Package - $94.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=bbacfd50-767d-11e9-b9f9-0cc47ac0118b";
//          break;

      
//       case 'Advance Social Package - $224.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=d2f5519f-767d-11e9-b9f9-0cc47ac0118b";
//          break;

      
//       case 'Banner As Package - $134.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=ee8774f6-767d-11e9-b9f9-0cc47ac0118b";
//          break;          

      
//       case 'Email Template Package - $94.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=074d3ccc-767e-11e9-b9f9-0cc47ac0118b";
//          break;

//       case 'Landing Pages - $144.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=211b3d90-767e-11e9-b9f9-0cc47ac0118b";
//          break;

      
//       case 'Startup Website Package - $259.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=ea0353be-7679-11e9-b9f9-0cc47ac0118b";
//          break;


//       case 'Professional Website Package - $409.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=006db6ba-767a-11e9-b9f9-0cc47ac0118b";
//          break;


//       case 'Elite Website Package - $709.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=1a34c05f-767a-11e9-b9f9-0cc47ac0118b";
//          break;


//       case 'E-Commerce Website Package - $1004.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=346c12c5-767a-11e9-b9f9-0cc47ac0118b";
//          break;


//       case 'Silver Website Package - $1609.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=4d756ef2-767a-11e9-b9f9-0cc47ac0118b";
//          break;


//       case 'Startup Video Package - $209.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=918da46f-767a-11e9-b9f9-0cc47ac0118b";
//          break;


//       case 'Classic Video Package - $409.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=aa3650e2-767a-11e9-b9f9-0cc47ac0118b";
//          break;


//       case 'Premium Video Package - $809.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=c12e8110-767a-11e9-b9f9-0cc47ac0118b";
//          break;


//       case 'Unlimited Animation Package - $1409.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=e8f5d091-767a-11e9-b9f9-0cc47ac0118b";
//          break;


//       case 'Professional 3D VFX Animation - $2009.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=02850dae-767b-11e9-b9f9-0cc47ac0118b";
//          break;

//       case 'Elite 3D VFX Animation - $2509.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=200f733b-767b-11e9-b9f9-0cc47ac0118b";
//          break;                                             


//       case 'Seo Booster Package - $1,499.00':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=a9c368c7-767c-11e9-b9f9-0cc47ac0118b";
//          break;


//       case 'Seo Value Package - $1,999.00':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=c55a3e5c-767c-11e9-b9f9-0cc47ac0118b";
//          break;

//       case 'Seo Pro Package - $2,599.00':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=de08a6bf-767c-11e9-b9f9-0cc47ac0118b";
//          break;


//       case 'Article Writing Package - $25.00':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=2eb78816-767d-11e9-b9f9-0cc47ac0118b";
//          break;


//       case 'Press Release Package - $30.00':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=47dff5f1-767d-11e9-b9f9-0cc47ac0118b";
//          break;


//       case 'Web Content Writing Package - $35.00':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=5f7d5d78-767d-11e9-b9f9-0cc47ac0118b";
//          break;


//       case 'Startup Combo Package - $699.99':
//          $location = "https://www.designquotations.com/terminal/paynow/index.php?id=45472f6d-767e-11e9-b9f9-0cc47ac0118b";
//          break;                     

          




//     default:
//         $location = "/thankyou";
//         break;

// }






if (mysqli_connect_errno()){  echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
else{ $sql = 'insert into orderForm (cust_name ,cust_email ,country_code ,country_name, cust_phonenumber, package_selected , attachment_path ,cust_message, required_NDA ) values ("'.$_REQUEST['Name'].'","'.$_REQUEST['Email'].'","'.$_REQUEST['pc'].'","'.$_REQUEST['ctry'].'","'.$_REQUEST['Number'].'","'.$_REQUEST['Packages'].'","'.$target.'","'.$_REQUEST['Comment'].'","'.$sNDA.'")';

mysqli_query($con,$sql);
mysqli_close($con);
}

$headers = "From: " . $sender . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

# add more fields here if required
## SEND MESSGAE ##

mail( $recipient, $subject, $body,  "From: $sender" ) or die ("Mail could not be sent.");
mail( $subscriber_email, $subscriber_subject, $subscriber_email_data, $headers) or die ("Unable to send email to subscriber");

## SHOW RESULT PAGE ##
header( "Location: $location" );

 }

    
}

?>
