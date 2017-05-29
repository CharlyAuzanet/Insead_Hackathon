<?php

namespace InseadBundle\Entity;

/**
 * Questions
 */
class Questions
{

    public function addParameters(\InseadBundle\Entity\Parameters $parameters)
    {
        $this->parameters[] = $parameters;
        $parameters->addQuestion($this);

        return $this;
    }


    public function __toString()
    {
        return $this->title;
    }

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;


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
     * Set title
     *
     * @param string $title
     *
     * @return Questions
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Ads;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Ads = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ad
     *
     * @param \InseadBundle\Entity\Ad $ad
     *
     * @return Questions
     */
    public function addAd(\InseadBundle\Entity\Ad $ad)
    {
        $this->Ads[] = $ad;

        return $this;
    }

    /**
     * Remove ad
     *
     * @param \InseadBundle\Entity\Ad $ad
     */
    public function removeAd(\InseadBundle\Entity\Ad $ad)
    {
        $this->Ads->removeElement($ad);
    }

    /**
     * Get ads
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAds()
    {
        return $this->Ads;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $answers;


    /**
     * Add answer
     *
     * @param \InseadBundle\Entity\Answer $answer
     *
     * @return Questions
     */
    public function addAnswer(\InseadBundle\Entity\Answer $answer)
    {
        $this->answers[] = $answer;

        return $this;
    }

    /**
     * Remove answer
     *
     * @param \InseadBundle\Entity\Answer $answer
     */
    public function removeAnswer(\InseadBundle\Entity\Answer $answer)
    {
        $this->answers->removeElement($answer);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnswers()
    {
        return $this->answers;
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
     * @return Questions
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
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $choices;


    /**
     * Add choice
     *
     * @param \InseadBundle\Entity\Choices $choice
     *
     * @return Questions
     */
    public function addChoice(\InseadBundle\Entity\Choices $choice)
    {
        $this->choices[] = $choice;

        return $this;
    }

    /**
     * Remove choice
     *
     * @param \InseadBundle\Entity\Choices $choice
     */
    public function removeChoice(\InseadBundle\Entity\Choices $choice)
    {
        $this->choices->removeElement($choice);
    }

    /**
     * Get choices
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChoices()
    {
        return $this->choices;
    }
}
