Getting Started With FWSLayoutBundle
================================

The Symfony Security component provides a flexible security framework that
allows you to load users from configuration, a database, or anywhere else
you can imagine. The FOSUserBundle builds on top of this to make it quick
and easy to store users in a database.

So, if you need to persist and fetch the users in your system to and from
a database, then you're in the right place.

Prerequisites
----------------

This version of the bundle requires Symfony 2.1+.

Installation
-------------

Installation is a quick (I promise!) 7 step process:

1. Download FWSLayoutBundle using composer
2. Enable the Bundle
3. Create your custom layout
4. Create a child page template

Step 1: Download FWSLayoutBundle using composer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Require the bundle with composer:

.. code-block:: bash

    $ composer require funwithsymfony/layout-bundle "~1.0.x-dev"

Composer will install the bundle to your project's ``vendor/funwithsymfony/layout-bundle`` directory.

Step 2: Enable the bundle
~~~~~~~~~~~~~~~~~~~~~~~~~

Enable the bundle in the kernel::

    <?php
    // app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new FWS\LayoutBundle\FWSLayoutBundle(),
            // ...
        );
    }

