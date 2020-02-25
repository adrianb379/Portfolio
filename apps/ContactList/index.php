<?php

require_once 'app/core/Core.php';
require_once 'app/config/Config.php';
require_once 'app/controllers/Login.php';
require_once 'app/controllers/Signup.php';
require_once 'app/controllers/Signingup.php';
require_once 'app/controllers/Loging.php';
require_once 'app/controllers/Logout.php';
require_once 'app/controllers/Newcontact.php';
require_once 'app/controllers/Newitem.php';
require_once 'app/controllers/Delete.php';
require_once 'app/controllers/Edit.php';
require_once 'app/controllers/Editing.php';
require_once 'app/models/Writing.php';
require_once 'app/models/Connection.php';
require_once 'app/models/Entering.php';
require_once 'app/models/Writingitem.php';
require_once 'app/models/Eraser.php';
require_once 'app/models/Editor.php';

$core = new Core;
$core->start($_GET);