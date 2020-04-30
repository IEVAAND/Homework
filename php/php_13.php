<?php
    class Member
    {
        public $firstName = 'aa';
        public $lastName = 'aa';

        public function output()
        {
        echo 'Sveiki, ponas/-ia '.$this->firstName.' '.$this->lastName.'!<br>';
        }
    }
$member1 = new Member();
$member1 -> firstName = 'Jonas';
$member1 -> lastName = 'Jonaitis';
$member1 -> output();

$member2 = new Member();
$member2 -> firstName = 'Ona';
$member2 -> lastName = 'Onaitiene';
$member2 -> output();
?>
