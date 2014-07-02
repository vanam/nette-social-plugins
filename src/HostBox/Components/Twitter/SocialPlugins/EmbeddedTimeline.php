<?php

namespace HostBox\Components\Twitter\SocialPlugins;


/**
 * @identifier twitter-timeline
 * @href $via
 * @text Tweets by &#064;$via
 */
class EmbeddedTimeline extends Embedded {

    /**
     * @var string
     * @ignore
     */
    public $via;

}
