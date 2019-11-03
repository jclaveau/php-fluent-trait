# PHP Fluent Trait
This trait gathers some commons methods of classes implementing fluent syntax.

## Quality
[![Build Status](https://travis-ci.org/jclaveau/php-fluent-trait.png?branch=master)](https://travis-ci.org/jclaveau/php-fluent-trait)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/jclaveau/php-fluent-trait/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/jclaveau/php-fluent-trait/?branch=master)

## Installation
php-fluent-trait is installable via [Composer](http://getcomposer.org)

    composer require jclaveau/php-fluent-trait


## Usage
```php
class FluentObject
{
    use JClaveau\Traits\Fluent\New_;
    use JClaveau\Traits\Fluent\Clone_;
}

// PHP 5.6
$instance = FluentObject::new_()->clone_();
```

## TODO
+ PHP 7
