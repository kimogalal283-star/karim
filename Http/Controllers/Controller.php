<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * Base Controller for all other controllers.
 * Add shared logic, variables, or traits here.
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Shared data for all controllers (example)
    protected $appName = 'Eng.Karim Dashboard';

    /**
     * Constructor - can be used to share data globally to views
     */
    public function __construct()
    {
        // Example: Share app name with all views
        view()->share('appName', $this->appName);
    }

    /**
     * Log activity or action (optional helper method)
     */
    protected function logActivity(string $message): void
    {
        \Log::info('[Activity] ' . $message);
    }
}
