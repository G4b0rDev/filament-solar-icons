<?php

declare(strict_types=1);

namespace G4b0rDev\Icons\Solar;

use Filafly\Icons\IconSet;
use Filament\Actions\View\ActionsIconAlias;
use Filament\Forms\View\FormsIconAlias;
use Filament\Infolists\View\InfolistsIconAlias;
use Filament\Notifications\View\NotificationsIconAlias;
use Filament\Support\View\SupportIconAlias;
use Filament\Tables\View\TablesIconAlias;
use Filament\View\PanelsIconAlias;
use G4b0rDev\Icons\Solar\Enums\SolarBold;
use G4b0rDev\Icons\Solar\Enums\SolarBoldDuotone;
use G4b0rDev\Icons\Solar\Enums\SolarBroken;
use G4b0rDev\Icons\Solar\Enums\SolarLinear;
use G4b0rDev\Icons\Solar\Enums\SolarLineDuotone;
use G4b0rDev\Icons\Solar\Enums\SolarOutline;
use G4b0rDev\Icons\Solar\Enums\SolarStyle;
use InvalidArgumentException;

class SolarIcons extends IconSet
{
    protected string $pluginId = 'g4b0rdev-solar-icons';

    protected mixed $iconEnum = SolarOutline::class;

    protected mixed $styleEnum = SolarStyle::class;

    protected string $iconPrefix = 'solar';

