<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition(): array
    {
        $filename = fake()->lexify('image_????') . '.jpg';
        $path = 'seed/images/' . $filename;

        return [
            'filename' => $filename,
            'path' => $path,
            'disk' => 'public',
            'mime_type' => 'image/jpeg',
            'size' => fake()->numberBetween(10000, 500000),
            'order' => 0,
        ];
    }
}
