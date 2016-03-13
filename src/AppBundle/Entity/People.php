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

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=12)
     */    
    protected $phoneNumber;

    /**
     * @ORM\Column(type="Integer")
     */    
    protected $age;

    /**
     * @ORM\Column(type="Text")
     */
    protected $description;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return People
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return People
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set age
     *
     * @param \Integer $age
     *
     * @return People
     */
    public function setAge(\Integer $age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return \Integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set description
     *
     * @param \Text $description
     *
     * @return People
     */
    public function setDescription(\Text $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return \Text
     */
    public function getDescription()
    {
        return $this->description;
    }
}
