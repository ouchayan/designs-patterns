<?php
/*
1) Les méthodes et les variables static appartient a la classe et non pas a l'object.
2) Une propriété statique peut tout à fait changer de valeur au cours du temps à la différence d’une constante dont la valeur est fixée. Simplement, la valeur d’une propriété statique sera partagée par tous les objets issus de la classe dans laquelle elle a été définie.
3) Une classe avec eun onstructeur privé ne peux être instancié à l'exterieur de la classe.
4) singleton est un design pattern de la famille création qui assure la création d'une seule instance d'une classe.
5) new self() et new static.
6) Shared = true in symfony service = singleton.
*/
class BdConnexion 
{
  private static $instance = null;

  private function __construct()
  {
    
  }
  
  public static function getInstance() 
  {
     //static $this->instance = null;
     if (null == self::$instance) {
         self::$instance = new BdConnexion();
     } else {
         echo "Already instanted";
     }
     
     //echo self::$instance;
  }
 
}

BdConnexion::getInstance();
BdConnexion::getInstance();
BdConnexion::getInstance();
BdConnexion::getInstance();
