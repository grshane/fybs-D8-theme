<?php
/**
 * @file
 * Contains \Drupal\metatag_verification\Plugin\metatag\Tag\Yandex.
 */

namespace Drupal\metatag_verification\Plugin\metatag\Tag;

use Drupal\metatag\Plugin\metatag\Tag\MetaNameBase;

/**
 * Provides a plugin for the 'yandex-verification' meta tag.
 *
 * @MetatagTag(
 *   id = "yandex",
 *   label = @Translation("Yandex"),
 *   description = @Translation("A string provided by <a href=':yandex'>Yandex</a>, full details are available from the <a href=':verify_url'>Yandex online help</a>.", arguments = { ":yandex" = "http://www.yandex.com/", ":verify_url" = "http://api.yandex.com/webmaster/doc/dg/reference/hosts-type.xml" }),
 *   name = "yandex-verification",
 *   group = "site_verification",
 *   weight = 8,
 *   type = "label",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class Yandex extends MetaNameBase {
}
