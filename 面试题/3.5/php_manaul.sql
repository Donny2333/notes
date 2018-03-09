
CREATE DATABASE IF NOT EXISTS phpmanual DEFAULT CHARSET utf8 COLLATE utf8_general_ci;
DROP TABLE IF EXISTS `php_index`;
CREATE TABLE `php_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `link` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


