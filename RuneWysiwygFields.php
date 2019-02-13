<?php

namespace RuneWysiwygFields;

use Shopware\Components\Plugin;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Shopware-Plugin RuneWysiwygFields.
 */
class RuneWysiwygFields extends Plugin
{
    const PLUGIN_NAME = 'RuneWysiwygFields';

    /**
    * @param ContainerBuilder $container
    */
    public function build(ContainerBuilder $container)
    {
        $container->setParameter('rune_wysiwyg_fields.plugin_dir', $this->getPath());
        parent::build($container);
    }


}
