<?php

/**
 * 
 * @author:  Gabriel BONDAZ <gabriel.bondaz@idci-consulting.fr>
 * @author:  Sekou KOÏTA <sekou.koita@supinfo.com>
 * @license: GPL
 *
 */

namespace IDCI\Bundle\NotificationClientApiBundle\Service;

use IDCI\Bundle\NotificationClientApiBundle\Notification;

class NotificationClientApi
{
    protected $validator;

    /**
     * Constructor
     */
    public function __construct($validator)
    {
        $this->validator = $validator;
    }

    /**
     * Get validator
     *
     * @return Symfony\Component\Validator\Validator
     */
    public function getValidator()
    {
        return $this->validator;
    }

    /**
     * Notify
     *
     * @param array $notificationParameters
     * @param string $type
     */
    public function notify(array $notificationParameters, $type)
    {
        $notification = NotificationFactory::create($type);
        // Appeler la factory pour créer la bonne notification
        // Sur l'objet de type NotificationFactory créée tu appel notify
    }


}

