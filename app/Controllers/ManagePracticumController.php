<?php

namespace App\Controllers;

use App\Models\PracticumModel;
use App\Models\AssetModel;
use App\Models\LaboratoriansModel;
use App\Models\TeamsModel;
use Myth\Auth\Entities\User;
use \Myth\Auth\Models\UserModel;

class ManagePracticumController extends BaseController
{
    protected $practicumModel;
    protected $assetModel;
    protected $laboratoriansModel;
    protected $teamsModel;
    protected $userModel;


    public function __construct()
    {
        $this->practicumModel = new PracticumModel();
        $this->assetModel = new AssetModel();
        $this->laboratoriansModel = new LaboratoriansModel();
        $this->teamsModel = new TeamsModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('practicums');
        $practicum = $builder->select('practicums.*, laboratorians.user_id as userlaboratorian, users.fullname, assets.name')
            ->join('laboratorians', 'practicums.laboratorian_id = laboratorians.id')
            ->join('users', 'users.id = laboratorians.user_id')
            ->join('assets', 'practicums.asset_id = assets.id') // Tambahkan operasi JOIN untuk tabel assets
            ->get()
            ->getResultArray();

        $db      = \Config\Database::connect();
        $builder = $db->table('teams');
        $team = $builder->select('teams.*, users.fullname')
            ->join('users', 'teams.id = users.team_id')
            ->get()
            ->getResultArray();

        $data = [
            'title' => 'Manage Practicum',
            'practicum' => $practicum,
            'teamjoin' => $team,
            'teams' => $this->teamsModel->getTeamsData(),
            // 'assets' => $this->assetModel->getAssetData()
        ];
        // dd($data);
        return view('manage/practicum/index', $data);
    }

    public function create()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('laboratorians');
        $laboratorian = $builder->select('laboratorians.*, users.fullname')
            ->join('users', 'laboratorians.user_id = users.id')
            ->get()
            ->getResultArray();

        $data = [
            'title' => 'Create Practicum',
            'practicum' => $this->practicumModel->getPracticumData(),
            'assets' => $this->assetModel->getAssetData(),
            'laboratorians' => $laboratorian
        ];
        return view('/manage/practicum/create', $data);
    }

    public function create_team()
    {
        // $db      = \Config\Database::connect();
        // $builder = $db->table('teams');
        // $team = $builder->select('teams.*, users.fullname')
        //     ->join('users', 'teams.id = users.team_id')
        //     ->get()
        //     ->getResultArray();
        $users = new \Myth\Auth\Models\UserModel();

        $data = [
            'title' => 'Create Practicum',
            'users' => $users->findAll(),
            // 'practicum' => $this->practicumModel->getPracticumData(),
            // 'assets' => $this->assetModel->getAssetData(),
            // 'team' => $team
        ];
        // dd($data);
        return view('/manage/practicum/create_team', $data);
    }

    public function stored_practicum()
    {
        $data = [
            'title' => $this->request->getVar('title'),
            'asset_id' => $this->request->getVar('asset_id'),
            'user_id' => user_id(),
            'laboratorian_id' => $this->request->getVar('laboratorian_id'),
            'team' => $this->request->getVar('team'),
            'schedule' => $this->request->getVar('schedule'),
            'time' => $this->request->getVar('time'),
            'prac_location' => $this->request->getVar('prac_location'),
            'description' => $this->request->getVar('description'),
            'prac_status' => $this->request->getVar('prac_status')
        ];

        if ($this->practicumModel->save($data) == false) :
            return redirect()->back()->with('errors', $this->practicumModel->errors());
        endif;


        return redirect()->to(url_to('practicum.manage'));
    }

    public function stored_team()
    {
        $dataUser = $this->request->getVar('id_user');

        $team = $this->teamsModel->insert([
            'team' => $this->request->getVar('team'),
            'lesson' => $this->request->getVar('lesson'),
            'semester' => $this->request->getVar('semester'),
        ]);

        // Masukkan user baru
        foreach ($dataUser as $user) :
            $this->userModel->update($user, [
                'team_id' => $team
            ]);
        endforeach;

        // dd($dataUser);
        return redirect()->to(url_to('practicum.manage'));
    }

    public function delete($id)
    {
        // dd($id);
        $this->practicumModel->delete($id);

        return redirect()->to(url_to('practicum.manage'));
    }


    public function edit($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('laboratorians');
        $laboratorian = $builder->select('laboratorians.*, users.fullname')
            ->join('users', 'laboratorians.user_id = users.id')
            ->get()
            ->getResultArray();

        $data = [
            'title' => 'Edit Detail',
            'practicum' => $this->practicumModel->getPracticumData($id),
            'assets' => $this->assetModel->getAssetData(),
            'laboratorians' => $laboratorian
        ];

        // dd($data);
        return view('manage/practicum/edit', $data);
    }

    public function edit_team($id)
    {
        // $db      = \Config\Database::connect();
        // $builder = $db->table('users');
        // $team = $builder->select('users.*, teams.id as teamsid, team, lesson, semester')
        //     ->join('teams', 'teams.id = users.team_id')
        //     ->get()
        //     ->getResultArray();
        $users = new \Myth\Auth\Models\UserModel();

        $data = [
            'title' => 'Edit Detail',
            // 'practicum' => $this->practicumModel->getPracticumData($id),
            // 'teamjoin' => $team,
            'users' => $users->findAll(),
            'teams' => $this->teamsModel->getTeamsData($id)
        ];

        // dd($data);
        return view('manage/practicum/edit_team', $data);
    }

    public function update($id)
    {
        // dd($this->request->getVar());

        $this->practicumModel->save([
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'asset_id' => $this->request->getVar('asset_id'),
            'user_id' => user_id(),
            'laboratorian_id' => $this->request->getVar('laboratorian_id'),
            'team' => $this->request->getVar('team'),
            'schedule' => $this->request->getVar('schedule'),
            'time' => $this->request->getVar('time'),
            'prac_location' => $this->request->getVar('prac_location'),
            'description' => $this->request->getVar('description'),
            'prac_status' => $this->request->getVar('prac_status')
        ]);

        return redirect()->to(url_to('practicum.manage'));
    }

    public function update_team($id)
    {

        $teamId = $this->request->getVar('id');
        $dataUser = $this->request->getVar('id_user');

        $this->teamsModel->save([
            'id' => $id,
            'team' => $this->request->getVar('team'),
            'lesson' => $this->request->getVar('lesson'),
            'semester' => $this->request->getVar('semester'),
        ]);

        // Reset kelompok terkait
        $this->userModel->where('team_id', $teamId)->set(['team_id' => null])->update();
        // $this->userModel->where('team_id', $teamId)->update();

        // Masukkan user baru
        foreach ($dataUser as $user) :
            $this->userModel->update($user, [
                'team_id' => $teamId
            ]);
        endforeach;

        // dd($dataUser);
        return redirect()->to(url_to('practicum.manage'));
    }
}