    protected array $iconMap = [
        // Panels icon aliases
        PanelsIconAlias::GLOBAL_SEARCH_FIELD => SolarOutline::Magnifer,
        PanelsIconAlias::PAGES_DASHBOARD_ACTIONS_FILTER => SolarOutline::Filter,
        PanelsIconAlias::PAGES_DASHBOARD_NAVIGATION_ITEM => SolarOutline::Home,
        PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN => SolarOutline::ArrowRight,
        PanelsIconAlias::PAGES_PASSWORD_RESET_REQUEST_PASSWORD_RESET_ACTIONS_LOGIN_RTL => SolarOutline::ArrowLeft,
        PanelsIconAlias::RESOURCES_PAGES_EDIT_RECORD_NAVIGATION_ITEM => SolarOutline::Pen,
        PanelsIconAlias::RESOURCES_PAGES_MANAGE_RELATED_RECORDS_NAVIGATION_ITEM => SolarOutline::UsersGroupRounded,
        PanelsIconAlias::RESOURCES_PAGES_VIEW_RECORD_NAVIGATION_ITEM => SolarOutline::Eye,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON => SolarOutline::AltArrowLeft,
        PanelsIconAlias::SIDEBAR_COLLAPSE_BUTTON_RTL => SolarOutline::AltArrowRight,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON => SolarOutline::AltArrowRight,
        PanelsIconAlias::SIDEBAR_EXPAND_BUTTON_RTL => SolarOutline::AltArrowLeft,
        PanelsIconAlias::SIDEBAR_GROUP_COLLAPSE_BUTTON => SolarOutline::AltArrowUp,
        PanelsIconAlias::TENANT_MENU_BILLING_BUTTON => SolarOutline::Dollar,
        PanelsIconAlias::TENANT_MENU_PROFILE_BUTTON => SolarOutline::Settings,
        PanelsIconAlias::TENANT_MENU_REGISTRATION_BUTTON => SolarOutline::AddCircle,
        PanelsIconAlias::TENANT_MENU_TOGGLE_BUTTON => SolarOutline::AltArrowDown,
        PanelsIconAlias::THEME_SWITCHER_LIGHT_BUTTON => SolarOutline::Sun,
        PanelsIconAlias::THEME_SWITCHER_DARK_BUTTON => SolarOutline::Moon,
        PanelsIconAlias::THEME_SWITCHER_SYSTEM_BUTTON => SolarOutline::Laptop,
        PanelsIconAlias::TOPBAR_CLOSE_SIDEBAR_BUTTON => SolarOutline::CloseCircle,
        PanelsIconAlias::TOPBAR_OPEN_SIDEBAR_BUTTON => SolarOutline::List,
        PanelsIconAlias::TOPBAR_GROUP_TOGGLE_BUTTON => SolarOutline::AltArrowDown,
        PanelsIconAlias::TOPBAR_OPEN_DATABASE_NOTIFICATIONS_BUTTON => SolarOutline::Bell,
        PanelsIconAlias::USER_MENU_PROFILE_ITEM => SolarOutline::User,
        PanelsIconAlias::USER_MENU_LOGOUT_BUTTON => SolarOutline::Logout,
        PanelsIconAlias::WIDGETS_ACCOUNT_LOGOUT_BUTTON => SolarOutline::Logout,
        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_DOCUMENTATION_BUTTON => SolarOutline::Book,
        PanelsIconAlias::WIDGETS_FILAMENT_INFO_OPEN_GITHUB_BUTTON => SolarOutline::CodeSquare,

        // Forms icon aliases
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_CLONE => SolarOutline::Copy,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_COLLAPSE => SolarOutline::AltArrowUp,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_DELETE => SolarOutline::TrashBinTrash,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_EXPAND => SolarOutline::AltArrowDown,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_DOWN => SolarOutline::ArrowDown,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_MOVE_UP => SolarOutline::ArrowUp,
        FormsIconAlias::COMPONENTS_BUILDER_ACTIONS_REORDER => SolarOutline::SortVertical,
        FormsIconAlias::COMPONENTS_CHECKBOX_LIST_SEARCH_FIELD => SolarOutline::MinimalisticMagnifer,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_CROP => SolarOutline::Crop,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_DRAG_MOVE => SolarOutline::SortHorizontal,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_HORIZONTAL => SolarOutline::SortHorizontal,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_FLIP_VERTICAL => SolarOutline::SortVertical,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_DOWN => SolarOutline::ArrowDown,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_LEFT => SolarOutline::ArrowLeft,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_RIGHT => SolarOutline::ArrowRight,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_MOVE_UP => SolarOutline::ArrowUp,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_LEFT => SolarOutline::ArrowToDownLeft,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ROTATE_RIGHT => SolarOutline::ArrowToTopRight,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_100 => SolarOutline::SortHorizontal,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_IN => SolarOutline::MagniferZoomIn,
        FormsIconAlias::COMPONENTS_FILE_UPLOAD_EDITOR_ACTIONS_ZOOM_OUT => SolarOutline::MagniferZoomOut,
        FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_DELETE => SolarOutline::TrashBinTrash,
        FormsIconAlias::COMPONENTS_KEY_VALUE_ACTIONS_REORDER => SolarOutline::SortVertical,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_CLONE => SolarOutline::Copy,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_COLLAPSE => SolarOutline::AltArrowUp,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_DELETE => SolarOutline::TrashBinTrash,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_EXPAND => SolarOutline::AltArrowDown,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_DOWN => SolarOutline::ArrowDown,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_MOVE_UP => SolarOutline::ArrowUp,
        FormsIconAlias::COMPONENTS_REPEATER_ACTIONS_REORDER => SolarOutline::SortVertical,
        FormsIconAlias::COMPONENTS_SELECT_ACTIONS_CREATE_OPTION => SolarOutline::AddCircle,
        FormsIconAlias::COMPONENTS_SELECT_ACTIONS_EDIT_OPTION => SolarOutline::Pen,
        FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_HIDE_PASSWORD => SolarOutline::EyeClosed,
        FormsIconAlias::COMPONENTS_TEXT_INPUT_ACTIONS_SHOW_PASSWORD => SolarOutline::Eye,
        FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_FALSE => SolarOutline::CloseCircle,
        FormsIconAlias::COMPONENTS_TOGGLE_BUTTONS_BOOLEAN_TRUE => SolarOutline::CheckCircle,

        // Tables icon aliases
        TablesIconAlias::ACTIONS_COLUMN_MANAGER => SolarOutline::Widget3,
        TablesIconAlias::ACTIONS_DISABLE_REORDERING => SolarOutline::CheckCircle,
        TablesIconAlias::ACTIONS_ENABLE_REORDERING => SolarOutline::SortVertical,
        TablesIconAlias::ACTIONS_FILTER => SolarOutline::Filter,
        TablesIconAlias::ACTIONS_GROUP => SolarOutline::UsersGroupRounded,
        TablesIconAlias::ACTIONS_OPEN_BULK_ACTIONS => SolarOutline::MenuDots,
        TablesIconAlias::COLUMNS_COLLAPSE_BUTTON => SolarOutline::AltArrowDown,
        TablesIconAlias::COLUMNS_ICON_COLUMN_FALSE => SolarOutline::DangerCircle,
        TablesIconAlias::COLUMNS_ICON_COLUMN_TRUE => SolarOutline::CheckCircle,
        TablesIconAlias::EMPTY_STATE => SolarOutline::CloseCircle,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_BOOLEAN => SolarOutline::CheckCircle,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_DATE => SolarOutline::Calendar,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_NUMBER => SolarOutline::Calculator,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_RELATIONSHIP => SolarOutline::SortHorizontal,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_SELECT => SolarOutline::SortVertical,
        TablesIconAlias::FILTERS_QUERY_BUILDER_CONSTRAINTS_TEXT => SolarOutline::Translation,
        TablesIconAlias::FILTERS_REMOVE_ALL_BUTTON => SolarOutline::CloseCircle,
        TablesIconAlias::GROUPING_COLLAPSE_BUTTON => SolarOutline::AltArrowUp,
        TablesIconAlias::HEADER_CELL_SORT_ASC_BUTTON => SolarOutline::AltArrowUp,
        TablesIconAlias::HEADER_CELL_SORT_BUTTON => SolarOutline::AltArrowDown,
        TablesIconAlias::HEADER_CELL_SORT_DESC_BUTTON => SolarOutline::AltArrowDown,
        TablesIconAlias::REORDER_HANDLE => SolarOutline::MenuDots,
        TablesIconAlias::SEARCH_FIELD => SolarOutline::MinimalisticMagnifer,

        // Notifications icon aliases
        NotificationsIconAlias::DATABASE_MODAL_EMPTY_STATE => SolarOutline::CloseCircle,
        NotificationsIconAlias::NOTIFICATION_CLOSE_BUTTON => SolarOutline::CloseCircle,
        NotificationsIconAlias::NOTIFICATION_DANGER => SolarOutline::DangerCircle,
        NotificationsIconAlias::NOTIFICATION_INFO => SolarOutline::InfoCircle,
        NotificationsIconAlias::NOTIFICATION_SUCCESS => SolarOutline::CheckCircle,
        NotificationsIconAlias::NOTIFICATION_WARNING => SolarOutline::DangerTriangle,

        // Actions icon aliases
        ActionsIconAlias::ACTION_GROUP => SolarOutline::MenuDots,
        ActionsIconAlias::CREATE_ACTION_GROUPED => SolarOutline::AddCircle,
        ActionsIconAlias::DELETE_ACTION => SolarOutline::TrashBinTrash,
        ActionsIconAlias::DELETE_ACTION_GROUPED => SolarOutline::TrashBinTrash,
        ActionsIconAlias::DELETE_ACTION_MODAL => SolarOutline::TrashBinTrash,
        ActionsIconAlias::DETACH_ACTION => SolarOutline::LinkBroken,
        ActionsIconAlias::DETACH_ACTION_MODAL => SolarOutline::LinkBroken,
        ActionsIconAlias::DISSOCIATE_ACTION => SolarOutline::LinkBroken,
        ActionsIconAlias::DISSOCIATE_ACTION_MODAL => SolarOutline::LinkBroken,
        ActionsIconAlias::EDIT_ACTION => SolarOutline::Pen,
        ActionsIconAlias::EDIT_ACTION_GROUPED => SolarOutline::Pen,
        ActionsIconAlias::EXPORT_ACTION_GROUPED => SolarOutline::Download,
        ActionsIconAlias::FORCE_DELETE_ACTION => SolarOutline::TrashBinTrash,
        ActionsIconAlias::FORCE_DELETE_ACTION_GROUPED => SolarOutline::TrashBinTrash,
        ActionsIconAlias::FORCE_DELETE_ACTION_MODAL => SolarOutline::TrashBinTrash,
        ActionsIconAlias::IMPORT_ACTION_GROUPED => SolarOutline::Upload,
        ActionsIconAlias::MODAL_CONFIRMATION => SolarOutline::DangerTriangle,
        ActionsIconAlias::REPLICATE_ACTION => SolarOutline::Copy,
        ActionsIconAlias::REPLICATE_ACTION_GROUPED => SolarOutline::Copy,
        ActionsIconAlias::RESTORE_ACTION => SolarOutline::ArrowToTopLeft,
        ActionsIconAlias::RESTORE_ACTION_GROUPED => SolarOutline::ArrowToTopLeft,
        ActionsIconAlias::RESTORE_ACTION_MODAL => SolarOutline::ArrowToTopLeft,
        ActionsIconAlias::VIEW_ACTION => SolarOutline::Eye,
        ActionsIconAlias::VIEW_ACTION_GROUPED => SolarOutline::Eye,

        // Infolists icon aliases
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_FALSE => SolarOutline::DangerCircle,
        InfolistsIconAlias::COMPONENTS_ICON_ENTRY_TRUE => SolarOutline::CheckCircle,

        // Support icon aliases
        SupportIconAlias::BADGE_DELETE_BUTTON => SolarOutline::CloseCircle,
        SupportIconAlias::BREADCRUMBS_SEPARATOR => SolarOutline::AltArrowRight,
        SupportIconAlias::BREADCRUMBS_SEPARATOR_RTL => SolarOutline::AltArrowLeft,
        SupportIconAlias::MODAL_CLOSE_BUTTON => SolarOutline::CloseCircle,
        SupportIconAlias::PAGINATION_FIRST_BUTTON => SolarOutline::AltArrowLeft,
        SupportIconAlias::PAGINATION_FIRST_BUTTON_RTL => SolarOutline::AltArrowRight,
        SupportIconAlias::PAGINATION_LAST_BUTTON => SolarOutline::AltArrowRight,
        SupportIconAlias::PAGINATION_LAST_BUTTON_RTL => SolarOutline::AltArrowLeft,
        SupportIconAlias::PAGINATION_NEXT_BUTTON => SolarOutline::AltArrowRight,
        SupportIconAlias::PAGINATION_NEXT_BUTTON_RTL => SolarOutline::AltArrowLeft,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON => SolarOutline::AltArrowLeft,
        SupportIconAlias::PAGINATION_PREVIOUS_BUTTON_RTL => SolarOutline::AltArrowRight,
        SupportIconAlias::SECTION_COLLAPSE_BUTTON => SolarOutline::AltArrowDown,
    ];

