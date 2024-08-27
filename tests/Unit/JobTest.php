<?php

use App\Models\Employer;
use App\Models\Job;

it('belong to a employer', function () {
    //ARRANGE
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id'=>$employer->id
    ]);
    //ACT  AND ASSERT
    expect($job->employer->is($employer))->toBeTrue();
    //expect(true)->toBeTrue();
});

it('can have tags',function(){
    //Arrange
    $job = Job::factory()->create();
    //ACT
    $job->tag('frontend');
    //ASSERT
    expect($job->tags)->toHaveCount(1);
});
