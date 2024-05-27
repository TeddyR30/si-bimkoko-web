<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;
use App\Http\Controllers\ActivityLogController;

class ActivityLogController extends Controller
{
    public function index()
    {
        $activityLogs = ActivityLog::orderBy('created_at', 'desc')->paginate(10);
        return view('activity_logs.index', compact('activityLogs'));
    }
}
