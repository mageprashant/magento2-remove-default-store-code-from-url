# Magento 2 Remove Store Code from URL Extension FREE

Magento 2 remove the store code in the store from the URL. The module is in effect only when <code>web/url/use_store</code> is enabled and is meant to be used for multistore setups, where the main store shop should not contain any store code, whereas all other stores should.

## Installation

* <code>composer require mageprashant/magento2-remove-store-code-from-url</code>
* <code>bin/magento module:enable MagePrashant_RemoveStoreCode</code>
* <code>bin/magento setup:upgrade</code>
* <code>bin/magento cache:flush</code>
* <code>bin/magento setup:di:compile</code>

## Enable the extension
Enabled
 - Stores > Settings > Configuration > MagePrashant Extensions > Remove store code from URL > General > Enabled: Yes

Remove store code from URL 
 - Stores > Settings > All Stores 
    - Select your desired store to remove  store code from the url.

        ![All Stores](https://i.imgur.com/w55K50p.png)

        ![Store Information](https://i.imgur.com/JRLPj5n.png)

## Example
When the store codes in the url are disabled, the URL of the stores looks like this: `https://magento.com/`.

When the store codes in the url are enabled, the URL of the stores looks like this: `https://magento.com/store_code/`.

When this extension is installed and enabled the module, and the store codes are enabled to be shown in the url under
Store > Configuration > General > Web > Add Store Code, the module will not show the store code for the store for which you select the setting on stores but will show it for any other store.

So, for the default store the url will be `https://magento.com/` while for all other store, the URL will be : `https://magento.com/store_code`

## Contribution

Want to contribute to this extension? The quickest way is to <a href="https://help.github.com/articles/about-pull-requests/">open a pull request</a> on GitHub.

## Support

If you encounter any problems or bugs, please <a href="https://github.com/mageprashant/magento2-remove-store-code-from-url/issues">open an issue</a> on GitHub.

## License
[MIT License](LICENSE)


