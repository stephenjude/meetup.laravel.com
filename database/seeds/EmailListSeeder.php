<?php

use App\Models\EmailList;
use Illuminate\Database\Seeder;

class EmailListSeeder extends Seeder
{
    public function run()
    {
        EmailList::create([
            'name' => 'Meetup',
            'requires_confirmation' => true,
            'default_from_email' => 'freek@spatie.be',
            'default_from_name' => 'Freek Van der Herten',
        ]);
    }
}
