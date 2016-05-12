<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

$root = realpath(dirname(dirname(__FILE__)));

$library = $root . "/src";
$tests = $root . "/tests";

$path = array($library, $tests, get_include_path());
set_include_path(implode(PATH_SEPARATOR, $path));


require dirname(__FILE__) . '/../vendor/autoload.php';

Doctrine\Common\Annotations\AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation',
    $root . "/vendor/jms/serializer/src"
);

unset($root, $library, $tests, $path);
