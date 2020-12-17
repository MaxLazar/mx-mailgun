# MX Mailgun
Mailgun mailer adapter for ExpressionEngine.

## Installation
* Download the latest version of MX Mailgun and extract the .zip to your desktop.
* Copy *inline* to */system/user/addons/*

## Compatibility	

* ExpressionEngine 4
* ExpressionEngine 5
* ExpressionEngine 6


## Configuration

**apikey** 

[Mailgun API Key](https://help.mailgun.com/hc/en-us/articles/203380100-Where-Can-I-Find-My-API-Key-and-SMTP-Credentials-)

## Configuration Overrides

**Main configuration file**

The main configuration file, found at system/user/config/config.php, is loaded every time the system is run, meaning that config overrides set in config.php always affect the system’s configuration.

	$config['mx_mailgun'] = [
	        'enable'   => true,
	        'mailgun_api_key'  => '',
	        'mailgun_domain'  => '',
	        'mailgun_region'  => ''   // US or EU
	];


## Support Policy
This is Communite Edition add-on.

## Contributing To MX Mailgun for ExpressionEngine

Your participation to MX Mailgun development is very welcome!

You may participate in the following ways:

* [Report issues](https://github.com/MaxLazar/mx-mailgun/issues)
* Fix issues, develop features, write/polish documentation
Before you start, please adopt an existing issue (labelled with "ready for adoption") or start a new one to avoid duplicated efforts.
Please submit a merge request after you finish development.

# Thanks to

* [A PHP email parser](https://mail-mime-parser.org/)

### License

The MX Mailgun is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
