<?php

namespace Boxberry\Requests;

class CreateIntakeRequest extends Request
{

    /**
     * @var int
     */
    protected $zip = null;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $street;

    /**
     * @var string
     */
    protected $house;

    /**
     * @var string
     */
    protected $building;

    /**
     * @var string
     */
    protected $housing;

    /**
     * @var string
     */
    protected $flat;

    /**
     * @var string
     */
    protected $contactPerson;

    /**
     * @var string
     */
    protected $contactPhone;

    /**
     * @var string
     */
    protected $takingDate;

    /**
     * @var string
     */
    protected $takingTimeFrom;

    /**
     * @var string
     */
    protected $takingTimeTo;

    /**
     * @var string
     */
    protected $seatsCount;

    /**
     * @var string
     */
    protected $volume;

    /**
     * @var string
     */
    protected $weight;

    /**
     * @var string
     */
    protected $comment;

    public function getPropNameMap()
    {
        return $this->propNameMap;
    }

    public function setPropNameMap($propNameMap)
    {
        $this->propNameMap = $propNameMap;
        return $this;
    }

    public function getZip()
    {
        return $this->zip;
    }

    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    public function getHouse()
    {
        return $this->house;
    }

    public function setHouse($house)
    {
        $this->house = $house;
        return $this;
    }

    public function getBuilding()
    {
        return $this->building;
    }

    public function setBuilding($building)
    {
        $this->building = $building;
        return $this;
    }

    public function getHousing()
    {
        return $this->housing;
    }

    public function setHousing($housing)
    {
        $this->housing = $housing;
        return $this;
    }

    public function getFlat()
    {
        return $this->flat;
    }

    public function setFlat($flat)
    {
        $this->flat = $flat;
        return $this;
    }

    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
        return $this;
    }

    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
        return $this;
    }

    public function getTakingDate()
    {
        return $this->takingDate;
    }

    public function setTakingDate($takingDate)
    {
        $this->takingDate = $takingDate;
        return $this;
    }

    public function getTakingTimeFrom()
    {
        return $this->takingTimeFrom;
    }

    public function setTakingTimeFrom($takingTimeFrom)
    {
        $this->takingTimeFrom = $takingTimeFrom;
        return $this;
    }

    public function getTakingTimeTo()
    {
        return $this->takingTimeTo;
    }

    public function setTakingTimeTo($takingTimeTo)
    {
        $this->takingTimeTo = $takingTimeTo;
        return $this;
    }

    public function getSeatsCount()
    {
        return $this->seatsCount;
    }

    public function setSeatsCount($seatsCount)
    {
        $this->seatsCount = $seatsCount;
        return $this;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @var array
     */
    protected $propNameMap = array(
        'zip' => 'zip',
        'city' => 'city',
        'street' => 'street',
        'house' => 'house',
        'building' => 'building',
        'housing' => 'housing',
        'flat' => 'flat',
        'contact_person' => 'contactPerson',
        'contact_phone' => 'contactPhone',
        'taking_date' => 'takingDate',
        'taking_time_from' => 'takingTimeFrom',
        'taking_time_to' => 'takingTimeTo',
        'seats_count' => 'seatsCount',
        'volume' => 'volume',
        'weight' => 'weight',
        'comment' => 'comment'
    );

    /**
     * @var string
     */
    protected $resultClass = 'Boxberry\\Client\\CreateIntakeResponse';

    /**
     * @return bool
     */
    function checkRequiredFields()
    {
        return true;
    }
}