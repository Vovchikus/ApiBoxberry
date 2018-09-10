<?php
/**
 *
 *  * This file is part of Boxberry Api.
 *  *
 *  * (c) 2016, T. I. R. Ltd.
 *  * Evgeniy Mosunov, Alexander Borovikov
 *  *
 *  * For the full copyright and license information, please view LICENSE
 *  * file that was distributed with this source code
 *  *
 *  * File: \Boxberry\Models\CityFull.php
 *  * Created: 26.07.2016
 *  *
 */

namespace Boxberry\Models;

/**
 * Class CityFull
 * @package Boxberry\Models
 */
class CityFull extends AbstractModel
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $receptionLap;

    /**
     * @var string
     */
    protected $deliveryLap;

    /**
     * @var string
     */
    protected $reception;

    /**
     * @var string
     */
    protected $pickupPoint;

    /**
     * @var string
     */
    protected $courierDelivery;

    /**
     * @var string
     */
    protected $foreignReceptionReturns;

    /**
     * @var string
     */
    protected $terminal;

    /**
     * @var string
     */
    protected $kladr;

    /**
     * @var string
     */
    protected $region;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $uniqName;

    /**
     * @var string
     */
    protected $district;

    /**
     * @var string
     */
    protected $prefix;


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $code
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    public function getReceptionLap(): string
    {
        return $this->receptionLap;
    }

    public function setReceptionLap(string $receptionLap): CityFull
    {
        $this->receptionLap = $receptionLap;
        return $this;
    }

    public function getDeliveryLap(): string
    {
        return $this->deliveryLap;
    }

    public function setDeliveryLap(string $deliveryLap): CityFull
    {
        $this->deliveryLap = $deliveryLap;
        return $this;
    }

    public function getReception(): string
    {
        return $this->reception;
    }

    public function setReception(string $reception): CityFull
    {
        $this->reception = $reception;
        return $this;
    }

    public function getPickupPoint(): string
    {
        return $this->pickupPoint;
    }

    public function setPickupPoint(string $pickupPoint): CityFull
    {
        $this->pickupPoint = $pickupPoint;
        return $this;
    }

    public function getCourierDelivery(): string
    {
        return $this->courierDelivery;
    }

    public function setCourierDelivery(string $courierDelivery): CityFull
    {
        $this->courierDelivery = $courierDelivery;
        return $this;
    }

    public function getForeignReceptionReturns(): string
    {
        return $this->foreignReceptionReturns;
    }

    public function setForeignReceptionReturns(string $foreignReceptionReturns): CityFull
    {
        $this->foreignReceptionReturns = $foreignReceptionReturns;
        return $this;
    }

    public function getTerminal(): string
    {
        return $this->terminal;
    }

    public function setTerminal(string $terminal): CityFull
    {
        $this->terminal = $terminal;
        return $this;
    }

    public function getKladr(): string
    {
        return $this->kladr;
    }

    public function setKladr(string $kladr): CityFull
    {
        $this->kladr = $kladr;
        return $this;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): CityFull
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getUniqName(): string
    {
        return $this->uniqName;
    }

    public function setUniqName(string $uniqName): CityFull
    {
        $this->uniqName = $uniqName;
        return $this;
    }

    public function getDistrict(): string
    {
        return $this->district;
    }

    public function setDistrict(string $district): CityFull
    {
        $this->district = $district;
        return $this;
    }

    public function getPrefix(): string
    {
        return $this->prefix;
    }

    public function setPrefix(string $prefix): CityFull
    {
        $this->prefix = $prefix;
        return $this;
    }
}