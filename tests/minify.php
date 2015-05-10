#!/usr/bin/env php
<?php
/**
 * Minify test.
 *
 * @since 150424 Initial release.
 */
namespace WebSharks\JsMinifier;

error_reporting(-1);
ini_set('display_errors', true);

require_once dirname(dirname(__FILE__)).'/src/includes/stub.php';

//$output = Core::compress(file_get_contents(dirname(__FILE__).'/libs/bootstrap.js'));
$output = Core::compress(file_get_contents(dirname(__FILE__).'/libs/bootlint.js'));

file_put_contents(dirname(__FILE__).'/output.js', $output);

echo $output;
