<?php
// src/AppBundle/DBBundle/DB_Projects.php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * class DB_Projects
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="tsit_project")
 */
class DB_Projects
{

    /**
    * @ORM\Id
    * @ORM\Column(type="string", length=100)
    */
    protected $name;
    /**
    * @ORM\Column(type="string", length=100)
    */
    protected $author;
    /**
    * @ORM\Column(type="string", length=100)
    */
    protected $img;
    /**
     * @ORM\Column(type="integer")
     */
    protected $state;
    /**
     * @ORM\Column(type="text")
     */
    protected $resurces;
    /**
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * Set name
     *
     * @param string $name
     *
     * @return DB_Projects
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
     * Set author
     *
     * @param string $author
     *
     * @return DB_Projects
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return DB_Projects
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return DB_Projects
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set resurces
     *
     * @param string $resurces
     *
     * @return DB_Projects
     */
    public function setResurces($resurces)
    {
        $this->resurces = $resurces;

        return $this;
    }

    /**
     * Get resurces
     *
     * @return string
     */
    public function getResurces()
    {
        return $this->resurces;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return DB_Projects
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
