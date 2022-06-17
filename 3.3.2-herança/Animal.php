<?php

namespace Application\Model;

require_once 'LivingBeings.php';

abstract class Animal implements LivingBeings
{
  const HETEROTROPH = true;

  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  /* método da interface */
  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->$name;
  }

  /* método estático > é um metódo que pertence a propria classe ele não executado
  em outro local a não ser na propria classe */
  public static function isHeterotroph()
  {
    return self::HETEROTROPH;

    /* para usar const estáticas e para  acessar atributos 
    de metodos estáticos devemos usar self:: não se usa this-> para acessar 
    atributos de metornos estáticas */
  }

  /* método abstrato */

  abstract public function sound();
}
