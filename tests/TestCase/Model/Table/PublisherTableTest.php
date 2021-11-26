<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PublisherTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PublisherTable Test Case
 */
class PublisherTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PublisherTable
     */
    public $Publisher;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.publisher'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Publisher') ? [] : ['className' => PublisherTable::class];
        $this->Publisher = TableRegistry::get('Publisher', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Publisher);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
