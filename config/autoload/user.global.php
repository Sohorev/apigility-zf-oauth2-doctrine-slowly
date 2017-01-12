<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    'doctrine' => [
        'sql_logger_collector' => [
            'orm_default' => [
                'sql_logger' => 'isend_sql_logger',
            ],
        ],
        /***** enabling the memcache ****/
        'configuration' => array(
            'orm_default' => array(
                'metadata_cache'    => 'redis',
                'query_cache'       => 'redis',
                'result_cache'      => 'redis',
            )
        ),
        /**** end ****/
//        'cache' => array(
//            'redis' => array(
//                'instance' => 'doctrine.cache.redis',
//            ),
//        ),
    ],
];
