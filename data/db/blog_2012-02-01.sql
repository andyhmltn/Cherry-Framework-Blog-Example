/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table posts
# ------------------------------------------------------------

CREATE TABLE `posts` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `date` varchar(30) NOT NULL DEFAULT '0000-00-00',
  `user_id` int(11) NOT NULL,
  `category_id` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `title`, `content`, `date`, `user_id`, `category_id`)
VALUES
	(1,'Hello world','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In euismod auctor congue. Phasellus feugiat lacus at felis tempus eget adipiscing quam tempor. Cras ultricies rhoncus sem at dictum. Donec eu arcu in sem scelerisque vulputate at ut dui. Pellentesque non arcu et nunc ullamcorper pharetra. Mauris leo diam, pharetra a suscipit at, tempus sed risus. Donec laoreet tortor ut nulla condimentum fringilla. Morbi aliquam lacus scelerisque ligula laoreet adipiscing.\n\nSuspendisse elementum, nisl sed condimentum vestibulum, est massa vehicula metus, a dapibus felis urna ac magna. Nunc turpis mi, porttitor eget dapibus sit amet, facilisis tincidunt risus. Mauris vestibulum leo nec urna molestie dictum. Nam lobortis tempus sapien porttitor consequat. Nullam sem elit, accumsan sed scelerisque sed, elementum nec magna. Curabitur aliquet porttitor ligula, a ultricies nunc pulvinar eget. Nam malesuada, urna sit amet vehicula semper, nulla leo condimentum arcu, sit amet porta arcu massa at neque. In consectetur neque in augue euismod lacinia.','2nd of january 2012',1,0),
	(2,'Second post','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In euismod auctor congue. Phasellus feugiat lacus at felis tempus eget adipiscing quam tempor. Cras ultricies rhoncus sem at dictum. Donec eu arcu in sem scelerisque vulputate at ut dui. Pellentesque non arcu et nunc ullamcorper pharetra. Mauris leo diam, pharetra a suscipit at, tempus sed risus. Donec laoreet tortor ut nulla condimentum fringilla. Morbi aliquam lacus scelerisque ligula laoreet adipiscing.\n\nSuspendisse elementum, nisl sed condimentum vestibulum, est massa vehicula metus, a dapibus felis urna ac magna. Nunc turpis mi, porttitor eget dapibus sit amet, facilisis tincidunt risus. Mauris vestibulum leo nec urna molestie dictum. Nam lobortis tempus sapien porttitor consequat. Nullam sem elit, accumsan sed scelerisque sed, elementum nec magna. Curabitur aliquet porttitor ligula, a ultricies nunc pulvinar eget. Nam malesuada, urna sit amet vehicula semper, nulla leo condimentum arcu, sit amet porta arcu massa at neque. In consectetur neque in augue euismod lacinia.','3rd of january 2012',1,0);

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table posts_tags
# ------------------------------------------------------------

CREATE TABLE `posts_tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `posts_tags` WRITE;
/*!40000 ALTER TABLE `posts_tags` DISABLE KEYS */;

INSERT INTO `posts_tags` (`id`, `post_id`, `tag_id`)
VALUES
	(1,1,1),
	(2,2,2);

/*!40000 ALTER TABLE `posts_tags` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tags
# ------------------------------------------------------------

CREATE TABLE `tags` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;

INSERT INTO `tags` (`id`, `name`)
VALUES
	(1,'test'),
	(2,'Hello');

/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(11) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `salt` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `salt`)
VALUES
	(1,'andy','fe1b6aefe48e8ea36060cc3ec7e4bc13a997aac00afbbc189e04eb940afc3917','5xg94Sy3yPQyARzMm51YFS'),
	(3,'','1855d8ab90426db3255191b8f49e917f00640396cb76a4e079816fc347a6d99a','EUK2NutO1S0nEMRIBytvuj'),
	(4,'demo','c4e58ce63090dfe0207fd0bf980091a4955981b23be89a0c2558a1925730057c','1D6DzKqLLLkmvc/CxFGYAN');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
