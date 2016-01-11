<?php

namespace FWS\LayoutBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Twig_Extension;


/**
 * Class LayoutExtension
 * @package Layout\Twig
 *
 * @author Anthony Howell <anthonyhowell@gmail.com>
 */
class LayoutExtension extends Twig_Extension implements ContainerAwareInterface
{

    use ContainerAwareTrait;


    public function getName()
    {
        return 'layout_extension';
    }

    public function getFunctions()
    {
        return [
            'parent_template' => new \Twig_SimpleFunction('parent_template', [$this, 'getParentTemplate'])
        ];
    }

    public function getParentTemplate()
    {
        if ($this->shouldUseAjaxTemplate()) {
            return $this->getAjaxTemplate();
        }

        return $this->getDefaultTemplate();
    }

    public function shouldUseAjaxTemplate()
    {
        if (!$this->container->hasParameter('fws_layout.templates.twig.ajax')) {
            return false;
        }

        if (!$request = $this->container->get('request_stack')->getMasterRequest()) {
            return false;
        }

        return strtolower($request->headers->get('HTTP_X_REQUESTED_WITH')) == 'xmlhttprequest'
            || strtolower($request->headers->get('X-Requested-With')) == 'xmlhttprequest';
    }

    public function getAjaxTemplate()
    {

    }

    public function getDefaultTemplate()
    {
//        if (!$this->container->hasParameter('fws_layout.templates.full')) {
//            throw InvalidArgumentException::defaultLayoutPropertyRequired();
//        }

//        $template = $this->container->getParameter('fws_layout.templates.ajax');

//        if (empty($template)) {
//            throw InvalidArgumentException::defaultLayoutValueRequired();
//        }
        return $this->container->getParameter('fws_layout.templates.twig.default');
    }

}