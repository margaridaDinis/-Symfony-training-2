<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JamJar
 *
 * @ORM\Table(name="jam_jar")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JamJarRepository")
 */
class JamJar
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
     * @ORM\Column(name="jamType", type="string", length=255)
     */
    private $jamType;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=255)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;


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
     * Set jamType
     *
     * @param string $jamType
     *
     * @return JamJar
     */
    public function setJamType($jamType)
    {
        $this->jamType = $jamType;

        return $this;
    }

    /**
     * Get jamType
     *
     * @return string
     */
    public function getJamType()
    {
        return $this->jamType;
    }

    /**
     * Set year
     *
     * @param string $year
     *
     * @return JamJar
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return JamJar
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}

