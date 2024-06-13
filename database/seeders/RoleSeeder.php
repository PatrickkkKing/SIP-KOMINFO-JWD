<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'tambah-pelatihan']);
        Permission::create(['name' => 'edit-pelatihan']);
        Permission::create(['name' => 'hapus-pelatihan']);
        Permission::create(['name' => 'lihat-pelatihan']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'mahasiswa']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('hapus-pelatihan');
        $roleAdmin->givePermissionTo('edit-pelatihan');
        $roleAdmin->givePermissionTo('lihat-pelatihan');


        $roleMahasiswa = Role::findByName('mahasiswa');
        $roleMahasiswa->givePermissionTo('tambah-pelatihan');

    }
}