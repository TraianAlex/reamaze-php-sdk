<?php
/**
 * reamaze-php-sdk
 *
 * @author    Mikus Rozenbergs <mikus.rozenbergs@gmail.com>
 * @copyright Copyright (C) 2016 Mikus Rozenbergs
 * @version   $Id$
 */

use mixisLv\Reamaze\Api;
use mixisLv\Reamaze\Exceptions\ApiException;
use mixisLv\Reamaze\Params\Articles\GetParams;

include_once dirname(__FILE__) . './../../autoload.php';

if (is_file(dirname(__FILE__) . './../config.php')) {
    include_once dirname(__FILE__) . './../config.php';
}

if (!defined('REAMAZE_BRAND')) {
    define('REAMAZE_BRAND', 'your-brand');
}
if (!defined('REAMAZE_LOGIN')) {
    define('REAMAZE_LOGIN', 'your-login');
}
if (!defined('REAMAZE_TOKEN')) {
    define('REAMAZE_TOKEN', 'your-token');
}

$reamaze        = new Api(REAMAZE_BRAND, REAMAZE_LOGIN, REAMAZE_TOKEN);
$reamaze->debug = false;

// Example 1
try {
    $response = $reamaze->articles->get(new GetParams(['slug' => 'test']));
    var_dump($response);
} catch (ApiException $e) {
    var_dump($e->getMessage());
}
