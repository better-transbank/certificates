<?php
declare(strict_types=1);

namespace BetterTransbank\Certificates\Tests;

use BetterTransbank\Certificates\Transbank;
use PHPUnit\Framework\TestCase;
use BetterTransbank\Certificates\Webpay\Plus;
use BetterTransbank\Certificates\Webpay\OneClick;

/**
 * Class CertificatesPermissionTest
 * @package BetterTransbank\Certificates\Tests
 */
class CertificatesPermissionTest extends TestCase
{
    public function testTransbankCertsAreReadable(): void
    {
        $this->assertFileExists(Transbank::PRODUCTION, 'Transbank production certificate does not exist');
        $this->assertFileIsReadable(Transbank::PRODUCTION, 'Transbank production certificate is not readable');

        $this->assertFileExists(Transbank::STAGING, 'Transbank staging certificate does not exist');
        $this->assertFileIsReadable(Transbank::STAGING, 'Transbank staging certificate is not readable');
    }

    public function testWebpayPlusCertsAreReadable(): void
    {
        $this->assertFileExists(Plus\Normal::PRIVATE, 'Webpay plus normal private certificate does not exist');
        $this->assertFileIsReadable(Plus\Normal::PRIVATE, 'Webpay plus normal private certificate is not readable');
        $this->assertFileExists(Plus\Normal::PUBLIC, 'Webpay plus normal public certificate does not exist');
        $this->assertFileIsReadable(Plus\Normal::PUBLIC, 'Webpay plus normal public certificate is not readable');

        $this->assertFileExists(Plus\Mall::PRIVATE, 'Webpay plus mall private certificate does not exist');
        $this->assertFileIsReadable(Plus\Mall::PRIVATE, 'Webpay plus mall private certificate is not readable');
        $this->assertFileExists(Plus\Mall::PUBLIC, 'Webpay plus mall public certificate does not exist');
        $this->assertFileIsReadable(Plus\Mall::PUBLIC, 'Webpay plus mall public certificate is not readable');

        $this->assertFileExists(Plus\PatPass::PRIVATE, 'Webpay plus patpass private certificate does not exist');
        $this->assertFileIsReadable(Plus\PatPass::PRIVATE, 'Webpay plus patpass private certificate is not readable');
        $this->assertFileExists(Plus\PatPass::PUBLIC, 'Webpay plus patpass public certificate does not exist');
        $this->assertFileIsReadable(Plus\PatPass::PUBLIC, 'Webpay plus patpass public certificate is not readable');

        $this->assertFileExists(Plus\Deferred::PRIVATE, 'Webpay plus deferred private certificate does not exist');
        $this->assertFileIsReadable(Plus\Deferred::PRIVATE, 'Webpay plus deferred private certificate is not readable');
        $this->assertFileExists(Plus\Deferred::PUBLIC, 'Webpay plus deferred public certificate does not exist');
        $this->assertFileIsReadable(Plus\Deferred::PUBLIC, 'Webpay plus deferred public certificate is not readable');

        $this->assertFileExists(Plus\MallDeferred::PRIVATE, 'Webpay plus mall-deferred private certificate does not exist');
        $this->assertFileIsReadable(Plus\MallDeferred::PRIVATE, 'Webpay plus mall-deferred private certificate is not readable');
        $this->assertFileExists(Plus\MallDeferred::PUBLIC, 'Webpay plus mall-deferred public certificate does not exist');
        $this->assertFileIsReadable(Plus\MallDeferred::PUBLIC, 'Webpay plus mall-deferred public certificate is not readable');
    }

    public function testWebpayOneClickCertsAreReadable(): void
    {
        $this->assertFileExists(OneClick\Normal::PRIVATE, 'Webpay oneclick normal private certificate does not exist');
        $this->assertFileIsReadable(OneClick\Normal::PRIVATE, 'Webpay oneclick normal private certificate is not readable');
        $this->assertFileExists(OneClick\Normal::PUBLIC, 'Webpay oneclick normal public certificate does not exist');
        $this->assertFileIsReadable(OneClick\Normal::PUBLIC, 'Webpay oneclick normal public certificate is not readable');

        $this->assertFileExists(OneClick\MallDeferred::PRIVATE, 'Webpay oneclick mall-deferred private certificate does not exist');
        $this->assertFileIsReadable(OneClick\MallDeferred::PRIVATE, 'Webpay oneclick mall-deferred private certificate is not readable');
        $this->assertFileExists(OneClick\MallDeferred::PUBLIC, 'Webpay oneclick mall-deferred public certificate does not exist');
        $this->assertFileIsReadable(OneClick\MallDeferred::PUBLIC, 'Webpay oneclick mall-deferred public certificate is not readable');

        $this->assertFileExists(OneClick\Mall::PRIVATE, 'Webpay oneclick mall private certificate does not exist');
        $this->assertFileIsReadable(OneClick\Mall::PRIVATE, 'Webpay oneclick mall private certificate is not readable');
        $this->assertFileExists(OneClick\Mall::PUBLIC, 'Webpay oneclick mall public certificate does not exist');
        $this->assertFileIsReadable(OneClick\Mall::PUBLIC, 'Webpay oneclick mall public certificate is not readable');
    }
}