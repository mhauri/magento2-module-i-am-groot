<?php
namespace Mhauri\Groot\Plugin;

use Magento\Store\Model\StoreManager as Subject;
use Mhauri\Groot\Model\Config;

class StorePlugin
{
    public function afterGetStore(Subject $subject, $store)
    {
        $store->setName(Config::REPLACE_TEXT);
        return $store;
    }
}
