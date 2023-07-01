<?php

namespace App\Controllers;

use \Myth\Auth\Models\UserModel;

class ProfileController extends BaseController
{
    protected $userModel;


    public function __construct()
    {
        $this->userModel = new UserModel();
    }

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
            ->select('radiation_history.*, users.fullname, assets.id as assetid, name');
        $builder->join('radiation_history', 'radiation_history.user_id = users.id');
        $builder->join('assets', 'assets.id = radiation_history.asset_id');
        $radiations = $builder->get();

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->where('users.id', user_id())
            ->select('asset_logs.created_at as logscreated,start_time, end_time, purpose, users.id as userid, assets.name');
        $builder->join('asset_logs', 'users.id = asset_logs.user_id');
        $builder->join('assets', 'asset_logs.asset_id = assets.id');
        $logs = $builder->get();

        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->where('users.id', user_id())
            ->select('asset_loans.status as loanstatus, purpose, loan_time, users.id as userid, assets.name');
        $builder->join('asset_loans', 'users.id = asset_loans.user_id');
        $builder->join('assets', 'asset_loans.asset_id = assets.id');
        $loans = $builder->get();

        $data = [
            'title' => 'My Profile',
            'accounts' => $accounts->getResult(),
            'attendances' => $attendances->getResult(),
            'logs' => $logs->getResult(),
            'loans' => $loans->getResult(),
            'radiations' => $radiations->getResult()
        ];
        // dd($data);
        return view('profile/index', $data);
    }

    public function edit()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->where('users.id', user_id())
            ->select('users.id as userid, fullname, username, email, user_image, identity_number, identifier, major, status, auth_groups_users.group_id, auth_groups.name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $accounts = $builder->get();

        $data = [
            'title' => 'Edit My Profile',
            'accounts' => $accounts->getResult()
        ];
        // dd($data);
        return view('profile/edit', $data);
    }

    public function update($userid)
    {
        $this->userModel->save([
            'id' => $userid,
            'status' => $this->request->getVar('status'),
            'group_id' => $this->request->getVar('group_id'),
            'fullname' => $this->request->getVar('fullname'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'identity_number' => $this->request->getVar('identity_number'),
            'identifier' => $this->request->getVar('identifier'),
            'major' => $this->request->getVar('major'),
            'status' => $this->request->getVar('status')
        ]);

        return redirect()->to(url_to('myprofile.index'));
    }
}
