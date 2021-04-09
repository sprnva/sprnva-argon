<?php

$create_users_table = [
	"mode" => "NEW",
	"table"	=> "users",
	"primary_key" => "id",
	"up" => [
		"id" => "INT(11) unsigned NOT NULL AUTO_INCREMENT",
		"email" => "varchar(100) NOT NULL DEFAULT ''",
		"fullname" => "varchar(200) DEFAULT NULL",
		"username" => "varchar(150) DEFAULT NULL",
		"password" => "text NOT NULL",
		"updated_at" => "datetime DEFAULT NULL",
		"created_at" => "datetime DEFAULT NULL",
	],
	"down" => [
		"" => ""
	]
];