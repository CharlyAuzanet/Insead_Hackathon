<?php

namespace InseadBundle\Entity;

/**
 * Ad
 */
class Ad
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     *
     * @return Ad
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $questions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add question
     *
     * @param \InseadBundle\Entity\Questions $question
     *
     * @return Ad
     */
    public function addQuestion(\InseadBundle\Entity\Questions $question)
    {
        $this->questions[] = $question;

        return $this;
    }

    /**
     * Remove question
     *
     * @param \InseadBundle\Entity\Questions $question
     */
    public function removeQuestion(\InseadBundle\Entity\Questions $question)
    {
        $this->questions->removeElement($question);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestions()
    {
        return $this->questions;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;


    /**
     * Add user
     *
     * @param \InseadBundle\Entity\User $user
     *
     * @return Ad
     */
    public function addUser(\InseadBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \InseadBundle\Entity\User $user
     */
    public function removeUser(\InseadBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
    /**
     * @var \InseadBundle\Entity\Sources
     */
    private $sources;


    /**
     * Set sources
     *
     * @param \InseadBundle\Entity\Sources $sources
     *
     * @return Ad
     */
    public function setSources(\InseadBundle\Entity\Sources $sources = null)
    {
        $this->sources = $sources;

        return $this;
    }

    /**
     * Get sources
     *
     * @return \InseadBundle\Entity\Sources
     */
    public function getSources()
    {
        return $this->sources;
    }
    /**
     * @var \InseadBundle\Entity\Parameters
     */
    private $parameters;


    /**
     * Set parameters
     *
     * @param \InseadBundle\Entity\Parameters $parameters
     *
     * @return Ad
     */
    public function setParameters(\InseadBundle\Entity\Parameters $parameters = null)
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Get parameters
     *
     * @return \InseadBundle\Entity\Parameters
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}
