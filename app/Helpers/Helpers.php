<?php

use App\Models\AddonSubCategories;
use App\Models\Account;

function generate_random_token(string $prefix = "", int $length = 8): string
{
    if (!$prefix) {
        return strtoupper(substr(str_shuffle(uniqid()), 0, $length));
    }
    return strtoupper($prefix."".substr(str_shuffle(uniqid()), 0, $length));
}

function generate_unique_number(int $prefix = 0, int $length = 5): int
{
    return $prefix . str_pad(rand(0, pow(10, $length)-1), $length, '0', STR_PAD_LEFT);
}

function greeting():string
{
    /* This sets the $time variable to the current hour in the 24 hour clock format */
    $time = date("H");
    /* Set the $timezone variable to become the current timezone */
    $timezone = date("e");
    /* If the time is less than 1200 hours, show good morning */
    if ($time < "12") {
        return "Good morning";
    } else
    /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
    if ($time >= "12" && $time < "17") {
        return "Good afternoon";
    } else
    /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
    if ($time >= "17" && $time <= "23") {
        return "Good evening";
    }
}

function remove_encrypt_data($encrypted_data) {
    $removed_encrypt_prefix = str_replace(env('ENCRYPT_PREFIX'), '', $encrypted_data);
    return str_replace(env('ENCRYPT_KEY'), '', decrypt($removed_encrypt_prefix));
}

function get_sub_addons($addon, $organization_id) {
     return $addon ? AddonSubCategories::where(function ($query) use ($addon, $organization_id) {
        $query->where('addon_id', $addon->id)->where('organization_id', $organization_id);
    })->orWhere(function ($query) use ($addon) {
        $query->where('addon_id', $addon->id)->whereNull('organization_id');
    })->orderBy('created_at', 'DESC')->get() : Null;
}

function company_info()
{
    if (auth()->check()) {
        $account = Account::where('user_id', auth()->user()->id)->first();
        if ($account) {
            return $account;
        } else {
            return null;
        }
    } else {
        return null;
    }
}

