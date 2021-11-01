<?php
namespace PhpDesignPattern\Prototype\Employee;

class Address
{
    private float $longitude;
    private float $latitude;
    private string $streetName;
    private string $city;
    private string $country;
    private int $buildingNumber;
    private int $zipCode;

	/**
	 * @param $longitude float 
	 * @param $latitude float 
	 * @param $streetName string 
	 * @param $city string 
	 * @param $country string 
	 * @param $buildingNumber int 
	 * @param $zipCode int 
	 */
	public function __construct(float $longitude, float $latitude, string $streetName, string $city, string $country, int $buildingNumber, int $zipCode) 
    {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->streetName = $streetName;
        $this->city = $city;
        $this->country = $country;
        $this->buildingNumber = $buildingNumber;
        $this->zipCode = $zipCode;
	}

    /**
     * Summary of getLongitude
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Summary of getLatitude
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Summary of getStreetName
     * @return string
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * Summary of getCity
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Summary of getCountry
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Summary of getBuildingNumber
     * @return int
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * Summary of getZipCode
     * @return int
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }
}