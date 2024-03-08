<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;
use App\Models\Category;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id, // カテゴリIDをランダムに選択
            'first' => $this->faker->firstName,
            'last' => $this->faker->lastName,
            'gender' => $this->faker->randomElement([0, 1, 2]), // 2:男性 1:女性 0:その他
            'email' => $this->faker->unique()->safeEmail,
            'tel' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'building' => $this->faker->secondaryAddress,
            'content' => $this->faker->realText(200),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
