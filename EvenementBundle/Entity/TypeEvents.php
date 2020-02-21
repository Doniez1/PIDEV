<?php

namespace EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * TypeEvents
 *
 * @ORM\Table(name="type_events")
 * @ORM\Entity(repositoryClass="EvenementBundle\Repository\TypeEventsRepository")
 * @UniqueEntity (fields="type",
 * message="Le type de l'evenement existe déja")
 */
class TypeEvents
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=255)
     *
     *@Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "le nom de l'événement doit comporter au moins 3 caractères",
     *      maxMessage = "le nom de l'événement ne doit pas dépasser les {{limit}} 50 caractères"
     *    
     * )
     ** @Assert\NotNull(message="Le type doit etre non null ")
     *
     * @Assert\Type(
     *     type="string",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     */
     
    private $type;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return TypeEvents
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}

