# Cache Plugin for Phile-Admin #

## What ##

A cache plugin for [Phile-Admin](https://github.com/Schlaefer/phileAdmin).

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

After you have installed the plugin. You need to add the following line to your `config.php` file:

```php
$config['plugins']['siezi\\phileAdminCache'] = ['active' => true];
```

### 3. Config ###

See `config.php`.