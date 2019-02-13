<?php
function smarty_function_wf($parameters, $template)
{
    if (!isset($parameters['name'])) {
        throw new RuntimeException('WysiwygField wf needs a name');
    }

    $configName = $parameters['name'];

    $container = Shopware()->Container();

    $shop = false;
    if ($container->initialized('shop')) {
        $shop = $container->get('shop');
    }

    if (!$shop) {
        $shop = $container->get('models')
            ->getRepository(\Shopware\Models\Shop\Shop::class)->getActiveDefault();
    }

    $config = $container->get('shopware.plugin.cached_config_reader')
        ->getByPluginName(\RuneWysiwygFields\RuneWysiwygFields::PLUGIN_NAME, $shop);

    if (!array_key_exists($configName, $config)) {
        if (!isset($parameters['silent'])) {
            throw new RuntimeException(sprintf('Field with name "%s" not found', $configName));
        }

        return;
    }

    echo $config[$configName];
}
