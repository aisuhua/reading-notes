<?php

include('not_exists.php');
//Warning: include(): Failed opening 'not_exists.php'

echo 'I will execute.';


require('not_exists.php');
//Fatal error: require(): Failed opening required 'not_exists.php'

echo 'I can\'t execute.';








