<?php
require_once '/Users/jstennett/GitHub/XmlToPhp/vendor/fzaninotto/faker/src/autoload.php';

class FakerDataGenerator
{
    public function getFakerCustomerData()
    {
        $faker = \Faker\Factory::create();
        $customerData = [
            'prefix' => $faker->title,
            'firstname' => $faker->firstName,
            'middlename' => $faker->firstName,
            'lastname' => $faker->lastName,
            'suffix' => \Faker\Provider\en_US\Person::suffix(),
            'email' => $faker->email,
            'dateOfBirth' => $faker->date($format = 'm/d/Y', $max = 'now'),
            'gender' => rand(0, 1),
            'group_id' => 1,
            'store_id' => 1,
            'website_id' => 1,
            'taxVatNumber' => \Faker\Provider\at_AT\Payment::vat(),
            'company' => $faker->company,
            'phoneNumber' => $faker->tollFreePhoneNumber,
            'address' => [
                'address1' => $faker->streetAddress,
                'address2' => $faker->streetAddress,
                'city' => $faker->city,
                'country' => 'United States',
                'state' => \Faker\Provider\en_US\Address::state(),
                'zipCode' => $faker->postcode
            ]
        ];

        return $customerData;
    }
}