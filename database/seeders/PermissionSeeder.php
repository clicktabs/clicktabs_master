<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'role-list', 'role-create', 'role-delete', 'role-edit',
            'addons-list', 'addons-create', 'addons-delete', 'addons-edit',
            'clock_in', 'attendance_list', 'request_leave', 'leave_list', 'request_time_off', 'request_time_off_list',
            'communication_list', 'interaction_list',
            'employee-dashboard', 'admin-dashboard', 'super-admin-dashboard',
            'non-admit-list', 'admit-list', 'pending-list', 'discharge-list',
            'user-list', 'user-create', 'user-delete', 'user-show', 'user-edit',
            'org-list', 'org-create', 'org-delete', 'annual-agency-report-create',
            'employee-list', 'employee-create', 'employee-delete', 'employee-show',
            'patient-list', 'patient-create', 'patient-delete', 'patient-show', 'patient-edit',
            'referral-list', 'referral-create', 'referral-delete', 'referral-show', 'referral-edit',
            'physician-list', 'physician-create', 'physician-delete', 'physician-show', 'physician-edit',
            'insurance-list', 'insurance-create', 'insurance-delete', 'insurance-show', 'insurance-edit',
            'pharmacy-list', 'pharmacy-create', 'pharmacy-delete', 'pharmacy-show', 'pharmacy-edit',
            'orders-list', 'orders-create', 'orders-delete', 'orders-show', 'orders-edit',
            'qa-list', 'qa-create', 'qa-delete', 'qa-edit', 'qa-show',
            'oasis-list', 'oasis-create', 'oasis-delete', 'oasis-show',
            'expiring-authority', 'caregivers-search',
            'referral-contacts-create', 'referral-contacts-delete', 'referral-contacts-show', 'referral-contacts-edit',
            'address-book-list', 'address-book-create', 'address-book-show', 'address-book-edit', 'address-book-delete',
            'schedule-list', 'scheduled-create', 'scheduled-show', 'scheduled-delete', 'scheduled-edit','roles-list-with-permissions','create-role-with-permissions',
            'patients.non-skilled-dashboard','subscriptions.process-payment','subscription.index','subscription.create','subscription.store','subscription.edit','subscription.update',
            'subscription.destroy','subscriptions.pending-payment','update.subscription',
            'new.hiring', 'hiring.show', 'store.hiring', 'hiring.storeApplication', 'store.hiring2', 'hiring.formit4', 'hiring.formw4', 'hiring.ethics',
            'hiring.addendum', 'hiring.confidentially', 'hiring.ecovid19', 'hiring.storenoncompete', 'hiring.storehealth', 'hiring.storehepatitis',
            'hiring.storetb', 'caregivers.editmodal', 'restrictions.editmodal', 'attributes.editmodal', 'vitals.editmodal', 'vitals.changeStatus',
            'immunizations.editmodal', 'immunizations.changeStatus', 'allergies.editmodal', 'medication.editmodal', 'allergies.changeStatus',
            'authorizations.editmodal', 'medication.changeStatus', 'authorizations.changeStatus','company_address', 
            'planofcare.index', 'planofcare.create', 'planofcare.store', 'planofcare.show', 'planofcare.edit', 'planofcare.update', 'planofcare.destroy',
            'oasis-soc-e.index', 'oasis-soc-e.create', 'oasis-soc-e.store', 'oasis-soc-e.show', 'oasis-soc-e.edit', 'oasis-soc-e.update', 'oasis-soc-e.destroy',
            'skilled-agency.getSign', 'printoasispdf', 'patients.skilled-nursing-dashboard', 'skilled-agency.physicianorder', 'skilled-agency.plan-of-care', 'skilled-agency.oasis-e-start-of-care',
            'skilled-agency.get-oasis-e-start-of-care', 'skilled-agency.oasis-e-dealth','patients.nurse-visit-note.index', 'skilled-agency.hha-care-plan', 'skilled-agency.60-day-summary',
            'skilled-agency.aide-supervisory-visit', 'skilled-agency.hha-visit-note', 'skilled-agency.saveNursing',

        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $roles = [
            'super-admin',
            'Administrator',
            'Employee',
            'RN Nursing',
            'LPN/LVN Nursing',
            'Occupational Therapist',
            'Home Health Aide',
            'Quality Assurance',
            'Office Staff',
            'Director Of Nursing',
            'Clerk Non-Clinical',
            'Speech Therapist',
            'Schedular',
            'State Surveyor /Audit',
            'Case Manager',
            'Physical Therapist',
            'Medical Social Worker',
            'Billing Clark',
            'Clinical Manager',
            'Office Manager',
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        $role = Role::where('name', 'super-admin')->get()->first();
        $role->givePermissionTo(Permission::all());

        $user = User::find(1);
        $user->assignRole($role);

    }

}
