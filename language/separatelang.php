#!/usr/bin/env php
<?php
/**
 * The script can separate the merged language file into each module. 
 */
if(empty($argv[1])) die("Must give a language file path.\n");

$filePath = $argv[1];                        /* The merged language file, such as lang.en.php. */
$extPath  = empty($argv[2]) ? '' : $argv[2]; /* The separated files will be write in this directory. */
$filename = explode('.', basename($filePath));
if(count($filename) != 2 || $filename[1] != 'php') die("The format of language filename must be xxx.php. xxx is the abbreviation of language, such as zh-cn.php.\n");

$lang     = $filename[0];
$content  = ltrim(file_get_contents($filePath), "<?php\n");;
preg_match_all("/\/\*.*?\*\//s", $content, $out);
$modules  = $out[0];
if(!$modules) die("$filePath can't be separated because the file doesn't have the module marks such as '/* common */'.\n");

define('MODULE_SEPARATOR', '/******module_separator******/');

$content    = str_replace($modules, MODULE_SEPARATOR, $content);
$contents   = explode(MODULE_SEPARATOR, ltrim($content, MODULE_SEPARATOR));

$moduleRoot = "extLang_$lang" . DIRECTORY_SEPARATOR . 'module' . DIRECTORY_SEPARATOR;
if($extPath) $moduleRoot = $extPath . DIRECTORY_SEPARATOR . $moduleRoot;
@mkdir($moduleRoot, 0777, true);
@chdir($moduleRoot);
foreach($modules as $key => $module)
{
    $module  = trim(rtrim(ltrim($module, '/*'), '*/'));
    $langDir = $module . DIRECTORY_SEPARATOR . 'lang' . DIRECTORY_SEPARATOR;
    @mkdir($langDir, 0777, true);
    if(is_dir($langDir)) file_put_contents($langDir . $lang . '.php', "<?php" . $contents[$key]);
}

echo "separate lang file down!\n";
