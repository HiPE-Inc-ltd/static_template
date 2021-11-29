<?php
require_once('define.php');
function includeWithVariables($filePath, $variables = array(), $print = true)
{
    $output = NULL;
    if (file_exists($filePath)) {
        // Extract the variables to a local namespace
        extract($variables);
        // Start output buffering
        ob_start();
        // Include the template file
        include $filePath;
        // End buffering and return its contents
        $output = ob_get_clean();
    }
    if ($print) {
        print $output;
    }
    return $output;
}
function getHost()
{
    $possibleHostSources = array('HTTP_X_FORWARDED_HOST', 'HTTP_HOST', 'SERVER_NAME', 'SERVER_ADDR');
    $sourceTransformations = array(
        "HTTP_X_FORWARDED_HOST" => function ($value) {
            $elements = explode(',', $value);
            return trim(end($elements));
        }
    );
    $host = '';
    foreach ($possibleHostSources as $source) {
        if (!empty($host)) break;
        if (empty($_SERVER[$source])) continue;
        $host = $_SERVER[$source];
        if (array_key_exists($source, $sourceTransformations)) {
            $host = $sourceTransformations[$source]($host);
        }
    }
    $host = preg_replace('/:\d+$/', '', $host);
    return trim($host);
}
function getServerProtocol()
{
    if (
        isset($_SERVER['HTTPS']) &&
        ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
        isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
        $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
    ) {
        $protocol = 'https://';
    } else {
        $protocol = 'http://';
    }
    return $protocol;
}
function isLocalEnvironment()
{
    $whitelist = array('127.0.0.1', '::1');
    if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
        return true;
    }
}
function resource($type = null, $file = null)
{
    $path = isLocalEnvironment() ? '' : getServerProtocol() . getHost();
    switch ($type) {
        case 'css':
            return $path . CSS . $file;
            break;
        case 'js':
            return $path . JS . $file;
            break;
        case 'img':
            return $path . IMG . $file;
            break;
        case 'media':
            return $path . MEDIA . $file;
            break;
        case 'iconfont':
            return $path . ICONFONT . $file;
            break;
        case 'vendor':
            return $path . VENDOR . $file;
            break;
        default:
            return '';
            break;
    }
}
function resources($type = null, $files = [])
{
    $path = isLocalEnvironment() ? '' : getServerProtocol() . getHost();
    if (is_array($files) && $files != null) {
        switch ($type) {
            case 'css':
                $format = '<link rel="stylesheet" href="%s"/>';
                $getType = CSS;
                break;
            case 'js':
                $format = '<script type="text/javascript" src="%s"></script>';
                $getType = JS;
                break;
        }
        foreach ($files as $file) {
            $code = '';
            $code .= sprintf($format, $path . $getType . $file) . PHP_EOL;
        }
        return $code;
    } else {
        throw new Exception('Files required array as parameter' . PHP_EOL);
    }
}
