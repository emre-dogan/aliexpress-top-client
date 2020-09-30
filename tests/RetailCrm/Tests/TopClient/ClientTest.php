<?php

/**
 * PHP version 7.3
 *
 * @category ClientTest
 * @package  RetailCrm\Tests\TopClient
 * @author   RetailCRM <integration@retailcrm.ru>
 * @license  MIT
 * @link     http://retailcrm.ru
 * @see      http://help.retailcrm.ru
 */
namespace RetailCrm\Tests\TopClient;

use Psr\Http\Message\RequestInterface;
use RetailCrm\Builder\ClientBuilder;
use RetailCrm\Component\AppData;
use RetailCrm\Component\Authenticator\TokenAuthenticator;
use RetailCrm\Component\Constants;
use RetailCrm\Component\Exception\TopApiException;
use RetailCrm\Model\Request\HttpDnsGetRequest;
use RetailCrm\Model\Response\BaseResponse;
use RetailCrm\Model\Response\Body\ErrorResponseBody;
use RetailCrm\Test\ClosureRequestMatcher;
use RetailCrm\Test\TestCase;

/**
 * Class ClientTest
 *
 * @category ClientTest
 * @package  RetailCrm\Tests\TopClient
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  MIT
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ClientTest extends TestCase
{
    public function testClientRequestException()
    {
        $errorBody = new ErrorResponseBody();
        $errorBody->code = 999;
        $errorBody->msg = 'Mocked error';
        $errorBody->subCode = 'subcode';
        $errorBody->requestId = '1';
        $errorResponse = new BaseResponse();
        $errorResponse->errorResponse = $errorBody;

        $mockClient = self::getMockClient();
        $mockClient->on(new ClosureRequestMatcher(function (RequestInterface $request) {
            return true;
        }), $this->responseJson(400, $errorResponse));

        $client = ClientBuilder::create()
            ->setContainer($this->getContainer($mockClient))
            ->setAppData(new AppData(AppData::OVERSEAS_ENDPOINT, 'appKey', 'appSecret'))
            ->build();

        $this->expectExceptionMessage($errorBody->msg);

        $client->sendRequest(new HttpDnsGetRequest());
    }
}
