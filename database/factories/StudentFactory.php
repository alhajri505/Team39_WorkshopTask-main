<?php

// This factory is part of the Database\Factories namespace
namespace Database\Factories;

// This is the base Factory class that all factories extend
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 * 
 * @todo: Add comments. What is the the purpose of this class?
 * 
 * @todo: Should this class be used for development or production?
 * 
 * @todo: What artisan command was used to create this class?
 */
/* The `class StudentFactory extends Factory` is creating a factory class for the `Student` model. It
extends the base `Factory` class provided by Laravel's Eloquent ORM. This factory class is used to
generate fake data for the `Student` model, which can be used for testing or seeding the database. */
class StudentFactory extends Factory
{
    /**
     * @todo: Add comments. What is the purpose of the definition() function?
     * @todo: What is Faker? What is it used for? Is it part of Laravel?
     * @todo: Why do we use random data here?
     *
     * @return array<string, mixed>
     */
   /* The `public function definition(): array` is a method within the `StudentFactory` class that
   defines the structure and data for generating fake data for the `Student` model. It returns an
   array of key-value pairs, where each key represents a column in the `students` table and the
   value represents the fake data to be inserted into that column. */
    public function definition(): array
    {
        /** 
         * @todo: What is $this->faker? 
         * @todo: What is the unique() method used for?
         * @todo: What is the numberBetween() method used for?
         * @todo: why do we store the result in a variable?
        */
        $sun = $this->faker->unique()->numberBetween(180000000, 209999999);

        /**
         * @todo: The method returns an array of data in key-value pairs, but what does they represent?
         * @todo: Comment each key-value pair to explain what it represents.
         */ 
         

       /* The `return [` statement is returning an array of key-value pairs. Each key represents a
       column in the `students` table, and each value represents the fake data to be inserted into
       that column. */
        return [
            'firstname' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'studentnumber' => $sun,
            'email' => $sun.'@aston.ac.uk',
            'dob' => $this->faker->dateTimeBetween('-30 years', '-20 years')->format('Y-m-d'),
        ];
    }
}
