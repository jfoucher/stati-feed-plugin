<?php

namespace Stati\Plugin\Feed;

use Stati\Event\SiteEvent;
use Stati\Event\SettingTemplateVarsEvent;
use Stati\Event\WillParseTemplateEvent;
use Stati\Plugin\Plugin;
use Stati\Site\Site;
use Stati\Site\SiteEvents;
use Stati\Liquid\TemplateEvents;
use Stati\Plugin\Feed\Liquid\Tag\FeedData;

class Feed extends Plugin
{
    protected $name = 'feed';

    public static function getSubscribedEvents()
    {
        return array(
            TemplateEvents::WILL_PARSE_TEMPLATE => 'onWillParseTemplate',
        );
    }

    public function onWillParseTemplate(WillParseTemplateEvent $event)
    {
        $template = $event->getTemplate();
        $template->registerTag('feed_meta', FeedData::class);
    }



    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
