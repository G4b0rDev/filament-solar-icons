# Filament Solar Icons

A Solar icon set implementation for Filament 4.x, providing the full set of Solar icons integrated with Filament's interface.

## Installation

Install via Composer:
```bash
composer require g4b0rdev/filament-solar-icons
```

Register the plugin in your Filament Panel provider:
```php
use G4b0rDev\Icons\Solar\SolarIcons;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugin(SolarIcons::make());
}
```

## Icon Styles

Solar icons come in **seven styles**: `bold`, `broken`, `duotone`, `linear`, `outline`, `bold-duotone`, and `line-duotone`.

By default, the package uses the `outline` style. You can change the global style:

```php
SolarIcons::make()
    ->style('bold');
```

## Override Specific Icons

### Override Icon Aliases
```php
SolarIcons::make()
    ->overrideAlias(PanelsIconAlias::SIDEBAR_EXPAND_BUTTON, SolarBold::AltArrowRight)
    ->overrideAlias(TablesIconAlias::SEARCH_FIELD, SolarOutline::Magnifer);
```

Or override multiple aliases:
```php
SolarIcons::make()
    ->overrideAliases([
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON => SolarBold::AltArrowRight,
        TablesIconAlias::SEARCH_FIELD => SolarOutline::Magnifer,
        ActionsIconAlias::CREATE_ACTION_GROUPED => SolarBold::AddCircle,
    ]);
```

### Override Individual Icons
```php
SolarIcons::make()
    ->overrideIcon(SolarOutline::MinimalisticMagnifer, SolarBold::Magnifer)
    ->overrideIcon(SolarOutline::AddCircle, SolarBold::AddSquare);
```

Or override multiple icons:
```php
SolarIcons::make()
    ->overrideIcons([
        SolarOutline::MinimalisticMagnifer->value => SolarOutline::Magnifer,
        SolarOutline::AddCircle->value => SolarOutline::AddSquare,
        SolarOutline::Pen->value => SolarOutline::PenNewSquare,
    ]);
```

### Override Styles for Specific Aliases
```php
SolarIcons::make()
    ->style('outline')
    ->overrideStyleForAlias(PanelsIconAlias::SIDEBAR_EXPAND_BUTTON, 'bold')
    ->overrideStyleForAlias([
        TablesIconAlias::SEARCH_FIELD,
        TablesIconAlias::ACTIONS_FILTER,
    ], 'broken');
```

### Override Styles for Specific Icons
```php
SolarIcons::make()
    ->style('outline')
    ->overrideStyleForIcon(SolarOutline::Magnifer, 'bold')
    ->overrideStyleForIcon([
        SolarOutline::Home,
        SolarOutline::User,
    ], 'broken');
```

## License
The MIT License (MIT). Please see [License](LICENSE.md) for more information.