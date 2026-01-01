# Laravel Blade with Sanctum Kit (BSK)

<a name="top" id="top" ></a>

A Laravel Blade Template with Sanctum Authentication built in.

*Based on the Blade & Breeze Starter Kit provided with Laravel versions before Laravel 12.*

Primarily used for teaching purposes at [North Metropolitan TAFE](https://northmetrotafe.wa.edu.au).

### Built With

[![PHP][Php.com]][Php-url]
[![Laravel][Laravel.com]][Laravel-url]
[![Tailwindcss][Tailwindcss.com]][Tailwindcss-url]
[![Sanctum][Sanctum.com]][Sanctum-url]

### Editor of choice

[![PhpStorm][PhpStorm.com]][PhpStorm-url]
[![JetBrains][JetBrains.com]][JetBrains-url]

## Repo Stats

[![Forks][-Forks-Shield]][-Forks-URL]
[![Issues][-Issues-Shield]][-Issues-URL]
[![Educational Community Licence][-Licence-Shield]][-Licence-URL]


<p align="right">(<a href="#top">back to top</a>)</p>

## Description

A starter kit for Laravel based on Laravel's Blade templating engine, TailwindCSS v4, HyperUI components and FontAwesome
Free icons.

It contains three sections:

- **Web**: 
  - Static Layout, Controller and Pages
- **Client**: 
  - Authenticated User Layout and Pages
- **Admin**: 
  - Administration Layout, Controller and Pages

The project is developed as a re-write of the "Retro Blade Kit" and "Base Blade Kit" also by Adrian Gould.

It provides a base template for the creation of a "SaaS" style application, omitting sections that may tie to a specific
vendor such as a payment system.

Below are sample pages from the kit.

### General Welcome/Home Page

![Product Screenshot Welcome Page][-Product-ScreenShot-1]

### Authenticated User Dashboard

![Product Screenshot Authenticated User Dashboard][-Product-ScreenShot-2]

### Admin Dashboard

![Product Screenshot Admin Dashboard][-Product-ScreenShot-3]

### About Page

![Product Screenshot About Page][-Product-ScreenShot-4]


<p align="right">(<a href="#top">back to top</a>)</p>

## Table of Contents

- [Description](#description)
- [Installation](#installation)
- [Credits](#credits)
- [Licence](#licence)
- [Badges](#badges)
- [Tests](#tests)
- [Contact](#contact)

## Installation

### Via Laravel Herd

One-click install a new application using this starter kit through [Laravel Herd](https://herd.laravel.com):

<a href="https://herd.laravel.com/new?starter-kit=adygcode/blade-sanmctum-kit"><img src="https://img.shields.io/badge/Install%20with%20Herd-fff?logo=laravel&logoColor=f53003" alt="Install with Herd"></a>

### Via the Laravel Installer

Create a new Laravel application using this starter kit through the
official [Laravel Installer](https://laravel.com/docs/12.x/installation#installing-php):

```bash
  laravel new my-app --using=adygcode/blade-sanctum-kit
```

Replace `my-app` with the name of your project, using kebab-case.


<p align="right">(<a href="#top">back to top</a>)</p>

## Credits

This template is built using:

- Font Awesome. (n.d.). Fontawesome.com. https://fontawesome.com
- Laravel - The PHP Framework For Web Artisans. (2011). Laravel.com. https://laravel.com
- Laravel Bootcamp - Learn the PHP Framework for Web Artisans. (n.d.).
  Bootcamp.laravel.com. https://bootcamp.laravel.com/
- PHP: Hypertext Preprocessor. (n.d.). Www.php.net. https://php.net
- Professional README Guide. (n.d.). Coding-Boot-Camp.github.io. Retrieved April 15, 2024,
  from https://coding-boot-camp.github.io/full-stack/github/professional-guide
- TailwindCSS. (2023). Tailwind CSS - Rapidly build modern websites without ever leaving your HTML.
  Tailwindcss.com. https://tailwindcss.com/
- Free Open Source Tailwind CSS v4 Components | HyperUI. (2025). HyperUI. https://www.hyperui.dev/
- Shields.io. (2025). Shields.io. https://shields.io/
- Simple Icons. (2025). Simpleicons.org. https://simpleicons.org/?q=simple
- Roave/SecurityAdvisories: Security advisories as a simple composer exclusion list, updated daily. (2025). GitHub. https://github.com/Roave/SecurityAdvisories

<p align="right">(<a href="#top">back to top</a>)</p>

### Installation commands

```shell
composer require --dev roave/security-advisories:dev-latest
composer require laravel/breeze 
```

## Tests

TBD


<p align="right">(<a href="#top">back to top</a>)</p>

## Extending Kit

If you wish to add packages for further functionality, then follow the usual documentation from each of their sites.

| Dev | Prod | Item                                                               | Purpose                                        |
|-----|------|--------------------------------------------------------------------|------------------------------------------------|
| ✔   | ✔    | [![Livewire][Livewire.com]][Livewire-url]                          | Laravel based dynamic pages with minimal JS    |
| ✔   | ✔    | [![Spatie Permission][SpatiePermission.com]][SpatiePermission-url] | Roles and Permissions                          |
| ✔   | ✔    | [![Telescope][Telescope.com]][Telescope-url]                       | Application performance tracking and debugging |
| ✔   |      | [![DebugBar][DebugBar.com]][DebugBar-url]                          | In browser debug bar                           |
| ✔   |      | [![Laradumps][Laradumps.com]][Laradumps-url]                       | Debugging without dump and die                 |
| ✔   |      | [![Larastan][Larastan.com]][Larastan-url]                          | Static analysis of code                        |
| ✔   |      | [![Pint][Pint.com]][Pint-url]                                      | Opinionated code formatting                    |

### Quick Package Installs

#### Static Analysis for Laravel

Use during development

```shell
composer require larastan/larastan --dev
```

#### Pint Opinionated Code Formatting and Linter

Use during development

```shell
composer require laravel/pint --dev
```

#### Laradumps

Use during development only.

```shell
composer require laradumps/laradumps --dev
```

#### Debug Bar

Use during development only.

```shell
composer require barryvdh/laravel-debugbar --dev
```

#### Telescope

To use during development only:

```shell
composer require laravel/telescope --dev
```

If you wish to use this for development and production, remove the `--dev`:

```shell
composer require laravel/telescope
```

#### Livewire 4.0 BETA

```shell
composer require laravel/livewire
```

#### Spatie Permission

```shell
composer require spatie/laravel-permission
```

## Contact

Adrian Gould: Lecturer (ASL1), [North Metropolitan TAFE](https://northmetrotafe.wa.edu.au), Perth WA, Australia.

- GitHub Pages: [https://adygcode.github.io](https://adygcode.github.io)
- GitHub Repos: [https://github.com/AdyGCode](https://github.com/AdyGCode)
- Starter Kit Repo: [Blade Sanctum Starter Kit](https://github.com/AdyGCode/blade-sanctum-kit)

<p align="right">(<a href="#top">back to top</a>)</p>

## Licence

The Laravel "Blade with Sanctum" Starter Kit is open-sourced software licensed under the MIT license.


<p align="right">(<a href="#top">back to top</a>)</p>



---

<!-- General Items, Screenshots, et al -->
<!-- Screenshots stored in storage/app/public/kit-docs -->

[-Forks-Shield]: http://img.shields.io/github/forks/adygcode/base-blade-kit.svg?style=for-the-badge
[-Forks-URL]: https://github.com/AdyGCode/base-blade-kit/network/members
[-Issues-Shield]: http://img.shields.io/github/issues/adygcode/base-blade-kit.svg?style=for-the-badge
[-Issues-URL]: https://github.com/adygcode/base-blade-kit/issues
[-Licence-Shield]: https://img.shields.io/github/license/adygcode/base-blade-kit.svg?style=for-the-badge
[-Licence-URL]: https://github.com/adygcode/base-blade-kit/blob/main/License.md
[-Product-Screenshot-1]: storage/app/public/kit-docs/screenshot-welcome.png
[-Product-Screenshot-2]: storage/app/public/kit-docs/screenshot-authenticated.png
[-Product-Screenshot-3]: storage/app/public/kit-docs/screenshot-admin.png
[-Product-Screenshot-4]: storage/app/public/kit-docs/screenshot-about.png

<!-- Product, Package, Framework, et al -->

[DebugBar-url]: https://laraveldebugbar.com
[DebugBar.com]: https://img.shields.io/badge/Laravel_Debugbar-eb4432?logoColor=white
[Inertia-url]: https://inertiajs.com
[Inertia.com]: https://img.shields.io/badge/Inertia-9553E9?&logo=inertia&logoColor=white
[JetBrains-url]: https://jetbrains.com
[JetBrains.com]: https://img.shields.io/badge/JetBrains-000000?style=for-the-badge&logo=jetbrains&logoColor=white
[Laradumps-url]: https://laradumps.dev
[Laradumps.com]: https://img.shields.io/badge/Laradumps-fbc120?logoColor=black
[Larastan-url]:https://github.com/larastan/larastan
[Larastan.com]: https://img.shields.io/badge/Larastan-3191d0?logoColor=white
[Laravel-url]: https://laravel.com
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Livewire-url]: https://livewire.laravel.com
[Livewire.com]: https://img.shields.io/badge/Livewire-4E56A6?logo=livewire&logoColor=white
[Php-url]: https://inertiajs.com
[Php.com]: https://img.shields.io/badge/Php-777BB4?style=for-the-badge&logo=php&logoColor=white
[PhpStorm-url]: https://www.jetbrains.com/phpstorm/
[PhpStorm.com]: https://img.shields.io/badge/phpstorm-000000?style=for-the-badge&logo=phpstorm&logoColor=white
[Pint-url]: https://laravel.com/docs/pint
[Pint.com]: https://img.shields.io/badge/Pint-f49931?logo=laravel&logoColor=black
[Sanctum-url]: https://laravel.com
[Sanctum.com]: https://img.shields.io/badge/Sanctum-4b92d6?style=for-the-badge&logo=laravel&logoColor=white
[SimpleIcons-url]: https://simpleicons.org
[SimpleIcons.com]: https://img.shields.io/badge/SimpleIcons-111111?logo=simpleicons&logoColor=white
[SpatiePermission-url]: https://spatie.be/docs/laravel-permission/v6/introduction
[SpatiePermission.com]: https://img.shields.io/badge/Spatie_Permission-197593?logoColor=white
[Tailwindcss-url]: https://tailwindcss.com
[Tailwindcss.com]: https://img.shields.io/badge/Tailwindcss-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white
[Telescope-url]: https://telescope.laravel.com
[Telescope.com]: https://img.shields.io/badge/Telescope-7760cb?logo=laravel&logoColor=white
