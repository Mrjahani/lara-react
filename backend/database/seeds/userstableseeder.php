<?php


use App\User;
use Illuminate\Database\Seeder;

class userstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $this->createAdminUser();
        $this->createAuthorUser();

    }

    private function createAdminUser(): void
    {
        User::create([
            'name' => 'masoud',
            'lastname' => 'jahani',
            'username' => 'salivan',
            'email' => 'jahani@gmail.com',
            'password' => bcrypt('123456'),
            'type' => 'admin',
        ]);
        $this->command->info('admin user created');
    }

    private function createAuthorUser()
    {
        User::create([
            'name' => 'mohammad',
            'lastname' => 'yegane',
            'username' => 'usermp',
            'email' => 'usermp@gmail.com',
            'password' => bcrypt('1233456'),
            'type' => 'author',
        ]);
        $this->command->info('author user created');
    }
}
