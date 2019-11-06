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
    use Dump;

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

    /**
     */
    public function test_dump_var_dump()
    {
        $instance = TestObject::new_()->setName('instance');
        
        ob_start();
        var_dump($instance);
        $var_dump = ob_get_contents();
        $var_dump = explode("\n", $var_dump);
        $var_dump[0] = '';
        
        ob_clean();
        
        $instance->dump();
        $dump = ob_get_contents();
        $dump = explode("\n", $dump);
        $dump[0] = '';
        
        ob_end_clean();
        
        $this->assertEquals($var_dump, $dump);
    }

    /**
     */
    public function test_dump_print_r()
    {
        $instance = TestObject::new_()->setName('instance');
        
        ob_start();
        print_r($instance);
        $var_dump = ob_get_contents();
        $var_dump = explode("\n", $var_dump);
        
        ob_clean();
        
        $instance->dump(false, ['mode' => 'print']);
        $dump = ob_get_contents();
        $dump = explode("\n", $dump);
        
        ob_end_clean();
        
        $this->assertEquals($var_dump, $dump);
    }

    /**
     */
    public function test_dump_var_export()
    {
        $instance = TestObject::new_()->setName('instance');
        
        ob_start();
        var_export($instance);
        $var_dump = ob_get_contents();
        $var_dump = explode("\n", $var_dump);
        
        ob_clean();
        
        $instance->dump(false, ['mode' => 'export']);
        $dump = ob_get_contents();
        $dump = explode("\n", $dump);
        
        ob_end_clean();
        
        $this->assertEquals($var_dump, $dump);
    }

    /**
     */
    public function test_dump_wrong_mode()
    {
        $instance = TestObject::new_()->setName('instance');
        
        try {
            $instance->dump(false, ['mode' => 'foo']);
            $this->assertFalse(true, "an exception has not been thrown");
        }
        catch (\InvalidArgumentException $e) {
            $this->assertEquals(
                "\$options['mode'] must be one of ['dump', 'print', 'export'] instead of 'foo'",
                $e->getMessage()
            );
            $this->assertTrue(true, "exception thrown correctly");
        }
    }

    /**/
}
