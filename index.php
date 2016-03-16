<?php
require 'vendor/autoload.php';

use \Linkmaker\Paperboy\Mailgun as foo;

$mail = new foo();

$mail->send("","","");