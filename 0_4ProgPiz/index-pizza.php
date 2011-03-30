<?php
/**
 * index.php: homework for Anm293 
 * 
 * learning how to use SWIFT mailer
 * @author Elle Krievs
 * @category Anm293
 * Project 03 
 * @version  0.001
 * @link https://dailyTangents@github.com/dailyTangents/Project-Homework03.git
 */ 
 /*
  * @todo: Figure out the "No grammer constraints " in problem column
  */

  date_default_timezone_set('America/Chicago');

  @ini_set('display_errors','Off');
  @ini_set('log_errors','On');
  @ini_set('max_execution_time', 300);
  
//  echo ini_get('display_errors') . ' ... display errors<br />';
//  echo ini_get('log_errors') . ' ... log errors <br />';
//  echo ini_get('max_execution_time') . ' ... max execution time<hr /> ';
//  print_r(ini_get_all());
//  exit;
 
// error_reporting(E_ALL | E_STRICT);
   error_reporting(E_ALL & ~E_STRICT);
  


  if( PATH_SEPARATOR  == ';' )
    define('SLASH','\\');
  else
    define('SLASH','/'); 

  define('APP_PATH', realpath(dirname(__FILE__)));
  
  define('CACHE_PATH',APP_PATH . SLASH . 'temp' . SLASH);
   
  set_include_path('.'.PATH_SEPARATOR.implode(PATH_SEPARATOR, array(
    realpath(APP_PATH . SLASH . 'library')
    ,realpath(APP_PATH . SLASH . 'library' . SLASH . 'PEAR' . SLASH . '1.9.1' )
    ,realpath(APP_PATH . SLASH . 'library' . SLASH . 'PEAR' . SLASH . 'Cache_Lite' . SLASH . '1.7.8')
  )));  
  @(include_once('Lite.php'));

echo "this is a test <br />";

require_once 'lib/swift_required.php';
 
//Create a transport
$transport=Swift_SmptTransport::newInstance() 
setUsername('dailyTangents')
 ->setPassword('lkr4Class')
;
setHost('smtp.gmail.com')
 ->setPort(465)
 ->setEncryption('ssl')
;
$mailer=Swift_Mailer::newInstance($transport);


//Create the message
$message = Swift_Message::newInstance()

  //Give the message a subject
  ->setSubject('Elle Krievs, SWIFT Mailer 4.0')

  //Set the From address with an associative array
  ->setFrom(array('dailyTangents@gmail.com' => 'Elle Krievs'))

  //Set the To addresses with an associative array
 // ->setTo(array('dailyTangents@gmail.com', 'other@domain.org' => 'A name'))
  ->setTo(array('lkrievs9766@kvcc.edu'))

    //Set the Reply-To addresses with an associative array
 // ->setReplyTo(array('dailyTangents@gmail.com', 'other@domain.org' => 'A name'))
  ->setReplyTo(array('dailyTangents@gmail.com'))
  
  //Give it a body
  ->setBody('I rock at PHP')

  //And optionally an alternative body
  ->addPart('<q>I really rock at PHP</q>', 'text/html')

  //Optionally add any attachments
//  ->attach(Swift_Attachment::fromPath('my-document.pdf'))
  ;
    // set header information
    $headers = $message->getHeaders();
    // set email content type 
    $content=$headers->get('Content-Type');
    $content->setValue('text/html');
    
    // add email text header
    $headers->addTextHeader('ANM293','CNM-270');
   
    
     echo $headers->toString();
 exit;
//Send the message
$result=$mailer->send($message) ;

  
  