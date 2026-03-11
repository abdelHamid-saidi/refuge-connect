<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    public function run(): void
    {
        $animals = [
            [
                "name" => "Bella",
                "species" => "Chien",
                "age" => 5,
                "description" => "Une labrador joueuse et affectueuse qui adore la compagnie.",
                "photo" => "bella.png",
            ],
            [
                "name" => "Luna",
                "species" => "Chat",
                "age" => 3,
                "description" => "Une chatte calme et câline qui aime les endroits tranquilles.",
                "photo" => "luna.png",
            ],
            [
                "name" => "Max",
                "species" => "Chien",
                "age" => 2,
                "description" => "Un jeune chiot plein d’énergie qui adore courir et jouer dehors.",
                "photo" => "max.png",
            ],
        ];

        foreach ($animals as $animal) {
            Animal::create($animal);
        }
    }
}
