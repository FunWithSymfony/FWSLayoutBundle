FWSLayoutBundle
===============

The FWSLayoutBundle adds support for a Layout inheritance system in Symfony2.
It provides a flexible framework for layout management that aims to handle
common tasks such page templates automatically extending the correct layout.

Features include:

- Simple twig integration ``{% extends parent_template() %}``
- Automatic switching between default layout and ajax layouts
- Unit tested


[![Build Status](https://travis-ci.org/FunWithSymfony/FWSLayoutBundle.svg?branch=master)](https://travis-ci.org/FunWithSymfony/FWSLayoutBundle) [![Total Downloads](https://poser.pugx.org/funwithsymfony/layout-bundle/downloads.svg)](https://packagist.org/packages/funwithsymfony/layout-bundle) [![Latest Stable Version](https://poser.pugx.org/funwithsymfony/layout-bundle/v/stable.svg)](https://packagist.org/packages/funwithsymfony/layout-bundle)

Documentation
-------------

The source of the documentation is stored in the `Resources/doc/` folder
in this bundle:

[Read the Documentation for master](https://github.com/FunWithSymfony/FWSLayoutBundle/blob/develop/Resources/doc/index.rst)

Installation
------------

All the installation instructions are located in the documentation.

License
-------

This bundle is under the MIT license. See the complete license in the bundle:

    Resources/meta/LICENSE


Reporting an issue or a feature request
---------------------------------------

Issues and feature requests are tracked in the [Github issue tracker](https://github.com/FunWithSymfony/FWSLayoutBundle/issues).

When reporting a bug, it may be a good idea to reproduce it in a basic project
built using the [Symfony Standard Edition](https://github.com/symfony/symfony-standard)
to allow developers of the bundle to reproduce the issue by simply cloning it
and following some steps.
