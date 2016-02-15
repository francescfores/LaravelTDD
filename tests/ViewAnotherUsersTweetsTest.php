<?php

/**
 * Created by PhpStorm.
 * User: francesc
 * Date: 15/02/16
 * Time: 19:34
 */

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewAnotherUsersTweetsTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = factory(User::class)->create([]);
        $tweet = factory(Tweet::class)->make([]);

        $user->tweets()->save($tweet);
        
        $this->visit('/')
            ->see('Laravel 5');
    }
}
