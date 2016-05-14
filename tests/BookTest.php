<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BookTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateBook()
    {
        $response = $this->action('POST', 'BookController@create',
            ['isbn' => '978-3-16-148410-46',
             'author' => 'Test',
             'title' => 'Test tt',
             'published_at' => '2016-05-01']);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetBook()
    {
        $response = $this->call('GET', 'search/isbn/978-3-16-148410-47');
    }
}
