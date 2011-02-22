<?php

namespace Application\LibrBundle\Twig;

class FooFilter extends \Twig_Extension
{
  public function getFilters()
  {
    return array(
      "foo" => new \Twig_Filter_Method($this, "changeToFoo"),
    );
  }

  public function changeToFoo($value)
  {
    return sprintf("value {%s} changed to foo", $value);
  }

  public function getName()
  {
    return "foo";
  }
}
