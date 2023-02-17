-- Dumping database structure for updatehos
CREATE DATABASE IF NOT EXISTS `updatehos` /*!40100 DEFAULT CHARACTER SET tis620 */;
USE `updatehos`;

-- Dumping structure for table updatehos.updatehosxp
CREATE TABLE IF NOT EXISTS `updatehosxp` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Size` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
