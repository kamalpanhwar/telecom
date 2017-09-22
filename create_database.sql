CREATE TABLE `SMSInbox` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `DID` varchar(25) DEFAULT NULL,
  `FromNumber` varchar(25) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `OID` varchar(20) DEFAULT NULL,
  `ident` varchar(50) DEFAULT NULL,
  `Rate` double DEFAULT 0,
  `alert` int(1) DEFAULT 0,
  `SMSLink` int(1) DEFAULT 1,
  `IsDeleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
