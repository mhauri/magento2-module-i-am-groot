<?php
namespace Mhauri\Groot\Plugin;

use Magento\Cms\Block\Page as Subject;
use Mhauri\Groot\Model\Config;

class PagePlugin
{
    public function afterGetPage(Subject $subject)
    {
        $page = $subject->getData('page');
        $page->setTitle(Config::REPLACE_TEXT);
        $page->setContent(Config::REPLACE_TEXT);
        $page->setContentHeading(Config::REPLACE_TEXT);
        return $page;
    }
}
