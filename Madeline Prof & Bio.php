<?php
#=----------------------------🌿 DeaTh SqUaDs TM 🌿------------------------------=#
#=--------------------------------🌿 RedshoT 🌿----------------------------------=#

date_default_timezone_set('Asia/Tehran'); //Set Time Zone

if(!file_exists('madeline.php')){
copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php'); //Madeline
}

define('MADELINE_BRANCH', '');
include 'madeline.php';
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->async(true);
$MadelineProto->loop(function () use ($MadelineProto) {
    yield $MadelineProto->start();
$time = date("H:i");
        try {
yield $MadelineProto->account->updateProfile(['about' => " RedshoT $time"]); //Bio
yield $MadelineProto->account->updateProfile(['second_name' => " @RedshoT_Kl $time"]); //Profile

} catch (\danog\MadelineProto\RPCErrorException $e) {} catch (\danog\MadelineProto\Exception $e2) {}
    });
$MadelineProto->loop();

#=--------------------------------🌿 RedshoT 🌿----------------------------------=#
#=----------------------------🌿 DeaTh SqUaDs TM 🌿------------------------------=#
 ?>
