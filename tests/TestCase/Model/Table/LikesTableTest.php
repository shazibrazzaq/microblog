<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LikesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LikesTable Test Case
 */
class LikesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LikesTable
     */
    public $Likes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.likes',
        'app.users',
        'app.posts',
        //'app.author',
        'app.posts_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Likes') ? [] : ['className' => LikesTable::class];
        $this->Likes = TableRegistry::get('Likes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Likes);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
