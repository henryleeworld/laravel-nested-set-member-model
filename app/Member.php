<?php

namespace App;

use Baum\NestedSet\Node as WorksAsNestedSet;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use WorksAsNestedSet;
}
