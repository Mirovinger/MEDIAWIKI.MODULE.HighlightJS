<?php

/**
 * Class HighlightJS
 */
class HighlightJS
{
  /**
   * Register tag function.
   *
   * @param Parser $parser
   * @return bool
   */
  public static function init(Parser &$parser)
  {
    $parser->setHook('src', 'HighlightJS::renderTag');
    return true;
  }

  /**
   * Render tag function.
   *
   * @param $input
   * @param array $args
   * @param Parser $parser
   * @param PPFrame $frame
   * @return string
   */
  public static function renderTag($input, array $args, Parser $parser, PPFrame $frame)
  {
    $output = $parser->getOutput();
    $output->addModuleStyles(array('ext.highlightjs.styles'));
    $output->addModules(array('ext.highlightjs'));

    if (!array_key_exists('lang', $args)) {
      $args['lang'] = '';
    }

    if (!array_key_exists('title', $args)) {
      $args['title'] = wfMessage('hljs-block-title')->inContentLanguage()->plain();
    }

    $title = htmlspecialchars(trim($args['title']));
    $lang = htmlspecialchars(trim($args['lang']));
    $class = ' class="' . $lang . '"';
    $code = htmlspecialchars(trim($input));

    $output = '<div class="TagSource"><div class="heading"><div class="title">' . $title . '</div><div class="lang">' . $lang . '</div></div><pre><code' . $class . '>' . $code . '</code></pre></div>';
    return $output;
  }
}
