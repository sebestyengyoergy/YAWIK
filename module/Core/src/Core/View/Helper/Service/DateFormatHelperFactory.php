<?php
/**
 * Cross Applicant Management
 *
 * @filesource
 * @copyright (c) 2013 Cross Solution (http://cross-solution.de)
 * @license   GPLv3
 */

namespace Core\View\Helper\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\I18n\View\Helper\DateFormat;
use Locale;

/**
 * Hybridauth authentication adapter factory
 */
class DateFormatHelperFactory implements FactoryInterface 
{

    /**
     * Creates an instance of \Core\View\Helper\Params
     * 
     * - injects the MvcEvent instance
     * 
     * @param ServiceLocatorInterface $serviceLocator
     * @return \Core\View\Helper\Params
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $helper = new DateFormat();
        $helper->setLocale(Locale::DEFAULT_LOCALE);
        return $helper;
    }
    
}