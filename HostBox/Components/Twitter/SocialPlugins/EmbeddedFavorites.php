<?php

namespace HostBox\Components\Twitter\SocialPlugins;

/**
 * Class EmbeddedFavorites
 * @package HostBox\Components\Twitter\SocialPlugins
 *
 * @tagClass twitter-timeline
 * @href $via/favorites
 * @text Favorite Tweets by @$via
 */
class EmbeddedFavorites extends Embedded {

    /**
     * @var string
     * @ignore
     */
    public $via;

}
