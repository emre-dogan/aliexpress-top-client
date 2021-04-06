<?php
/**
 * PHP version 7.3
 *
 * @category SolutionOrderInfoGetResponseData
 * @package  RetailCrm\Model\Response\AliExpress\Data
 */

namespace RetailCrm\Model\Response\AliExpress\Data;

use JMS\Serializer\Annotation as JMS;
use RetailCrm\Model\Response\AliExpress\Result\SolutionOrderInfoGetResponseResult;

/**
 * Class SolutionOrderInfoGetResponseData
 *
 * @category SolutionOrderInfoGetResponseData
 * @package  RetailCrm\Model\Response\AliExpress\Data
 */
class SolutionOrderInfoGetResponseData
{
    /**
     * @var SolutionOrderInfoGetResponseResult $result
     *
     * @JMS\Type("RetailCrm\Model\Response\AliExpress\Result\SolutionOrderInfoGetResponseResult")
     * @JMS\SerializedName("result")
     */
    public $result;
}
