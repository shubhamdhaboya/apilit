<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Function to check app is installed or not
     *
     * @return bool
     *
     */
    public function appInstalled(): bool
    {
        if (file_exists(base_path('.env'))) {
            return true;
        }

        return false;
    }
}
