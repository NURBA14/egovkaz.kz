<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                "Айдар Абдрахманов",
                "Айжан Есенова",
                "Данияр Касымов",
                "Гульжан Жумагулова",
                "Нурсултан Токтамысов",
                "Айгерим Сарсенбаева",
                "Айнур Жаксыбаев",
                "Асылхан Амангельдиев",
                "Сая Темиргалиева",
                "Айша Куандыкова",
                "Аскар Баймуратов",
                "Айнагуль Жумагазиева",
                "Дамир Султанбаев",
                "Гульназ Шарипова",
                "Нурлан Абдуллин",
                "Айдан Сагынбаева",
                "Раушан Ермеков",
                "Сабина Исмагулова",
                "Адиль Токтаров",
                "Динара Жангазиева",
                "Айтолкын Байсеков",
                "Айгуль Жумагалиева",
                "Ерлан Кенжебаев",
                "Айназар Мырзабеков",
                "Нургуль Байгабулова",
                "Аскар Шарипов",
                "Гаухар Серикбаева",
                "Алия Кенжебекова",
                "Даурен Нургазин",
                "Гульдана Тулегенова"
            ]),
            'iin' => fake()->randomNumber(6, true) . fake()->randomNumber(6, true),
            "telegram_user_id" => 1300688699,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            "created_at" => now(),
            "updated_at" => now()
        ];
    }
}