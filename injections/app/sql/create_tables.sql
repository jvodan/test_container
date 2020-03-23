CREATE TBLE `action_tests` (
  `testid` int(11) NOT NULL,
  `name` varchar(64) NOT NULL
  `value` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `action_tests`
  ADD PRIMARY KEY (`testid`);

ALTER TABLE `action_tests`
  MODIFY `testid` int(11) NOT NULL AUTO_INCREMENT;
