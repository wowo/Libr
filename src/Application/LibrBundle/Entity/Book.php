<?php
namespace Application\LibrBundle\Entity;

/**
 * @orm:Entity(repositoryClass="Application\LibrBundle\Repository\BookRepository")
 */
class Book
{
  /**
   * @orm:Id
   * @orm:Column(type="integer")
   * @orm:GeneratedValue(strategy="IDENTITY")
   */
  public $id;
  /**
   * @orm:Column(type="string", length="255")
   * @validation:NotBlank
   * @validation:MinLength(3)
   */
  public $title;
  /**
   * @orm:Column(type="string", length="255")
   */
  public $author;
  /**
   * @orm:Column(type="string", length="255")
   */
  public $destination;
  /**
   * @orm:Column(type="datetime")
   */
  public $createdAt;

  /**
   * @validation:AssertFalse(message = "Pajp nie może być autorem!")
   */
  public function isAuthorPajp()
  {
    return $this->author == "Pajp";
  }
}

