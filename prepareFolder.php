<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 11.09.17
 * Time: 23:02
 */

//get arguments from cli
$options = getopt("n:p:");

mkdir("{$options['n']}");

$name = ucfirst($options['n']);

//create README
$fp = fopen("{$options['n']}/README.md", "w");
fwrite($fp, "# {$name}\r\n Book: https://www.ozon.ru/context/detail/id/20216992/\r\n Page: {$options['p']} ");
fclose($fp);

//create run.php
$fp = fopen("{$options['n']}/run.php", "w");
fwrite($fp, "<?php \r\n//simple autoloader \r\nrequire_once('../AutoLoader.php'); \r\n\$autoloader = new AutoLoader(); \r\n\r\n//Enter code... \r\n");
fclose($fp);