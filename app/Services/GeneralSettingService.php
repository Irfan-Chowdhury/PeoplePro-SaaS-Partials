<?php

namespace App\Services;

use App\Contracts\GeneralSettingContract;
use App\Facades\Alert;
use App\Facades\Utility;
use Exception;
use Illuminate\Support\Facades\File;

class GeneralSettingService
{
    private $generalSettingContract;

    public function __construct(GeneralSettingContract $generalSettingContract)
    {
        $this->generalSettingContract = $generalSettingContract;
    }

    public function getLatestData()
    {
        return $this->generalSettingContract->fetchLatestData();
    }

    public function updateLatest($request)
    {
        try {
            $data = $this->requestHandle($request);
            $imageName = $this->imageHandle($request);
            if($imageName) {
                $data['site_logo'] = $imageName;
            }
            $this->generalSettingContract->latestDataUpdate($data);

            Utility::setEnv('APP_NAME', $data['site_title']);

            return Alert::successMessage('Data Submitted Successfully');
        }
        catch (Exception $exception) {
            return Alert::errorMessage($exception->getMessage());
        }
    }

    protected function imageHandle($request)
    {
        $imageName = null;

        if ($request->hasFile('site_logo')) {
            $image = $request->file('site_logo');
            $imagesDirectory = public_path('landlord/images/logo');

            if (File::isDirectory($imagesDirectory)) {
                File::cleanDirectory($imagesDirectory);
            }

            $ext = pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
            $imageName = date("Ymdhis") . 1;
            $imageName = $imageName . '.' . $ext;

            $image->move($imagesDirectory, $imageName);
        }
        return $imageName;
    }

    private function requestHandle($request)
    {
        $data = [
            'site_title' => $request->site_title,
            // 'site_logo'  => "logo.png",
            'time_zone' => $request->time_zone,
            'phone' =>  $request->phone,
            'email' =>  $request->email,
            'free_trial_limit' =>  $request->free_trial_limit,
            'currency_code' =>  $request->currency_code,
            'frontend_layout' =>  $request->frontend_layout,
            'date_format' =>  $request->date_format,
            'footer' =>  $request->footer,
            'footer_link' =>  $request->footer_link,
            'developed_by' =>  $request->developed_by,
        ];

        return $data;
    }
}