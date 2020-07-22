<?php

namespace ELSENOSY\S3GAuthentication\models;

use Illuminate\Database\Eloquent\Model;

class S3gInvitation extends Model
{
    protected $fillable = ['email', 'code', 'token', 'status'];
}
