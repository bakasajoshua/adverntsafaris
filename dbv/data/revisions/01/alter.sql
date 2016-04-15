ALTER TABLE  `posts` ADD  `image` VARCHAR( 1000 ) NOT NULL AFTER  `description` ;
ALTER TABLE  `posts` ADD  `location` VARCHAR( 100 ) NOT NULL AFTER  `description` ;
ALTER TABLE  `posts` ADD  `likes` INT NOT NULL AFTER  `date` ;
ALTER TABLE  `posts` DROP  `likes` ;