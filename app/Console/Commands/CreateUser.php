<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('Enter user name.');
        $email = $this->ask('Enter user email.');
        $password = $this->ask("Enter password For $name.");

        User::create([
            'name' => $name,
            'email' => $email,
            'password' =>  Hash::make($password),
        ]);

        $this->info('User is created successfully.');
    }
}
