<?php
/**
 * 没有任何逻辑的Model类
 * @author blues
 */
namespace App\Models\Test;
use Larfree\Models\Api;
use App\Scopes\Test\TestTestScope;
class TestTest extends Api
{
    use TestTestScope;
}