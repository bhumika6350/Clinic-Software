<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [

            'dashboard-view',

            'patient-view',
            'patient-create',
            'patient-edit',
            'patient-delete',

            'doctor-view',
            'doctor-create',
            'doctor-edit',
            'doctor-delete',

            'appointment-view',
            'appointment-create',
            'appointment-edit',
            'appointment-delete',

            'lab-view',
            'lab-create',
            'lab-edit',
            'lab-delete',

            'user-view',
            'user-create',
            'user-edit',
            'user-delete',

            'role-view',
            'role-create',
            'role-edit',
            'role-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission
            ]);
        }

        $superAdmin = Role::firstOrCreate([
            'name' => 'Super Admin'
        ]);

        $admin = Role::firstOrCreate([
            'name' => 'Admin'
        ]);

        $doctor = Role::firstOrCreate([
            'name' => 'Doctor'
        ]);

        $labAssistant = Role::firstOrCreate([
            'name' => 'Lab Assistant'
        ]);

        $superAdmin->givePermissionTo(Permission::all());

        $admin->givePermissionTo([
            'dashboard-view',
            'patient-view',
            'patient-create',
            'patient-edit',
            'doctor-view',
            'doctor-create',
            'appointment-view',
            'appointment-create',
            'user-view',
        ]);

        $doctor->givePermissionTo([
            'dashboard-view',
            'patient-view',
            'appointment-view',
            'appointment-edit',
        ]);

        $labAssistant->givePermissionTo([
            'dashboard-view',
            'lab-view',
            'lab-create',
            'lab-edit',
        ]);
    }
}