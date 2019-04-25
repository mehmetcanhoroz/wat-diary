<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    const TYPE_EVENT = 'event';
    const TYPE_ANNOUNCEMENT = 'announcement';
    const TYPE_CONCERT = 'concert';
    const TYPE_PARTY = 'party';
    const TYPE_TRIP = 'trip';
}
