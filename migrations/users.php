<?php
require '../config/config.php';
$db = new db();
// Post table
$sql = "CREATE TABLE `wgb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `level` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `session_id` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;";

$db->sql($sql);
$db->getQuery();
$db->reset();

?>