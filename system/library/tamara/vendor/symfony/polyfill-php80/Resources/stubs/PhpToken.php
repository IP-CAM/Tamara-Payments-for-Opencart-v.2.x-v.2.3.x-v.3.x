<?php

namespace TMS;

if (\PHP_VERSION_ID < 80000 && \extension_loaded('tokenizer')) {
    class PhpToken extends \TMS\Symfony\Polyfill\Php80\PhpToken
    {
    }
}
