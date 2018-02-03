<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{

    const TYPE_GENERAL = 'general';
    const TYPE_PILOT = 'pilot';
    const TYPE_FORMATION = 'formation';

    const PERMISSION_VIEW = 'guides.view';
    const PERMISSION_CREATE = 'guides.create';
    const PERMISSION_EDIT = 'guides.edit';
    const PERMISSION_DELETE = 'guides.delete';
}
