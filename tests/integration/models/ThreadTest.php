<?php
use App\ThreadComment;
use Tests\TestCase;
use App\Thread;
use Illuminate\Foundation\Testing\DatabaseTransactions;
/**
 * Created by PhpStorm.
 * User: jed
 * Date: 29/10/2018
 * Time: 1:47 AM
 */
class ThreadTest extends TestCase
{
use DatabaseTransactions;

//public function test_has_comments(){
////    dd("It is in the thread test");
////    factory(Thread::class, 10)->create();
////    factory(ThreadComment::class, 10)->create();
//
//    $thread = Thread::find(1);
////    dd($thread->threadComments);
//    $this->assertEquals(1, $thread->threadComment);
//}
    public function test_requires_a_title(){
        $this->withExceptionHandling();
    $this->post('/thread', [
        'title' => '',
        'body' => 'Thsi is the body for testing'
    ])->assertSessionHasErrors('title');
    }

    public function test_requires_a_body(){
        $this->withExceptionHandling();
        $this->post('/thread', [
            'title' => 'It has a title',
            'body' => ''
        ])->assertSessionHasErrors('body');
    }
}