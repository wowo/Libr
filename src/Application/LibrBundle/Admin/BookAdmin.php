<?php
namespace Application\LibrBundle\Admin;
use Sonata\BaseApplicationBundle\Admin\EntityAdmin;

class BookAdmin extends EntityAdmin
{
  public $baseRouteName = "libr_book";
  protected $formOptions = array("validation_groups" => "Default");

}
