<?php

/**
 * @see       https://github.com/laminas/laminas-mvc-plugin-fileprg for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mvc-plugin-fileprg/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mvc-plugin-fileprg/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Validator\File;

function is_uploaded_file($filename)
{
    return true;
}
