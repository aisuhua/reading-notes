<?php

// POST localhost/reading-notes/php/demo02/index.php

var_dump(file_get_contents('php://input'));

var_dump(file_get_contents('php://stdin')); //只适合于 CLI

