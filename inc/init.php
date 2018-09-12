<?php

// Assign file paths to PHP constants

define("INC_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(INC_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("TEMPLATES_PATH", INC_PATH . '/templates');

require_once 'functions.php';
