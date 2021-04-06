<?php
/**
 * PHP version 7.3
 *
 * @category SolutionOrderGetResponseResult
 * @package  RetailCrm\Model\Response\AliExpress\Result
 */

namespace RetailCrm\Model\Response\AliExpress\Result;

use RetailCrm\Model\Response\AliExpress\Result\Interfaces\ErrorInterface;
use RetailCrm\Model\Response\AliExpress\Result\Traits\ErrorTrait;
use JMS\Serializer\Annotation as JMS;
use RetailCrm\Model\Response\AliExpress\Result\Traits\SuccessTrait;

/**
 * Class SolutionOrderInfoGetResponseResult
 *
 * @category SolutionOrderInfoGetResponseResult
 * @package  RetailCrm\Model\Response\AliExpress\Result
 */
class SolutionOrderInfoGetResponseResult implements ErrorInterface
{
    use ErrorTrait;

    /**
     * @var int $data
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("data")
     */
    public $data;


    /**
     * @var string $timestamp
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("time_stamp")
     */
    public $timeStamp;
}
