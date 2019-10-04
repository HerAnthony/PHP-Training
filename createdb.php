<?php
require_once("connect.php");
$sql = "SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";
SET time_zone = \"+00:00\";

CREATE TABLE `content` (
  `id` int(4) UNSIGNED NOT NULL,
  `pagename` varchar(30) NOT NULL,
  `pagetitle` varchar(30) NOT NULL,
  `pagecontent` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `content` (`id`, `pagename`,`pagetitle`,`pagecontent`) VALUES
(1,'HOME','Welcome to our homepage, yo','<p>This is the page contenct</p>'),
(2,'About','A little about us.','<p>We started with a simple idea: ball bearings. And then we made more ball bearings. The end.</p>'),(3,'Contact','How to get ahold of us.','<p>Phone:</p><p>559-555-1212</p><a href="mailto:bob@bob.com">Bob</a>');


ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `content`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
  ";
$result = $conn->query($sql);
