<?php

declare(strict_types=1);

namespace G4b0rDev\Icons\Solar\Enums;

use Filafly\Icons\Contracts\StyleEnum;

enum SolarStyle: string implements StyleEnum
{
    case BOLD = 'bold';
    case BROKEN = 'broken';
    case DUOTONE = 'duotone';
    case LINEAR = 'linear';
    case OUTLINE = 'outline';
    case BOLD_DUOTONE = 'bold-duotone';
    case LINE_DUOTONE = 'line-duotone';

    public static function getStyleNames(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function fromStyleName(string $styleName): ?self
    {
        foreach (self::cases() as $case) {
            if ($case->getStyleName() === $styleName) {
                return $case;
            }
        }

        return null;
    }

    public function getStyleName(): string
    {
        return $this->value;
    }

    public function getEnumSuffix(): string
    {
        return str_replace('-', '', ucwords($this->value, '-'));
    }
}
