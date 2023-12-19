<?php

namespace App\Traits;

use Flasher\SweetAlert\Laravel\Facade\SweetAlert;
use Flasher\Toastr\Laravel\Facade\Toastr;

trait AlertUtils
{

    public function showSuccessToast($message)
    {
        return Toastr::addSuccess($message, ['positionClass' => 'toast-bottom-right']);
    }

    public function showInfoToast($message)
    {
        return Toastr::addInfo($message);
    }

    public function showWarningToast($message)
    {
        return Toastr::addWarning($message);
    }

    public function showErrorToast($message)
    {
        return Toastr::addError($message);
    }

    public function showSuccessAlert($message)
    {
        return SweetAlert::addSuccess($message);
    }

    public function showErrorAlert($message)
    {
        return SweetAlert::addError($message);
    }

    public function showInfoAlert($message)
    {
        return SweetAlert::addInfo($message);
    }

}
