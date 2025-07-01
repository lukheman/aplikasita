<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;


enum PaymentStatus: string implements HasLabel
{

    case Paid = 'Lunas';
    case Partial = 'Setengah Dibayar';
    case Unpaid = 'Belum Dibayar';

    public function getLabel(): string {
        return $this->value;
    }

    public function getColor() {
        return match($this) {
            self::Paid => 'success',
            self::Partial => 'warning',
            self::Unpaid => 'danger',
            default => 'default'
        };
    }

    public static function values() :array {
        return array_map(fn($case) => $case->value, self::cases());
    }

    public static function options() {
        return array_combine(self::values(), self::values());
    }


}
