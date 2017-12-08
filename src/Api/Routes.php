<?php

namespace ApiClient\Api;

/**
 * Class Routes
 */
class Routes
{
    const API_VERSION = 'v1';
    const API_ROUTES  = [
        'OMEGA_BABEL'    => [
            'PRODUCT_DETAILS'     => self::API_VERSION.'/products/%s',
            'ATTRIBUTES_FROM_SKU' => self::API_VERSION.'/sku/%s',
        ],
        'OMEGA_PREPRESS' => [
            'IMPORT_JOB' => self::API_VERSION.'/prepress/import',
        ],
        'OMEGA_KERNEL'   => [
            'ITEM_BY_IDS' => self::API_VERSION.'/order/itemByIds',
        ],
    ];

    /**
     * @param string $service
     * @param string $api
     *
     * @return string
     * @throws \Exception
     */
    public static function get(string $service, string $api): string
    {
        if (!isset(self::API_ROUTES[$service]) && !isset(self::API_ROUTES[$service][$api])) {
            throw new \Exception('API_NOT_FOUND');
        }

        return self::API_ROUTES[$service][$api];
    }
}
