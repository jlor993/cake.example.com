<?php
include '../vendor/autoload.php';
require '../config/keys.php';
use Mailgun\Mailgun;

$mgClient = Mailgun::create(MG_KEY,MG_API); //MailGun key 
$domain = MG_DOMAIN; //API Hostname
$from = "Mailgun Sandbox <postmaster@{$domain}>";

# Make the call to the client.
$result = $mgClient->messages()->send($domain,
array   (  
          'from'    => "{$input['name']} <{$input['email']}>",      
          'to'      => 'Jeffrey Lor <jlor993@gmail.com>',
          'subject' => 'CakePHP Contact',
          'text'    => $input['message']
        )
    );