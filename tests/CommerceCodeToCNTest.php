<?php
declare(strict_types=1);

namespace BetterTransbank\Certificates\Tests;

use PHPUnit\Framework\TestCase;
use BetterTransbank\Certificates\Webpay\Plus;
use BetterTransbank\Certificates\Webpay\OneClick;

/**
 * Class CommerceCodeToCNTest
 * @package BetterTransbank\Certificates\Tests
 */
class CommerceCodeToCNTest extends TestCase
{
    public function testWebpayPlusCNToCommerceCodes(): void
    {
        $this->assertEquals(Plus\Normal::COMMERCE_CODE, $this->getCommerceCode(Plus\Normal::PUBLIC));
        $this->assertEquals(Plus\Mall::COMMERCE_CODE, $this->getCommerceCode(Plus\Mall::PUBLIC));
        $this->assertEquals(Plus\MallDeferred::COMMERCE_CODE, $this->getCommerceCode(Plus\MallDeferred::PUBLIC));
        $this->assertEquals(Plus\PatPass::COMMERCE_CODE, $this->getCommerceCode(Plus\PatPass::PUBLIC));
        $this->assertEquals(Plus\Deferred::COMMERCE_CODE, $this->getCommerceCode(Plus\Deferred::PUBLIC));
    }

    public function testWebpayOneClickCNToCommerceCodes(): void
    {
        $this->assertEquals(OneClick\Normal::COMMERCE_CODE, $this->getCommerceCode(OneClick\Normal::PUBLIC));
        $this->assertEquals(OneClick\Mall::COMMERCE_CODE, $this->getCommerceCode(OneClick\Mall::PUBLIC));
        $this->assertEquals(OneClick\MallDeferred::COMMERCE_CODE, $this->getCommerceCode(OneClick\MallDeferred::PUBLIC));
    }

    /**
     * @param string $certificate
     * @return string
     */
    protected function getCommerceCode(string $certificate): string
    {
        $data = openssl_x509_parse(file_get_contents($certificate), true);
        return $data['subject']['CN'];
    }
}