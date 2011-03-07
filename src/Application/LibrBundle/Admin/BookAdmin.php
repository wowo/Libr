<?php
namespace Application\LibrBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;

class BookAdmin extends Admin
{
  protected $list = array("title" => array("identifier" => true), "author");
  protected $filter = array("title", "author");
  protected $form = array("title", "author");
  protected $formOptions = array("validation_groups" => "Default");
}
