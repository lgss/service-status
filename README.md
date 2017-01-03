## LGSS IT Service Status

This site runs on WordPress but uses Composer to bring in WordPress and an plugins as packages, so's not to make the repo untidy.

Uploads are included for now

### Getting started

1. Clone this repo using `git clone <repo-url>`
1. cd to the repo directory and run `composer install` (this will download WordPress and any required plugins)
1. Create a `.env` file using `.env.example` as a template and fill in the blanks
1. Get a copy of the database and connect it up
1. Point your local web server at the web/ path as the webroot
1. Visit your chosen local url in the browser
1. Done.

### Development

TODO