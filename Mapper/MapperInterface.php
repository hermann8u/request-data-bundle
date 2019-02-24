<?php

namespace Bilyiv\RequestDataBundle\Mapper;

use Bilyiv\RequestDataBundle\RequestDataInterface;

/**
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
interface MapperInterface
{
    /**
     * Map data to certain class.
     *
     * @param $data
     * @param string $format
     * @param string $class
     *
     * @return RequestDataInterface
     */
    public function map($data, string $format, string $class): RequestDataInterface;
}
