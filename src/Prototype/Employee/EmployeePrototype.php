<?php
namespace PhpDesignPattern\Prototype\Employee;

use PhpDesignPattern\Prototype\Employee\Privileges\Privileges;
use PhpDesignPattern\Prototype\Employee\Privileges\Types\ServerRoomTypePrivilege;
use PhpDesignPattern\Prototype\Employee\Privileges\Types\WebTypePrivilege;
use PhpDesignPattern\Prototype\Employee\ProfileData;
use PhpDesignPattern\Prototype\Employee\Salary;

class EmployeePrototype implements Prototype
{
    private ProfileData $profileData;
    private Salary $salary;
    private Privileges $privileges;
    
	
	/**
	 * @param $profileData ProfileData 
	 * @param $salary Salary 
	 * @param $privileges Privileges 
	 */
	function __construct(ProfileData $profileData, Salary $salary, Privileges $privileges) 
    {
        $this->profileData = $profileData;
        $this->salary = $salary;
        $this->privileges = $privileges;
	}

    /**
     * Summary of __clone
     * @return EmployeePrototype
     */
    public function __clone()
    {
        $this->privileges->clearPrivileges();
        $this->privileges->addPrivilege(new WebTypePrivilege());
        $this->privileges->addPrivilege(new ServerRoomTypePrivilege());

        $this->salary->setTax(1.5);
        $this->salary->setSalary(1500);
        $this->salary->setMedicalInsurance(12345678);

        $this->profileData->setName("Default Employee Name");
        $this->profileData->setAddress(null);
        $this->profileData->setAge(30);
        $this->profileData->setMobileNumber("22345678");
        $this->profileData->setPhoneNumber("66807744");
        $this->profileData->setSlackAccountName("Sherien");
        
        return $this;
    }

    /**
     * Summary of getProfileData
     * @return ProfileData
     */
    public function getProfileData()
    {
        return $this->profileData;
    }

    /**
     * Summary of getSalary
     * @return Salary
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Summary of getPrivileges
     * @return Privileges
     */
    public function getPrivileges()
    {
        return $this->privileges;
    }
}