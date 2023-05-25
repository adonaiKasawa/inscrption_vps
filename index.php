<?php
require 'config.php';
require 'util/auth.php'; 

require LIBS.'Bootstrap.php';
require LIBS.'controller.php';
require LIBS.'Model.php';
require LIBS.'views.php';

//batabase
require LIBS.'database.php';
require LIBS.'session.php';
require LIBS.'jwt.php';
require LIBS.'hash.php';
require LIBS.'resize.php';

$bootstrap = new Bootstrap();
$bootstrap->int();

