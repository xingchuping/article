CREATE DATABASE IF NOT EXISTS article DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE article;

DROP TABLE IF EXISTS info;

CREATE TABLE info(

id int(11) unsigned auto_increment primary key,

title char(100),

author char(50),

description varchar(255),

content text,

dateline int(11) DEFAULT 0

);