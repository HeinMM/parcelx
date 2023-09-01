<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Status>
 */
class StatusFactory extends Factory
{
    private $customMessages = [
        'ဘိုကင် တင်ထားဆဲပါ',
        'တာ၀န်ပေးအပ်ထားခြင်း',
        'သယ်ဆောင်လာခြင်း',
        'အိမ်သို့ပို့ဆောင်ပီး',
        'ပစ္စည်းလက်မခံပါ',
    ];
    private $messageIndex = 0;

    public function definition(): array
    {
        return [
            "status_message" => $this->getCustomMessage(),
        ];
    }

    public function getCustomMessage()
    {
        $message = $this->customMessages[$this->messageIndex];
        $this->messageIndex = ($this->messageIndex + 1) % count($this->customMessages);

        // Reset the index to 0 if it exceeds the array length
        if ($this->messageIndex >= count($this->customMessages)) {
            $this->messageIndex = 0;
        }

        return $message;
    }
}
