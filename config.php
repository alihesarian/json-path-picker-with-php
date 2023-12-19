<?php

define('Patch', __DIR__ );
define('Slash', DIRECTORY_SEPARATOR );
define('Src', Patch . Slash . "src" . Slash);
define('Api', Src . "api.php" );

function API(){
    return require_once Api;
}