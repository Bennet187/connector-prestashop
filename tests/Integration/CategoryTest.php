<?php


namespace Tests;


class CategoryTest extends \Connector\IntegrationTests\Integration\CategoryTest
{
    public function getIgnoreArray()
    {
        return [
            'level',
            'id',
            'i18ns'
        ];
    }
}
