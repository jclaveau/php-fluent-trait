# PHP Fluent Traits
These traits gather some commons methods of classes implementing fluent syntax.

## Quality
[![Build Status](https://travis-ci.org/jclaveau/php-fluent-trait.png?branch=master)](https://travis-ci.org/jclaveau/php-fluent-trait)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/jclaveau/php-fluent-trait/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/jclaveau/php-fluent-trait/?branch=master)

## Installation
php-fluent-traits is installable via [Composer](http://getcomposer.org)

    composer require jclaveau/php-fluent-traits


## Usage
```php
class FluentObject
{
    use JClaveau\Traits\Fluent\New_;
    use JClaveau\Traits\Fluent\Clone_;
}

$instance = FluentObject::new_()->clone_();
```
