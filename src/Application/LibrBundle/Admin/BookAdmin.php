<?php
namespace Application\LibrBundle\Admin;
use Sonata\BaseApplicationBundle\Admin\EntityAdmin;

class BookAdmin extends EntityAdmin
{
  public $baseRouteName = "libr_book";
  protected $list = array("title" => array("identifier" => true), "author");
  protected $filter = array("title", "author");
  protected $form = array("title", "author");
  protected $label = "Książki";
  protected $group = "xxxxx";
}
