<?php
require('Animal.php');
require('Frog.php');
require('Ape.php');

$tiger = new Animal('Tiger');
echo 'Name : ' . $tiger->name;
echo '<br/>';
echo 'Legs : ' . $tiger->legs;
echo '<br/>';
echo 'Cold blooded : ' . $tiger->cold_blooded;
echo '<br/>';
echo '<br/>';

$ape = new Ape('Kera sakti');
echo 'Name : ' . $ape->name;
echo '<br/>';
echo 'Legs : ' . $ape->legs;
echo '<br/>';
echo 'Cold blooded : ' . $ape->cold_blooded;
echo '<br/>';
echo 'Yell : ';
echo $ape->yell();
echo '<br/><br/>';

$frog = new Frog('Buduk');
echo 'Name : ' . $frog->name;
echo '<br/>';
echo 'Legs : ' . $frog->legs;
echo '<br/>';
echo 'Cold blooded : ' . $frog->cold_blooded;
echo '<br/>';
echo 'Yell : ';
echo $frog->jump();