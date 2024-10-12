<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateAdminUser extends Command
{
    protected $signature = 'admin:create';
    protected $description = 'Создает администратора, если он не существует';

    public function handle()
    {
        $admin = User::where('is_admin', true)->first();

        if (!$admin) {
            $admin = User::create([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'is_admin' => true
            ]);
            $this->info('Администратор создан с email: admin@example.com и паролем: password');
        } else {
            $this->info('Администратор уже существует');
        }
    }
}
