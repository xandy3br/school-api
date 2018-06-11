<?php

namespace Emtudo\Units\School\Courses\Http\Requests\Frequencies;

use Emtudo\Support\Http\Request;
use Emtudo\Domains\Courses\Frequency;

class UpdateFrequencyRequest extends Request
{
    public function rules()
    {
        return Frequency::rules()->updating();
    }
}
