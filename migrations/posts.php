<?php
require '../config/config.php';
$db = new db();
// Post table
$sql = "CREATE TABLE `wgb_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `userdata` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";

$db->sql($sql);
$db->getQuery();
$db->reset();

?>