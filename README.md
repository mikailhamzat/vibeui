# VibeUI

VibeUI is a clean, responsive Laravel/Livewire UI component library that uses TailwindCSS. It provides a set of reusable components for building user interfaces.

## Installation

To install **VibeUI**, run:

```bash
composer require mikail/vibeui
```

## Usage

To use the components, you can simply include them in your Blade templates. For example:

```blade
<vibe-button variant="primary" size="md">Click me</vibe-button>
```

## Customization

You can publish the configuration and views for customization. Run:

```bash
php artisan vendor:publish --provider="VibeUI\\VibeUIServiceProvider" --tag="vibeui-views"
php artisan vendor:publish --provider="VibeUI\\VibeUIServiceProvider" --tag="vibeui-config"
```
