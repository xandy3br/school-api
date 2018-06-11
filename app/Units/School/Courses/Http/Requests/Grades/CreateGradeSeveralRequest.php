<?php

namespace Emtudo\Units\School\Courses\Http\Requests\Grades;

use Emtudo\Domains\Courses\Grade;
use Emtudo\Support\Http\Request;

class CreateGradeSeveralRequest extends Request
{
    public function rules()
    {
        return Grade::rules()->several();
    }
}
