<?php

// Create a database 
"CREATE DATABASE product";


// Create a table - posts 
"CREATE TABLE posts(
    title VARCHAR(100),
    code INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(500),
    tags VARCHAR(100),
    views INT(100))
";

// insert dummy records for posts tables
"INSERT INTO `posts`(`title`, `code`, `description`, `tags`, `views`) VALUES ('fish man life','','A fish playing chess','','20')";
"INSERT INTO `posts`(`title`, `code`, `description`, `tags`, `views`) VALUES ('fish man life','','A fish playing chess','','20')";
"INSERT INTO `posts`(`title`, `code`, `description`, `tags`, `views`) VALUES ('fish man life','','A fish playing chess','','20')";
"INSERT INTO `posts`(`title`, `code`, `description`, `tags`, `views`) VALUES ('fish man life','','A fish playing chess','','20')";
"INSERT INTO `posts`(`title`, `code`, `description`, `tags`, `views`) VALUES ('fish man life','','A fish playing chess','','20')";
"INSERT INTO `posts`(`title`, `code`, `description`, `tags`, `views`) VALUES ('fish man life','','A fish playing chess','','20')";



// Create a table - comments 
"CREATE TABLE comments(
    comment  VARCHAR(100),
    post_id int ,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP)
";
// create indexes
"ALTER TABLE `comments` ADD INDEX(`post_id`)";

// create FOREIGN KEY
"ALTER TABLE `comments` ADD FOREIGN KEY (`post_id`) REFERENCES `posts`(`code`) ON DELETE RESTRICT ON UPDATE RESTRICT";



// insert dummy records for comments tables
"INSERT INTO `comments` (`comment`, `post_id`, `date`) VALUES ('good topic', '1', current_timestamp())";
"INSERT INTO `comments` (`comment`, `post_id`, `date`) VALUES ('The fish man is great', '6', current_timestamp())";

// make a query to get all posts that have comments using ( where in )
"SELECT * FROM posts
WHERE description IS NOT NULL";

?>