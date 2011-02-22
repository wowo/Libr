<?php
namespace Application\LibrBundle\Form;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\ChoiceField;

/**
 * BookForm 
 * 
 * @uses Form
 * @package 
 * @version $id$
 * @author Wojciech Sznapka <wojciech.sznapka@xsolve.pl> 
 * @license 
 */
class BookForm extends Form
{
  /**
   *  Destinations
   */
  public static $destinations = array("shelf" => "Already on the shelf", "wish" => "Wish list");
  /**
   * configure 
   *  
   * @author Wojciech Sznapka <wojciech.sznapka@xsolve.pl> 
   * @access protected
   * 
   * @return void
   */
  protected function configure()
  {
    $this->add("title");
    $this->add("author");
    $this->add(new ChoiceField("destination", array("choices" => self::$destinations)));
  }
}
