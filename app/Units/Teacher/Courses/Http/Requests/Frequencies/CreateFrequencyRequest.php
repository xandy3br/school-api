<?php

namespace Emtudo\Units\Teacher\Courses\Http\Requests\Frequencies;

use Emtudo\Support\Http\Request;
use Emtudo\Domains\Courses\Frequency;

class CreateFrequencyRequest extends Request
{
    public function rules()
    {
        return Frequency::rules()->creating();
    }
}
