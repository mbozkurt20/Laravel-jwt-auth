<?php

namespace Tests\Unit;

use Faker\Factory;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function store(){
        $faker = Factory::create();
        $data = [];
        $data[] ['username'] = $faker->userName;
        $data[] ['name'] = $faker->name;
        return response()->json($data,201);
    }
}
