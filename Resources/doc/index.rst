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
3. Configure your custom layout
4. Configure a child page template

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

Step 3: Configure your layout
~~~~~~~~~~~~~~~~~~~~~~~~~

By default, there is a default layout provided at ``FWS/Layout-Bundle/Resources/views/layout-default.html.twig`` This default layout will be used if you do not configure your own. However it is highly recommended that you configure your own layout.

.. code-block:: yaml

    # app/config/config.yml
    fws_layout:
        templates:
	        default: AppBundle:Layout:layout-default.html
	        ajax: AppBundle:Layout:layout-ajax.html.twig

Step 4: Configure your child page template
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. code-block:: html

    {% extends parent_template() %}

    {% block content %}
	    My custom page content
    {% block content %}
