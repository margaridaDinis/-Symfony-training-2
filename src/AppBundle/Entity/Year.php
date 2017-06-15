<?php
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Year
 *
 * @ORM\Table(name="Year")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\YearRepository")
 * @UniqueEntity("year")
 */
class Year
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
     * @var int
     *
     * @ORM\Column(name="Year", type="integer", unique=true)
     * @Assert\Range(
     *      min = 2000,
     *      max = 2017,
     *      minMessage = "Are you sure you want to add such an old Jam?",
     *      maxMessage = "I know it's good, but are you sure this Jam is from the future?"
     * )
     */
    private $year;

    /**
     * @ORM\OneToMany(targetEntity="JamJar", mappedBy="Year")
     */
    private $jamJars;

    public function __construct()
    {
        $this->jamJars = new ArrayCollection();
    }

    public function __toString()
    {
        return (string) $this->year;
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
     * Set year
     *
     * @param integer $year
     *
     * @return Year
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Add jamJar
     *
     * @param \AppBundle\Entity\JamJar $jamJar
     *
     * @return Year
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
