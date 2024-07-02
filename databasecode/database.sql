CREATE TABLE `user` {
    `username` VARCHAR(30) NOT NULL PRIMARY KEY,
    `password` VARCHAR(100) NOT NULL,
    `email` VARCHAR(30),
    `birthday` DATE,
    `fullname` VARCHAR(50)
}


CREATE TABLE `posts` {
    `post_id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `username` VARCHAR(30) NOT NULL,
    `post` TEXT NOT NULL,
    `upload_date` DATE NOT NULL,
    `tag` VARCHAR(30),
    FOREIGN KEY (`username`) REFERENCES `user`(`username`)
}

CREATE TABLE `comments` {
    `comment_id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `post_id` INT NOT NULL,
    `username` VARCHAR(30) NOT NULL,
    `comment` TEXT NOT NULL,
    `upload_date` DATE NOT NULL,
    FOREIGN KEY (`post_id`) REFERENCES `posts`(`post_id`),
    FOREIGN KEY (`username`) REFERENCES `user`(`username`)
}

CREATE TABLE `photos` {
    `photo_id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `username` VARCHAR(30) NOT NULL,
    `path` VARCHAR(100) NOT NULL,
    `upload_date` DATE NOT NULL,
    FOREIGN KEY (`username`) REFERENCES `user`(`username`)
}