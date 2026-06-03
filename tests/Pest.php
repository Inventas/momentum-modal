<?php

declare(strict_types=1);

use Momentum\Modal\Tests\Stubs\Tweet;
use Momentum\Modal\Tests\Stubs\User;

pest()->extend(Momentum\Modal\Tests\TestCase::class)->in('Pest');

function user(): User
{
    return User::create(['username' => 'test-user']);
}

function tweet(User $user): Tweet
{
    return $user->tweets()->create(['body' => 'test-tweet']);
}
