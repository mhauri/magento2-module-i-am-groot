<?php
namespace Mhauri\Groot\Plugin;

use Magento\Framework\Phrase\Renderer\Composite as Subject;
use Mhauri\Groot\Model\Config;

class PhrasePlugin
{
    public function afterRender(Subject $subject)
    {
        return Config::REPLACE_TEXT;
    }
}
