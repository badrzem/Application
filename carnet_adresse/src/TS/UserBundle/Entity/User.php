<?php

namespace TS\UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="TS\UserBundle\Repository\UserRepository")
 * 
 * @ExclusionPolicy("all")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     * @Expose
     */
    protected $id;

    /*
     * @ORM\OneToMany(targetEntity="TS\ContactBundle\Entity\Contact", mappedBy="user")
     */
    private $contacts;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function __construct() {
        parent::__construct();
        $this->contacts = new ArrayCollection();
    }
    
    
    
    /**
     * Add contacts
     *
     * @param \TS\ContactBundle\Entity\Contact $contacts
     * @return Contact
     */
    public function addContact(\TS\ContactBundle\Entity\Contact $contacts)
    {
        $this->contacts[] = $contacts;

        return $this;
    }

    /**
     * Remove contacts
     *
     * @param \TS\ContactBundle\Entity\Contact $contacts
     */
    public function removeContact(\TS\ContactBundle\Entity\Contact $contacts)
    {
        $this->contacts->removeElement($contacts);
    }

    /**
     * Get contacts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContacts()
    {
        return $this->contacts;
    }
}
