## LGSS IT Service Status

This site runs on WordPress but uses Composer to bring in WordPress and an plugins as packages, so's not to make the repo untidy.

Uploads are included for now but these will be removed in the future and moved elsewhere.

### Requirements

To get the site running you will need

* PHP >= 5.5
* [composer](https://getcomposer.org/)
* MySQL
* Apache 2.4 (or similar another webserver)

There are additional requirements for [Theme Development](web/app/themes/lgss-digital-theme/README.md)

### Getting started

1. Clone this repo using `git clone <repo-url>`
1. cd to the repo directory and run `composer install` (this will download WordPress and any required plugins)
1. Create a `.env` file using `.env.example` as a template and fill in the blanks
1. Get a copy of the database and connect it up
1. Point your local web server to the 'web' folder, use that as the website root
1. Visit your chosen local url in the browser
1. Done

If your local copy attempts to redirect to another address, check that the wp_options table in the database and your .env file contain the correct settings for URL and WordPress URL

### Theme Development

For theme development see the theme [README](web/app/themes/lgss-digital-theme/README.md) file.

## Help and bug reports

If you get stuck with something we might be able to help (but can't guarantee it). We're always happy to receive bug reports (or, even better, pull requests).

If you'd like to get in touch about anything to do with this theme, please use the issue tracker on GitHub: https://github.com/lgss/service-status/issues