    /**
     * Override style method to transform icon map to the target style enum
     */
    public function style(string $style): static
    {
        if (! $this->styleEnum) {
            throw new InvalidArgumentException('No style enum configured for this icon set.');
        }

        if (! $this->hasStyle($style)) {
            $availableStyleNames = $this->getAvailableStyleNames();
            throw new InvalidArgumentException("Style '{$style}' is not available for this icon set. Available styles: " . implode(', ', $availableStyleNames));
        }

        $styleEnum = $this->styleEnum::fromStyleName($style);
        $targetEnumClass = $this->getEnumClassForStyle($styleEnum);

        if (! $targetEnumClass) {
            return $this;
        }

        $transformedIconMap = [];
        foreach ($this->iconMap as $alias => $iconCase) {
            $iconName = $iconCase->name;

            if (enum_exists($targetEnumClass)) {
                foreach ($targetEnumClass::cases() as $case) {
                    if ($case->name === $iconName) {
                        $transformedIconMap[$alias] = $case;
                        break;
                    }
                }
            }

            if (! isset($transformedIconMap[$alias])) {
                $transformedIconMap[$alias] = $iconCase;
            }
        }

        $this->iconMap = $transformedIconMap;
        $this->iconEnum = $targetEnumClass;

        return $this;
    }

    /**
     * Map style enums to their corresponding enum classes
     */
    protected function getEnumClassForStyle(mixed $style): ?string
    {
        return match ($style->value) {
            'bold' => SolarBold::class,
            'broken' => SolarBroken::class,
            'duotone' => SolarBoldDuotone::class,
            'linear' => SolarLinear::class,
            'outline' => SolarOutline::class,
            'bold-duotone' => SolarBoldDuotone::class,
            'line-duotone' => SolarLineDuotone::class,
            default => null,
        };
    }
}
