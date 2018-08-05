## PR Design Site Generator

An package designed to help build web sites quickly with Laravel. 

## Installation

Run the Composer require command from the terminal:

    composer require prdesign/sitegen

Additionally you will have to run the package installer which will setup config files and publish assets.

    php artisan sitegen:install

If you are using Laravel 5.5, this is all there is to do.

Should you still be on version 5.4 of Laravel, the final steps for you are to add the service provider of the package and alias the package. To do this open your `config/app.php` file.

Add a new line to the `providers` array:

	PRDesign\SiteGen\SiteGenServiceProvider::class

And optionally add a new line to the `aliases` array:

	'SiteGen' => PRDesign\SiteGen\Facades\SiteGenFacade::class,

Now you're ready to start using the Site Generator in your application.

