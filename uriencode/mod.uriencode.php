<?php
class Modifier_uriencode extends Modifier
{
  var $meta = array(
    'name'       => 'uriencode',
    'version'    => '1.0',
    'author'     => 'Timon van Spronsen',
    'author_url' => 'http://timon.im/'
  );

  public function index($value, $parameters=array())
  {
    $unescaped = array(
      '%2D'=>'-','%5F'=>'_','%2E'=>'.','%21'=>'!', '%7E'=>'~',
      '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')'
    );

    $reserved = array(
      '%3B'=>';','%2C'=>',','%2F'=>'/','%3F'=>'?','%3A'=>':',
      '%40'=>'@','%26'=>'&','%3D'=>'=','%2B'=>'+','%24'=>'$'
    );

    $score = array(
      '%23'=>'#'
    );

    return strtr(rawurlencode($value), array_merge($reserved, $unescaped, $score));
  }
}
?>
