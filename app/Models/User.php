<?php

namespace App\Models;

use Illuminate\Contracts\Translation\HasLocalePreference;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements HasLocalePreference
{
    protected $table = 'users';

    /**
     * @return mixed|string|null
     */
    public function preferredLocale()
    {
        return $this->locale;
    }
}