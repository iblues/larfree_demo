<?php
/**
 * 没有任何逻辑的Model类
 * @author blues
 */
namespace App\Models\Common;
use Larfree\Models\Api;
use App\Scopes\Common\CommonPayScope;
class CommonPay extends Api
{
    use CommonPayScope;
}