<?php
include( "tutorial_autoload.php" );

$pop3 = new ezcMailPop3Transport( "pop3.example.com" );
$pop3->authenticate( "user", "password" );
$set = $pop3->fetchAll();
$parser = new ezcMailParser();
$mail = $parser->parseMail( $set );
?>