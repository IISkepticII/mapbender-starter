<?php

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';
require_once dirname(__DIR__).'/app/AppKernel.php';

return function (array $context) {
    return new AppKernel('prod', false);
};
