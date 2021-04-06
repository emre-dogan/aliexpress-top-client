<?php
/**
 * PHP version 7.3
 *
 * @category SolutionOrderReceiptInfoGet
 * @package  RetailCrm\Model\Request\AliExpress
 */

namespace RetailCrm\Model\Request\AliExpress;

use RetailCrm\Model\Request\BaseRequest;
use JMS\Serializer\Annotation as JMS;
use RetailCrm\Model\Response\AliExpress\SolutionOrderInfoGetResponse;

/**
 * Class SolutionOrderReceiptInfoGet
 *
 * @category SolutionOrderReceiptInfoGet
 * @package  RetailCrm\Model\Request\AliExpress
 */
class SolutionOrderInfoGet extends BaseRequest
{
    /**
     * @var \RetailCrm\Model\Request\AliExpress\Data\OrderDetailQuery $param1
     *
     * @JMS\Type("RetailCrm\Model\Request\AliExpress\Data\OrderDetailQuery")
     * @JMS\SerializedName("param1")
     */
    public $param1;

    /**
     * @inheritDoc
     */
    public function getMethod(): string
    {
        return 'aliexpress.solution.order.info.get';
    }

    /**
     * @inheritDoc
     */
    public function getExpectedResponse(): string
    {
        return SolutionOrderInfoGetResponse::class;
    }
}
