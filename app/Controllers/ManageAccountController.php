<?php

namespace App\Controllers;

use CodeIgniter\Database\Query;
use \Myth\Auth\Models\GroupModel;
use \Myth\Auth\Models\UserModel;


class ManageAccountController extends BaseController
{

    protected $userModel;
    protected $groupModel;


    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->groupModel = new GroupModel();
    }

    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, fullname, username, email, user_image, identity_number, identifier, major, status, auth_groups_users.group_id, auth_groups.name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();

        $data = [
            'title' => 'Manage Account',
            'accounts' => $query->getResult()
        ];

        // dd($data);
        return view('account/index', $data);
    }


    public function edit($userid)
    {
        $groups = new \Myth\Auth\Models\GroupModel();
        $db = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, fullname, username, email, user_image, identity_number, identifier, major, status, auth_groups_users.*, auth_groups.name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', $userid); // Menggunakan where() untuk memfilter berdasarkan $userid
        $query = $builder->get();

        $data = [
            'title' => 'Manage Account',
            'accounts' => $query->getResult(),
            'groups' => $groups->findAll() // Menggunakan findAll() untuk mendapatkan semua grup
        ];

        // dd($data);
        return view('account/edit', $data);
    }

    public function update($userid)
    {
        // dd($this->request->getVar());

        $this->userModel->save([
            'id' => $userid,
            'fullname' => $this->request->getVar('fullname'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'identity_number' => $this->request->getVar('identity_number'),
            'identifier' => $this->request->getVar('identifier'),
            'major' => $this->request->getVar('major'),
            'status' => $this->request->getVar('status')
        ]);

        //kurang save role
        $db = \Config\Database::connect();
        $builder = $db->table('auth_groups_users');
        $builder->where('user_id', $userid)->update([
            'group_id' => $this->request->getVar('group_id')
        ]);




        return redirect()->to(url_to('account.manage'));
    }

    // public function delete($id)
    // {
    //     // dd($id);
    //     $this->userModel->delete($id);

    //     return redirect()->to(url_to('practicum.manage'));
    // }
    public function delete($userid)
    {

        $this->userModel->delete($userid);

        dd($this);
        return redirect()->to(url_to('account.manage'));
    }
}
