# Changelog

All notable changes to `filament-solar-icons` will be documented in this file.

## v2.0.0 - 2026-03-25

### Changed
- Upgraded to Filament v5 (drops Filament v4 support)
- Updated `filafly/filament-icons` to `^2.2`
- Updated `codeat3/blade-solar-icons` to `^1.4`

## v1.1.1 - 2026-03-25

### Security
- Bumped minimum Filament version to `^4.8` to resolve security advisories (CVE-2025-67507, CVE-2026-33080 and transitive CVEs in symfony and league/commonmark)

## v1.1.0 - 2025-10-12

### Added
- `feat: add getIconName method to enums`

### Documentation
- `docs: update README with getIconName method usage`

## [1.0.0] - 2025-10-10

### Added

- Initial release of Filament Solar Icons
- Support for all 7 Solar icon styles (bold, broken, duotone, linear, outline, bold-duotone, line-duotone)
- Icon alias override system for Filament components
- Individual icon override functionality
- Style override for specific aliases
- Style override for specific icons
- Full integration with Filament 4.x panels
- PHP 8.4 support
- Comprehensive documentation with usage examples