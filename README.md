NotificationClientApiBundle
===========================

Symfony2 notification client api bundle

Installation
============

To install this bundle please follow the next steps:

First add the dependency in your `composer.json` file:

```json
"require": {
    ...
    "idci/notification-client-api-bundle": "dev-master"
},
```

Then install the bundle with the command:

```sh
php composer update
```

Enable the bundle in your application kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        //
        new IDCI\Bundle\NotificationClientApiBundle\IDCINotificationClientApiBundle(),
    );
}
```

How to use it
=============
