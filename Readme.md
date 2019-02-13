# RuneWysiwygFields
## About RuneWysiwygFields
This plugins adds the possibility to easily add WYSIWYG fields. This is comparable with 'CMS Blocks' in Magento 2.

## How to use

1. Copy code of RuneWysiwygFields to own plugin. For example, search and replace: `RuneWysiwygFields` -> `MyshopFields`
2. Add your fields to `config.xml`
    ```
    <element type="html" scope="shop">
        <name>wysiwyg_example</name>
        <label>Wysiwyg Example</label>
        <description>This is just an example text field.</description>
    </element>
    ```
3. Use the {wf} smarty function in your Theme to include the wysiwyg fields.
    Make sure to use the correct 'name' from the element above.
    ```
    {wf name="wysiwyg_example"}
    ```
When a `name` does not exist, the function will throw an exception. To fail silently, add `silent=1` to your the function.

## Deprecated
This module might not be needed anymore, after the release of FroshContentTypes with Shopware 5.6.
However, this way of working is easier and faster to setup.

## License

Please see [License File](LICENSE) for more information.
Keep in mind that, when copying the project, the LICENSE file must be kept intact.