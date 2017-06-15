<?php
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * JamType
 *
 * @ORM\Table(name="jam_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JamTypeRepository")
 * @UniqueEntity("jam")
 *
 */
class JamType
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
     * @ORM\Column(name="Jam", type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $jam;

    /**
     * @ORM\OneToMany(targetEntity="JamJar", mappedBy="JamType")
     */
    private $jamJars;

    public function __construct()
    {
        $this->jamJars = new ArrayCollection();
    }

    public function __toString()
    {
        return (string) $this->jam;
    }

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
     * Set jam
     *
     * @param string $jam
     *
     * @return JamType
     */
    public function setJam($jam)
    {
        $this->jam = $jam;

        return $this;
    }

    /**
     * Get jam
     *
     * @return string
     */
    public function getJam()
    {
        return $this->jam;
    }

    /**
     * Add jamJar
     *
     * @param \AppBundle\Entity\JamJar $jamJar
     *
     * @return JamType
     */
    public function addJamJar(\AppBundle\Entity\JamJar $jamJar)
    {
        $this->jamJars[] = $jamJar;

        return $this;
    }

    /**
     * Remove jamJar
     *
     * @param \AppBundle\Entity\JamJar $jamJar
     */
    public function removeJamJar(\AppBundle\Entity\JamJar $jamJar)
    {
        $this->jamJars->removeElement($jamJar);
    }

    /**
     * Get jamJars
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getJamJars()
    {
        return $this->jamJars;
    }
}
