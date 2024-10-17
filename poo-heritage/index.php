<?php
require 'classes\User.class.php';
require 'classes\Admin.class.php';
// use maClasse\User;

$user1 = new User("Eva", "0000");
$user2 = new User("Waffo", "0000");

$admin = new Admin("expedit", "aaaaaaaa", "admin");
echo 'nom : '.  $admin->getAdmin() .'<br>';
echo 'nom : '.  $admin->getName() .'<br>';
echo 'nom : '.  $admin->getPassword() .'<br>';
echo 'nom : '.  $user1->getName() .'<br>';
// echo 'password :'.  $user2->getPassword() . '<br>';