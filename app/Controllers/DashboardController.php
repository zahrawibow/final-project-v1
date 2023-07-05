<?php

namespace App\Controllers;

use App\Models\AssetModel;
use App\Models\AttendanceModel;

class DashboardController extends BaseController
{
    protected $attendanceModel;
    protected $assetCount;
    protected $client;

    public function __construct()
    {
        $this->attendanceModel = new AttendanceModel();
        $this->assetCount = (new AssetModel())->countAllResults();
        $this->client = \Config\Services::curlrequest();
    }

    public function index()
    {
        $data = [
            'title' => 'Pagu Utama',
            'asset_count' => $this->assetCount,
            'visitors' => $this->attendanceModel->countAllResults(),

        ];

        return view('dashboard/index', $data);
    }

    public function testing()
    {
        $data = [
            'title' => 'Testing'
        ];

        return view('dashboard/testing', $data);
    }

    public function radioisotope()
    {
        $data = [
            'title' => 'Informasi Radiosiotop',
            'nuclides' => $this->getNuclideData()
        ];
        return view('dashboard/radioisotope', $data);
    }

    public function stored_attendance()
    {
        $this->attendanceModel->save([
            'activity' => $this->request->getVar('activity'),
            'description' => $this->request->getVar('description'),
            'user_id' => user_id(),
            // 'created_at' => now()
        ]);

        return redirect()->to('/');
        // return view('dashboard/radioisotope', $data);
    }

    public function getNuclideData()
    {
        $url =  'https://www-nds.iaea.org/relnsd/v1/data?fields=levels&nuclides=60co';

        $response = $this->client->request('get', $url)->getBody();

        $response = explode("\n", $response);
        $headers = explode(',', array_shift($response));

        $data = [];
        foreach ($response as $key => $value) :
            $data[$key] = explode(',', $value);
        endforeach;

        // $data[0][0] = "aaaa";

        $finalData = [];
        foreach ($data as $key => $value) :
            if (count($value) > 1) :
                foreach ($value as $index => $val) :
                    $finalData[$key][$headers[$index]] = $val;
                endforeach;
            endif;
        endforeach;

        return $finalData;
    }
}
