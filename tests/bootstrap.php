<?php

use jtl\Connector\Presta\Mapper\PrimaryKeyMapper;

require '../../config/config.inc.php';
$loader = require 'library/autoload.php';

const TEST_DIR = __DIR__;

function getPrimaryKeyMapper()
{
    return new PrimaryKeyMapper();
}
