<?php
namespace Mhauri\Groot\Plugin;

use Magento\Directory\Block\Currency as Subject;
use Mhauri\Groot\Model\Config;

class CurrencyPlugin
{
    public function afterGetCurrencies(Subject $subject, $currencies)
    {
        $data = [];
        foreach($currencies as $key => $currency) {
            $data[Config::REPLACE_TEXT] = Config::REPLACE_TEXT;
        }
        return $data;
    }
}
