<?php

it('belongs to employer', function () {
    $employer = \App\Models\Employer::factory()->create();
    $job = \App\Models\Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tages', function(){
    $jobs = \App\Models\Job::factory()->create();
    $jobs->tag('Frontend');

    expect($jobs->tags)->toHaveCount(1);
});
