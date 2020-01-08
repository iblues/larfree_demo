<?php

namespace App\Models\Admin;

use App\Events\Permission\FilterNavEvent;
use App\Scopes\Admin\AdminNavScope;
use Larfree\Models\Admin\AdminNav as Nav;
use DB;//载入DB类
class AdminNav extends Nav
{

}
