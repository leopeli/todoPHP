mysql -uroot -p

CREATE DATABASE task;
use task;


CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
);

ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
