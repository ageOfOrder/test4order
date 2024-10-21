<?php
/*
 * Always create a safe place
 * to hide the passwords and sensitive information
 * and your haiku
 * 
 * */
$tfoUser = 'tfouser';
$tfoPasswd = '$BendingHectic2025!';
$tfoDbname = 'tfdbase';
$tfoTableOne = 'tfrecords';

// https://tableplus.com/blog/2018/04/postgresql-how-to-grant-access-to-users.html

// GRANT CONNECT ON DATABASE tfdbase TO tfouser;
// GRANT ALL PRIVILEGES ON DATABASE tfdbase TO tfouser;

// CREATE ROLE tfouser LOGIN;
// CREATE USER tfouser;

// ALTER ROLE tfouser LOGIN;

//$tfoConnect = pg_connect("dbname=$tfoDbname user=$tfoUser password=$tfoPasswd");
$tfoConnect = pg_connect("dbname=$tfoDbname user=$tfoUser password=$tfoPasswd");
?>