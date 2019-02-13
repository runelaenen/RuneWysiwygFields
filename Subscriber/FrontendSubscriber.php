<?php

namespace RuneWysiwygFields\Subscriber;

use Enlight\Event\SubscriberInterface;
use Enlight_Event_EventArgs;
use Enlight_Template_Manager;
use Shopware_Controllers_Frontend_Custom;

/**
 * Class FrontendSubscriber
 * @package RuneWysiwygFields\Subscriber
 */
class FrontendSubscriber implements SubscriberInterface
{
    /**
     * @var string
     */
    private $pluginDir;

    /**
     * @var Enlight_Template_Manager
     */
    private $template;


    /**
     * ShopPageSubscriber constructor.
     * @param string $pluginDir
     */
    public function __construct(
        string $pluginDir,
        Enlight_Template_Manager $template
    ) {
        $this->pluginDir = $pluginDir;
        $this->template = $template;
    }

    /**
     * @return array The event names to listen to
     */
    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PreDispatch_Frontend' => 'smartyAddFunction'
        ];
    }

    /**
     * @param Enlight_Event_EventArgs $args
     */
    public function smartyAddFunction(Enlight_Event_EventArgs $args)
    {
        $this->template->addPluginsDir($this->pluginDir . '/Resources/smarty');
        //$this->template->registerPlugin('function', 'wf', 'smarty_function_wf');
    }
}
