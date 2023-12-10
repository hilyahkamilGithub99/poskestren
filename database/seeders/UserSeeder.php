<?php

namespace Database\Seeders;

use App\Models\Obat;
use App\Models\Role;
use App\Models\User;
use App\Models\Admin;
use App\Models\Santri;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            DB::beginTransaction();
            $roles = ['admin', 'santri'];
            foreach ($roles as $data) {
                Role::updateOrCreate([
                    'name' => $data,
                    'guard_name' => 'web',
                ]);
            }


    
            $admin = User::create([
                'name' => 'admin',
                'username' => 'adminAplikasi',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            ])->assignRole('admin');
    
            Admin::create([
                'user_id'   => $admin->id,
                'name'      => 'admin',
            ]);
            


            // ===========================================================================================
            
            $users = [
                [
                    'name' => 'Johndoe', 
                    'username' => 'johndDoe',
                    'email' => 'Johndoe@gmail.com',
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                ],
                [
                    'name' => 'Muhammad Sholeh', 
                    'username' => 'muhammadSholeh',
                    'email' => 'muhammadolehsh@gmail.com',
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                ],
                [
                    'name' => 'Rizky Maulana', 
                    'username' => 'rizkyMaulana',
                    'email' => 'rizkymaulana@gmail.com',
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                ],
                [
                    'name' => 'Indra Bekti', 
                    'username' => 'indraBekti',
                    'email' => 'indraektib@gmail.com',
                    'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                ],
            ];
    
            foreach ($users as $data) {
                $user[] = User::updateOrCreate($data)->assignRole('santri');
            }
    
            $santri = [
                [
                    'user_id'                   => $user[0]->id,
                    'name'                      => 'JohnDoe',
                ],
                [
                    'user_id'                   => $user[1]->id,
                    'name'                      => 'Muhammad Sholeh',
                ],
                [
                    'user_id'                   => $user[2]->id,
                    'name'                      => 'Rizky Maulana',
                ],
                [
                    'user_id'                   => $user[3]->id,
                    'name'                      => 'Indra Bekti',
                ]
                    
            ];

            $obat = [
                [
                    'type'                      => 'antibiotik',
                    'name'                      => 'Paracetamol',
                    'price'                     => 10.0000
                ],
                [
                    'type'                      => 'capsule',
                    'name'                      => 'Antibiotik',
                    'price'                     => 15.0000
                ],
                [
                    'type'                      => 'syrup',
                    'name'                      => 'Anti Depresan',
                    'price'                     => 20.0000
                ],
                [
                    'type'                      => 'pil',
                    'name'                      => 'Botox',
                    'price'                     => 25.0000
                ],
                [
                    'type'                      => 'syrup',
                    'name'                      => 'Vitamin b',
                    'price'                     => 25.0000
                ],
                [
                    'type'                      => 'pil',
                    'name'                      => 'Decolgen',
                    'price'                     => 25.0000
                ]
                    
            ];
    
            foreach ($santri as $data) {
                $santri = Santri::updateOrCreate($data);
                
            } 

            foreach ($obat as $data) {
                $santri = Obat::updateOrCreate($data);
                
            } 

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            echo $e->getMessage();
        }
        
    }
}