<?php 
#function that validate the user email
function is_valid_email($email){
$eregpat="^[A-z][A-z0-9_-]+([.]([A-z0-9_-])+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$";
return eregi($eregpat,$email );
}
 
#function that validate user comments
function is_valid_comments($data){
return ($data=="");
}
#function that cleans the user data against 
#email header injection so we clean it
function safe_mail($data){
#clean non standerd alpha numeric and some special symbels
#clean email related headers like header,from,body,'cc','bcc',\r\n etc
$patterns=array('/[^a-zA-Z0-9\.-@_]/','from','header','body','CC','BCC');
return preg_replace($patterns,'',$data);
}
 
 
function send_mail($data){
#do what ever you want here with user data
#like storing into database or sending email to admin
}
 
#clean all data from user contact form and process this to store in mysql and sending email

function process_contactform(){
$data=array();
$data['name']=safe_mail($_POST['sfsf_name']);
$data['email']=safe_mail($_POST['jflsjls_email']);
$data['website']=safe_mail($_POST['kipmp_website']);
$data['comments']=safe_mail($_POST['comments_sfs']);
send_mail($data);
}
 
 
require_once('recaptchalib.php');
 
// Get a key from http://recaptcha.net/api/getkey
$publickey = "6LdVSQYAAAAAAFwb2919Sf8Uhcq3Z55bQc7d8Bx0";
$privatekey = "6LdVSQYAAAAAAIVT-VaJlea6WuOlLqJtt0UUK6xZ";
 
# the response from reCAPTCHA
$resp = null;
#error cacher
$errors = array();
 
if(isset($_POST['Submit'])){
# was there a reCAPTCHA response?
if (isset($_POST["recaptcha_response_field"])) {
        $resp = recaptcha_check_answer ($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);
 
        if ($resp->is_valid) {
                echo "You got it!";
        } else {
                # set the error code so that we can display it
                $errors[] = $resp->error;
        }
}
 
#check the page that submits is belong to our domai or not
#remember some servers don't allow this data or don't have information
if(strpos('localhost', $_SERVER['HTTP_REFERER'])==false){
$errors[] ='This page can be prcessed from this domain only.';
}
 
#check email validation
if(isset($_POST['jflsjls_email']) and !is_valid_email($_POST['jflsjls_email'])){
$errors[]='Invalid email address.'; 
}
 
#check comment validation 
if(isset($_POST['comments_sfs']) and !is_valid_comments($_POST['comments_sfs'])){
$errors[]='Trying to email header injection.';
}
 
#check user is bot or not
if(isset($_POST['owjrj_ran']) and !$_POST['owjrj_ran']==''){
$errors[]='You are spam bot.';
}
 
#check user is bot or not
if(isset($_POST['mpmpm_rwrw']) and !$_POST['mpmpm_rwrw']==''){
$errors[]='You are spam bot.';
}
 
#check all errors and process contact form
if( isset($_POST['Submit']) and count($errors)==0){
process_contactform();
}
 
 
}
 
#if errors display
if(isset($_POST['Submit'])){
if(count($errors)>0){
echo '<ul class="errors" >';
foreach($errors as $k=>$v){
echo '<li>'.$v.'</li>';
}
echo '</ul>';
}
}
?>