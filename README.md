# Cache Plugin for Phile-Admin #

## What ##

A cache management plugin for [Phile-Admin]:

- show if cache service is active
- clear global cache service and complete file cache

## Installation

### 1 Installation (composer) ###

```json
"require": {
	"siezi/phile-admin-cache": "*"
}
```

<!--

### 1.2 Installation (Download)

* Install [Phile](https://github.com/PhileCMS/Phile)
* Clone this repo into `plugins/siezi/phileMarkdownEditor`

-->

### 2. Activation

2. Activation

After you have installed the plugin you activate it by adding the following line to your `config.php` file:

```php
$config['plugins']['siezi\\phileAdminCache'] = ['active' => true];
```

This plugin depends on [Phile-Admin]. Make sure it’s activated too.


### 3. Config ###

See `config.php`.

[Phile-Admin]: https://github.com/Schlaefer/phileAdmin