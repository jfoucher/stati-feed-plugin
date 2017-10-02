<?php
/**
 * FeedData.php
 *
 * Created By: jonathan
 * Date: 02/10/2017
 * Time: 14:30
 */

namespace Stati\Plugin\Feed\Liquid\Tag;

use Liquid\AbstractTag;
use Liquid\Context;

class FeedData extends AbstractTag
{
    public function render(Context $context)
    {
        return 'feed_data';
    }
}