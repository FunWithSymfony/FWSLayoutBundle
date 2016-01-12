Getting Started With FWSLayoutBundle
================================

The FWSLayoutBundle provides an easy way for your page templates to automatically extend the correct layout. The bundle will auto-detect the request type and configure your page to extend the appropriate layout. In a normal request, your default, full app layout will be used. If you configure an ajax template, then it will be used when an ajax request is detected. This works great for apps that bootstrap server side, but subsequent requests for the content are via ajax.

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

    $ composer require funwithsymfony/layout-bundle "1.0.0"

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
            new FWS\Bundle\LayoutBundle\FWSLayoutBundle(),
            // ...
        );
    }

Step 3: Configure your layout
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

By default, there is a default layout provided at ``FWS/Layout-Bundle/Resources/views/layout-default.html.twig`` This default layout will be used if you do not configure your own. However it is highly recommended that you configure your own layout.

.. code-block:: yaml

    # app/config/config.yml
    
    fws_layout:
        templates:
            twig:
	        default: AppBundle:Layout:layout-default.html
	        ajax: AppBundle:Layout:layout-ajax.html.twig
	        
If you do not wish to use an ajax template, simply omit the ajax template property.

Step 4: Configure your child page template
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. code-block:: html

    <!-- app/Resources/views/blog/post.html.twig -->

    {% extends parent_template() %}

    {% block content %}
	    My custom page content
    {% block content %}

Note: the `content` block here is an example. You should use the block names you define within **your** layout.


TODO
~~~~

Some things I have in mind to expand the bundle, but have yet to implement. Let me know if you have interest in any of these or other ideas.

1. Expand the template inheritence logic to allow a template voting system. This will allow you to have more than the current 'default' and 'ajax' layouts, and have them activated by any logic you choose.
