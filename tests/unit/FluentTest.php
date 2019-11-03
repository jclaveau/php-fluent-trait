<?php
namespace JClaveau\Traits\Fluent;

/**
 */
class TestObject
{
    use New_;
    use Clone_;
}

/**
 */
class ImmutableTest extends \AbstractTest
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

    /**/
}
