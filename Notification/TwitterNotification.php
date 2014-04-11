<?php

/**
 *
 * @author:  Gabriel BONDAZ <gabriel.bondaz@idci-consulting.fr>
 * @author:  Sekou KOÏTA <sekou.koita@supinfo.com>
 * @author:  Pichet PUTH <pichet.puth@utt.fr>
 * @license: GPL
 *
 */

namespace IDCI\Bundle\NotificationApiClientBundle\Notification;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

class TwitterNotification extends AbstractNotification
{
    /**
     */
    protected $consumerKey;

    /**
     */
    protected $consumerSecret;

    /**
     */
    protected $oauthAccessToken;

    /**
     */
    protected $oauthAccessTokenSecret;

    /**
     * @Assert\NotBlank()
     */
    protected $to;

    /**
     * @Assert\NotBlank()
     */
    protected $status;

    /**
     * Set consumer key
     *
     * @param  string $consumerKey
     * @return TwitterNotification
     */
    public function setConsumerKey($consumerKey)
    {
        $this->consumerKey = $consumerKey;

        return $this;
    }

    /**
     * Get consumer key
     *
     * @return  string
     */
    public function getConsumerKey()
    {
        return $this->consumerKey;
    }

    /**
     * Set consumer secret
     *
     * @param  string $consumerSecret
     * @return TwitterNotification
     */
    public function setConsumerSecret($consumerSecret)
    {
        $this->consumerSecret = $consumerSecret;

        return $this;
    }

    /**
     * Get consumer secret
     *
     * @return  string
     */
    public function getConsumerSecret()
    {
        return $this->consumerSecret;
    }

    /**
     * Set oauth access token
     *
     * @param  string $oauthAccessToken
     * @return TwitterNotification
     */
    public function setOauthAccessToken($oauthAccessToken)
    {
        $this->oauthAccessToken = $oauthAccessToken;

        return $this;
    }

    /**
     * Get oauth access token
     *
     * @return  string
     */
    public function getOauthAccessToken()
    {
        return $this->oauthAccessToken;
    }

    /**
     * Set oauth access token secret
     *
     * @param  string $oauthAccessTokenSecret
     * @return TwitterNotification
     */
    public function setOauthAccessTokenSecret($oauthAccessTokenSecret)
    {
        $this->oauthAccessTokenSecret = $oauthAccessTokenSecret;

        return $this;
    }

    /**
     * Get oauth access token secret
     *
     * @return  string
     */
    public function getOauthAccessTokenSecret()
    {
        return $this->oauthAccessTokenSecret;
    }

    /**
     * Set to
     *
     * @param  string $to
     * @return TwitterNotification
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get to
     *
     * @return  string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set status
     *
     * @param  string $status
     * @return TwitterNotification
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return  string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * {@inheritdoc}
     */
    public function getDataFrom()
    {
        return array(
            'consumer_key'              => $this->getConsumerKey(),
            'consumer_secret'           => $this->getConsumerSecret(),
            'oauth_access_token'        => $this->getOauthAccessToken(),
            'oauth_access_token_secret' => $this->getOauthAccessTokenSecret()

        );
    }

    /**
     * {@inheritdoc}
     */
    public function getDataTo()
    {
        return array(
            'to' => $this->getTo()
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getDataContent()
    {
        return array(
            'status' => $this->getStatus()
        );
    }
}
