<?php

namespace App\Enum;

enum MovieRating: string
{
    case L = 'L';
    case TEN = '10';
    case TWELVE = '12';
    case FOURTEEN = '14';
    case SIXTEEN = '16';
    case EIGHTEEN = '18';

    public function label(): string
    {
        return match($this) {
            self::L => 'Livre',
            self::TEN => '10 anos',
            self::TWELVE => '12 anos',
            self::FOURTEEN => '14 anos',
            self::SIXTEEN => '16 anos',
            self::EIGHTEEN => '18 anos',
        };
    }
}
