<?php
declare(strict_types=1);


namespace BetterTransbank\Certificates\Tests;

use BetterTransbank\Certificates\Transbank;
use BetterTransbank\Certificates\Webpay\Plus;
use BetterTransbank\Certificates\Webpay\OneClick;
use PHPUnit\Framework\TestCase;

/**
 * Class CertificateExpirationTest
 * @package BetterTransbank\Certificates\Tests
 */
class CertificateExpirationTest extends TestCase
{
    public function testTransbankCertificatesAreNotExpired(): void
    {
        $this->assertGreaterThan(time(), $this->getCertificateExpiration(Transbank::STAGING));
        $this->assertGreaterThan(time(), $this->getCertificateExpiration(Transbank::PRODUCTION));
    }

    public function testWebpayPlusCertificatesAreNotExpired(): void
    {
        $this->assertGreaterThan(time(), $this->getCertificateExpiration(Plus\Normal::PUBLIC));
        $this->assertGreaterThan(time(), $this->getCertificateExpiration(Plus\Deferred::PUBLIC));
        $this->assertGreaterThan(time(), $this->getCertificateExpiration(Plus\Mall::PUBLIC));
        $this->assertGreaterThan(time(), $this->getCertificateExpiration(Plus\MallDeferred::PUBLIC));
        $this->assertGreaterThan(time(), $this->getCertificateExpiration(Plus\PatPass::PUBLIC));
    }

    public function testWebpayOneClickCertificatesAreNotExpired(): void
    {
        $this->assertGreaterThan(time(), $this->getCertificateExpiration(OneClick\Normal::PUBLIC));
        $this->assertGreaterThan(time(), $this->getCertificateExpiration(OneClick\Mall::PUBLIC));
        $this->assertGreaterThan(time(), $this->getCertificateExpiration(OneClick\MallDeferred::PUBLIC));
    }

    protected function getCertificateExpiration(string $certificate): int
    {
        $data = openssl_x509_parse(file_get_contents($certificate), true);
        return $data['validTo_time_t'];
    }
}