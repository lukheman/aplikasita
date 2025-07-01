<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum ProjectStatus: string implements HasLabel
{

    case Pending = 'Ditunda';
    case Progress = 'Dalam Pengerjaan';
    case Completed = 'Selesai';
    case Canceled = 'Dibatalkan';

    public function getLabel(): string {
        return $this->value;
    }

    public function getColor() {
        return match($this) {
            self::Pending => 'gray',
            self::Progress => 'warning',
            self::Completed => 'success',
            self::Canceled => 'danger',
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
