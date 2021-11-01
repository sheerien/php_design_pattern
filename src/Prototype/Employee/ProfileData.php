<?php
namespace PhpDesignPattern\Prototype\Employee;

use PhpDesignPattern\Prototype\Employee\Address;

class ProfileData
{
    private string $name = "Employee Name";
    private int $age;
    private ?Address $address;
    private string $phoneNumber;
    private string $mobileNumber;
    private string $slackAccountName;

    

    /**
     * Summary of __construct
     * @param string $name
     * @param int $age
     * @param Address|null $address
     * @param string $phoneNumber
     * @param string $mobileNumber
     * @param string $slackAccountName
     */
	function __construct(string $name, int $age, ?Address $address, string $phoneNumber, string $mobileNumber, string $slackAccountName) 
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->mobileNumber = $mobileNumber;
        $this->slackAccountName = $slackAccountName;
	}

    

    /**
     * Summary of getName
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Summary of getAge
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Summary of getAddress
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Summary of getPhoneNumber
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Summary of getMobileNumber
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * Summary of getSlackAccountName
     * @return string
     */
    public function getSlackAccountName()
    {
        return $this->slackAccountName;
    }

    /**
     * Summary of setName
     * @param string $name
     * @return ProfileData
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Summary of setAge
     * @param int $age
     * @return ProfileData
     */
    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Summary of setAddress
     * @param Address|null $address
     * @return ProfileData
     */
    public function setAddress(?Address $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Summary of setPhoneNumber
     * @param string $phoneNumber
     * @return ProfileData
     */
    public function setPhoneNumber(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Summary of setMobileNumber
     * @param string $mobileNumber
     * @return ProfileData
     */
    public function setMobileNumber(string $mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;

        return $this;
    }

    /**
     * Summary of setSlackAccountName
     * @param string $slackAccountName
     * @return ProfileData
     */
    public function setSlackAccountName(string $slackAccountName)
    {
        $this->slackAccountName = $slackAccountName;

        return $this;
    }
}