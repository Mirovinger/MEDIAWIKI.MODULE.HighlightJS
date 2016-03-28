<?php

// Confirm MediaWiki environment.
if (!defined('MEDIAWIKI')) {
  die('This file is a MediaWiki extension and thus not a valid entry point.');
}

if (function_exists('wfLoadExtension')) {
  wfLoadExtension('HighlightJS');
  // Keep i18n globals so mergeMessageFileList.php doesn't break
  $wgExtensionMessagesFiles['HighlightJS'] = __DIR__ . '/i18n';
  /* wfWarn(
    'Deprecated PHP entry point used for Highlight.JS extension. Please use wfLoadExtension instead, ' .
    'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
  ); */
  return;
} else {
  die('This version of the HighlightJS extension requires MediaWiki 1.25+');
}
