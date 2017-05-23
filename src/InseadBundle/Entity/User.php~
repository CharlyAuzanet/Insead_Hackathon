<?php

namespace InseadBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;


/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var int
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Ads;


    /**
     * Add ad
     *
     * @param \InseadBundle\Entity\Ad $ad
     *
     * @return User
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
}
