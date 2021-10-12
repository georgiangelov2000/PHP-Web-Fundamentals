<?php

namespace Data\Users;

use Data\Cities\City;
use Data\Countries\Country;
use Data\Genders\Gender;
use Data\Orientations\Orientation;


class UserRegisterViewData
{
    /**
     * @var Gender[]|\Generator
     */
    private $genders;

    /**
     * @var City[]|\Generator
     */
    private $cities;

    /**
     * @var Country[]|\Generator
     */
    private $countries;

    /**
     * @var Orientation[]|\Generator
     */
    private $orientations;

// START GENDERS
    /**
     * @return Gender[]|\Generator
     */
    public function getGenders()
    {
        return $this->genders;
    }

    /**
     * @param callable $genders
     */
    public function setGenders(callable  $genders)
    {
        $this->genders = $genders();
    }
// END GENDERS


// START CITIES
    /**
     * @return \Data\Cities\City[]|\Generator
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * @param callable $cities
     */
    public function setCities(callable $cities)
    {
        $this->cities = $cities();
    }
// END CITIES


// START COUNTRIES
    /**
     * @return \Data\Countries\Country[]|\Generator
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @param callable $countries
     */
    public function setCountries(callable $countries)
    {
        $this->countries = $countries();
    }
//  END COUNTRIES


//START ORIENTATIONS
    /**
     * @return \Data\Orientations\Orientation[]|\Generator
     */
    public function getOrientations()
    {
        return $this->orientations;
    }

    /**
     * @param callable $orientations
     */
    public function setOrientations(callable $orientations)
    {
        $this->orientations = $orientations();
    }
//END ORIENTATIONS

}
