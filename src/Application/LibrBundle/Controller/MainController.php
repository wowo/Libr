<?php

namespace Application\LibrBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Application\LibrBundle\Form\BookForm;
use Application\LibrBundle\Entity\Book;

class MainController extends Controller
{
  /**
   * indexAction 
   *  
   * @author Wojciech Sznapka <wojciech.sznapka@xsolve.pl> 
   * @access public
   * 
   * @return void
   */
  public function indexAction()
  {
    $em = $this->get("doctrine.orm.entity_manager");
    $books = $em->getRepository('Application\LibrBundle\Entity\Book')->getBooks("shelf");

    return $this->render(
        "LibrBundle:Main:index.twig.html",
        array("books" => $books)
    );
  }

  /**
   * createAction 
   *  
   * @author Wojciech Sznapka <wojciech.sznapka@xsolve.pl> 
   * @access public
   * 
   * @return void
   */
  public function createAction()
  {
    $form = BookForm::create($this->get("form.context"), "book", array("data_class" => 'Application\LibrBundle\Entity\Book'));
    $form->bind($this->get("request"), new Book());
    if ($form->isValid()) {
      $book = $form->getData();
      $book->createdAt = new \DateTime("now");
      $em = $this->get("doctrine.orm.entity_manager");
      $em->persist($book);
      $em->flush();
      return new RedirectResponse($this->generateUrl("index"));
    }
    return $this->render(
        "LibrBundle:Main:create.twig.html",
        array("form" => $form)
    );
  }
}
