<?php

namespace App\Http\Controllers;

use App\Services\MyService;
use Illuminate\Http\Request;

class MyController extends Controller
{
    protected $myService;

    public function __construct(MyService $myService)
    {
        $this->myService = $myService;
    }

    public function someMethod()
    {
        // The singleton instance of MyService is used here
        $this->myService->doSomething();
    }
}
