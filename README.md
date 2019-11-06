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
    use JClaveau\Traits\Fluent\DefineAs;
    use JClaveau\Traits\Fluent\DefineCloneAs;
    use JClaveau\Traits\Fluent\Dump;
    
    protected $name;
    
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}

$instance = FluentObject::new_()
    ->setName('Foo')
    ->dump()                // FluentObject #1 Foo
    ->defineAs($fooObject1)
    ->clone_()
    ->dump()                // FluentObject #2 Foo
    ->defineCloneAs($barObject2)
    ->setName('Bar')
    ->dump()                // FluentObject #2 Bar
    ;
    
$fooObject1->dump(); // FluentObject #1 Foo
$barObject2->dump(); // FluentObject #3 Foo
$instance->dump();   // FluentObject #2 Bar
```
