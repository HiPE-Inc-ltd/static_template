<?php
require_once 'define.php';
function includeWithVariables($filePath, $variables = array(), $print = true)
{
    /* 
    *  refer @ https://stackoverflow.com/questions/11905140/php-pass-variable-to-include
    */
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
function console_log($data = null)
{
    return '<script> console.log(' . json_encode($data) . ')</script>';
}
function resource($type = null, $file = null)
{
    $path = isLocalEnvironment() ? '' : getServerProtocol() . getHost();
    switch ($type) {
        case 'css':
            $path .= CSS . $file;
            break;
        case 'js':
            $path .= JS . $file;
            break;
        case 'img':
            $path .= IMG . $file;
            break;
        case 'media':
            $path .= MEDIA . $file;
            break;
        case 'iconfont':
            $path .= ICONFONT . $file;
            break;
        case 'vendor':
            $path .= VENDOR . $file;
            break;
        default:
            return '';
            break;
    }
    return $path;
}
function resources($type = null, $files = [], $fileModified = false)
{
    $hostPath = isLocalEnvironment() ? '' : getServerProtocol() . getHost();
    $html = '';
    if (is_array($files) && $files != null) {
        switch ($type) {
            case 'css':
                $format = '<link rel="stylesheet" href="%s"/>';
                $resourcesBasePath = CSS;
                break;
            case 'js':
                $format = '<script type="text/javascript" src="%s"></script>';
                $resourcesBasePath = JS;
                break;
        }
        foreach ($files as $file) {
            $fullPath = $temp = $resourcesBasePath . $file;
            $version = 0;
            if ($fileModified && file_exists(__ROOT__ . $temp)) {
                $version =  date("YmdHis", filemtime(__ROOT__ . $temp));
            }
            $fullPath = $hostPath . $temp . '?v=' . $version;
            $html .= sprintf($format, $fullPath);
        }
        return $html;
    } else {
        throw new Exception('Files required array as parameter.' . PHP_EOL);
    }
}
function callScript($fileName, $extension = 'php')
{
    $hostPath = isLocalEnvironment() ? '' : getServerProtocol() . getHost();
    $fullPath = "";
    if ($fileName != null) {
        if (file_exists(__ROOT__ . SCRIPT . $fileName . '.' . $extension)) {
            $fullPath .= $hostPath . SCRIPT . $fileName;
        }
    } else {
        $fullPath = "(unknown path)";
    }
    return $fullPath;
}
function redirect($url, $delay = 0, $statusCode = 303)
{
    if ($delay !== 0 && is_int($delay)) {
        header("refresh: $delay; url = $url");
    } else {
        header('Location: ' . $url, true, $statusCode);
    }
    die();
}
function checkSession()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
}
function checkSessionId($id, $redirectIfEmpty = false, $redirectTo)
{
    checkSession();
    if (!isset($_SESSION[$id]) && $redirectIfEmpty) {
        redirect(getServerProtocol() . getHost() . '/' . $redirectTo);
    }
}
function forgetSessionId($id)
{
    checkSession();
    if (isset($_SESSION[$id])) {
        unset($_SESSION[$id]);
    }
}
