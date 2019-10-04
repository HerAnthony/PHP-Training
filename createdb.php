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
INSERT INTO `content` (`id`, `pagename`, `pagetitle`, `pagecontent`) VALUES
(1, 'Home', ' Welcome to our homepage, yo', '<p>This is the page content</p>'),
(2, 'contact', 'this is the contact page', '<p>Hello there, plz contact us </p>'),
(3, 'about', 'about us', '<P>hai guys, lern about us</p>'),
(4, 'Features', 'Our Features', '<2>These are our features</h2>\r\n<p>Featuring, us</p>');
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `content`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
  ";
  $result = $conn->query($sql);