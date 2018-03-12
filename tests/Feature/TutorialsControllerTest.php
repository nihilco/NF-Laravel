<?php

namespace Tests\Feature;

use Tests\TestCase;

class TutorialsControllerTest extends TestCase
{
    public $tutorial;

    public function setUp()
    {
        parent::setUp();

        $this->tutorial = factory(\App\Models\Tutorial::class)->create();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_user_can_view_all_tutorials()
    {	
        $response = $this->get('/tutorials');

        $response->assertSee($this->tutorial->title);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_user_can_view_a_tutorial()
    {
        $response = $this->get($this->tutorial->path());

        $response->assertSee($this->tutorial->title);
    }

    //public function test_a_user_can_view_steps_associated_with_a_tutorial()
    //{
    //    $step = factory(\App\Models\Step::class)->create([
    //	    'tutorial_id' => $this->tutorial->id,
    //	]);
    //
    //    $response = $this->get($this->step->path());
    //
    //	$response->assertSee($step->content);
    //}
}
