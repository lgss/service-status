# LGSS Digital blog

This is the theme in use for the blogs hosted at blog.gov.uk, tweaked by LGSS for use by the LGSS Digital Service.


## Installation

Clone the theme:

    % cd wp-content/themes
    % git clone https://github.com/lgss/lgss-digital-theme.git

This will give you a functioning theme, but if you want to hack on it there are assets that need compiling. See the [Development](#development) section.


## Development

Requirements:

* node and npm
* grunt-cli and bower (npm install -g grunt-cli bower)
* [composer](https://getcomposer.org/)
* Run this in the theme: npm install

If it's in build, don't touch it because it'll get overwritten.

JS and LESS files live in assets/js and assets/css. To compile them when they change run this:

    % grunt watch

Images can be optimised like so:

    % grunt img

This theme is based on [govuk_template](https://github.com/alphagov/govuk_template) which is what many gov.uk sites use. We used mustache because that's the only format it generates for which a PHP implementation exists. The mustache template is included from base.php where all the variables are defined. And to grab the latest version of govuk_template run this:

    % grunt govuk_template

To update the composer modules:

    % composer update
    % phar-install


## This theme uses

* http://www.rootstheme.com/
* http://twitter.github.io/bootstrap/
* http://lesscss.org/
* http://gruntjs.com/
* https://github.com/alphagov/govuk_template
* https://github.com/bobthecow/mustache.php
* https://github.com/dxw/php-missing


## Help and bug reports

If you get stuck with something we might be able to help (but can't guarantee it). We're always happy to receive bug reports (or, even better, pull requests).

If you'd like to get in touch about anything to do with this theme, please use the issue tracker on GitHub: https://github.com/dxw/govuk-blogs/issues


## Licence

GPLv2 or later (see LICENSE.txt)
