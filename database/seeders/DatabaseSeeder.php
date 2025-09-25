<?php

namespace Database\Seeders;

use App\Models\MemberContact;
use App\Models\User;
use Database\Factories\MemberMinistryFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;
use App\Models\MemberMinistry;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        MemberMinistry::factory(30)->create();

        Member::all()->each(function ($member){
            MemberContact::factory()->create([
                'member_id' => $member->id
            ]);
        });
    }
}
