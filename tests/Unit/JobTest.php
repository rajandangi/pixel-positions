<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class JobTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     */
    public function test_belongs_to_an_employer(): void
    {
        // AAA
        // 1. Arrange
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        // 2. Act & 3. Assert
        $this->assertTrue($job->employer->is($employer));
    }

    public function test_can_have_tags(): void
    {
        // 1. Arrange
        $job = Job::factory()->create();
        $job->tag('Frontend');

        // 2. Act & 3. Assert
        $this->assertCount(1, $job->tags);
    }
}
