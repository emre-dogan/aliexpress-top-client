<?php
/**
 * PHP version 7.3
 *
 * @category SolutionOrderReceiptInfoGetResponse
 * @package  RetailCrm\Model\Response\AliExpress
 */

namespace RetailCrm\Model\Response\AliExpress;

use RetailCrm\Model\Response\AliExpress\Data\SolutionOrderInfoGetResponseData;
use RetailCrm\Model\Response\BaseResponse;
use JMS\Serializer\Annotation as JMS;

/**
 * Class SolutionOrderInfoGetResponse
 *
 * @category SolutionOrderReceiptInfoGetResponse
 * @package  RetailCrm\Model\Response\AliExpress
 */
class SolutionOrderInfoGetResponse extends BaseResponse
{
    /**
     * @var SolutionOrderInfoGetResponseData $responseData
     *
     * @JMS\Type("RetailCrm\Model\Response\AliExpress\Data\SolutionOrderInfoGetResponseData")
     * @JMS\SerializedName("aliexpress_solution_order_info_get_response")
     */
    public $responseData;
}
