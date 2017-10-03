<?php

namespace Stati\Plugin\Feed\Liquid\Tag;

use Liquid\AbstractTag;
use Liquid\Context;

class FeedData extends AbstractTag
{
    public function render(Context $context)
    {
        return '<feed_data/>';
    }
}