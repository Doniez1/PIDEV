<?php

namespace EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participant
 *
 * @ORM\Table(name="participant")
 * @ORM\Entity(repositoryClass="EvenementBundle\Repository\ParticipantRepository")
 */
class Participant
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
     * @ORM\ManyToOne(targetEntity="EvenementBundle\Entity\Evenement",inversedBy="Participant")
     * @ORM\JoinColumn(name="Evenement_id",referencedColumnName="id")
     */
    private $Evenement;

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
     * Set evenement
     *
     * @param \EvenementBundle\Entity\Evenement $evenement
     *
     * @return Participant
     */
    public function setEvenement(\EvenementBundle\Entity\Evenement $evenement = null)
    {
        $this->Evenement = $evenement;

        return $this;
    }

    /**
     * Get evenement
     *
     * @return \EvenementBundle\Entity\Evenement
     */
    public function getEvenement()
    {
        return $this->Evenement;
    }
}
