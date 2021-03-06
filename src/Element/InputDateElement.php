<?php

namespace Colibri\Html\Element;

class InputDateElement extends InputElement
{

  /**
   * InputDateElement constructor.
   *
   * @param       $name
   * @param null  $value
   * @param array $attributes
   */
  public function __construct($name, $value = null, array $attributes = [])
  {
    parent::__construct($name, $value, $attributes);
    $this->setAttribute('type', 'date');
  }

}