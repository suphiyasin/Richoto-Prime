<?php

    use Hasokeyk\Instagram\Instagram;

    require "../../vendor/autoload.php";

    $username = 'username';
    $password = 'password';

    $instagram = new Instagram($username, $password);
    $instagram->login->login();

    $login = $instagram->login->login_control();
    if($login){

        $user = $instagram->user->get_me_most_seen_in_feed();
        print_r($user);

    }
    else{
        echo 'Login Fail';
    }
