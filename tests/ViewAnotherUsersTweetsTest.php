<?php

/**
 * Created by PhpStorm.
 * User: francesc
 * Date: 15/02/16
 * Time: 19:34
 */

use App\Tweet;
use App\User;
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
    use DatabaseMigrations;

    public function testBasicExample()
    {
        $user = factory(User::class)->create(['username'=>'john']);
        $tweet = factory(Tweet::class)->make(['body'=>'My first tweet']);

        $user->tweets()->save($tweet);

        $this->visit('/john')
            ->see('My first tweet');
    }
}
