<?php

namespace App\Controllers;

class ProfileController extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->where('users.id', user_id())
            ->select('users.id as userid, fullname, username, email, user_image, identity_number, identifier, major, status, auth_groups_users.group_id, auth_groups.name', 'attendances.*, users.fullname');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->join('attendances', 'attendances.user_id = users.id');
        $accounts = $builder->get();

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->where('users.id', user_id())
            ->select('attendances.*, users.fullname');
        $builder->join('attendances', 'attendances.user_id = users.id');
        $attendances = $builder->get();

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->where('users.id', user_id())
            ->select('asset_logs.created_at as logscreated,start_time, end_time, purpose, users.id as userid, assets.name');
        $builder->join('asset_logs', 'users.id = asset_logs.user_id');
        $builder->join('assets', 'asset_logs.asset_id = assets.id');
        $logs = $builder->get();

        $data = [
            'title' => 'My Profile',
            'accounts' => $accounts->getResult(),
            'attendances' => $attendances->getResult(),
            'logs' => $logs->getResult()
        ];
        // dd($data);
        return view('profile/index', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Manage Attendance',
        ];
        return view('profile/edit', $data);
    }
}
