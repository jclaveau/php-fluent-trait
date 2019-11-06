<?php
namespace JClaveau\Traits\Fluent;

/**
 */
class TestObject
{
    use New_;
    use Clone_;
    use DefineAs;
    use DefineCloneAs;

    protected $name;
    
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function appendName($suffix)
    {
        $this->name .= $suffix;
        return $this;
    }
    
    public function dump()
    {
        var_dump($this);
        return $this;
    }
    
    public function copy($suffix = ' copied')
    {
        $clone = $this->clone_()->appendName($suffix);
        return $clone;
    }
}

/**
 */
class FluentTest extends \AbstractTest
{
    /**
     */
    public function test_new_()
    {
        $instance = TestObject::new_();
        $this->assertTrue( $instance instanceof TestObject );
    }

    /**
     */
    public function test_clone_()
    {
        $instance = new TestObject();
        $instance2 = $instance->clone_();
        $this->assertTrue( $instance2 instanceof TestObject );
        $this->assertFalse( $instance2 === $instance );
    }

    /**
     */
    public function test_defineAs()
    {
        $instance = TestObject::new_();
        $instance->defineAs($instance_alias);
        $this->assertSame($instance, $instance_alias);
    }

    /**
     */
    public function test_defineCloneAs()
    {
        $instance = TestObject::new_()->setName('instance1');
        $this->assertEquals($instance->getName(), 'instance1');
        $instance->defineCloneAs($instance1_saved)->setName('instance1_renamed');
        
        $this->assertTrue($instance1_saved->getName() === 'instance1');
        $this->assertTrue($instance->getName() === 'instance1_renamed');
    }

    /**/
}
