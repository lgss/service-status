# LGSS Digital blog

This is the theme in use for the blogs hosted at blog.gov.uk, tweaked by LGSS for use by the LGSS Digital Service.

## Theme Development

Requirements:

* node and npm
* grunt-cli and bower (npm install -g grunt-cli bower)
* [composer](https://getcomposer.org/)
* Run this in the theme: npm install

If it's in the build directory, don't touch it because it'll get overwritten.

JS and LESS files live in assets/js and assets/css. To compile them when they change run this:

    % grunt watch

Images can be optimised like so:

    % grunt img

This theme was based on [govuk_template](https://github.com/alphagov/govuk_template) which is what many gov.uk sites use. We used mustache because that's the only format it generates for which a PHP implementation exists. The mustache template is included from base.php where all the variables are defined.

## Adding plugins

Plugins are included using composer, this helps us bring in the latest versions and manage updates through version control. Most plugins are available through [WPackagist](https://wpackagist.org/)

* To update existing plugins run `composer update`
* To add a new plugin to the site, edit the composer.json file and run `composer update`

If a plugin isn't available through [WPackagist](https://wpackagist.org/) you should include it directly in the /web/app/plugins/ directory and commit it to version control.

## This theme uses

* http://www.rootstheme.com/
* http://twitter.github.io/bootstrap/
* http://lesscss.org/
* http://gruntjs.com/
* https://github.com/alphagov/govuk_template
* https://github.com/bobthecow/mustache.php
* https://github.com/dxw/php-missing
