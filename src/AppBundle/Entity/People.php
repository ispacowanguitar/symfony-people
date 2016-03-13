<?php
 
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class People
{
  /**
   * @ORM\Column(type="integer")
   * @ORM\ID
   * @ORM\GeneratedValue(strategy="AUTO") 
   */
    protected $id;
    protected $name;
    protected $phoneNumber;
    protected $age;

}