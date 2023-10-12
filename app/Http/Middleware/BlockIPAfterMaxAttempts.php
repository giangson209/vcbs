<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BlockIPAfterMaxAttempts
{
    public function handle(Request $request, Closure $next)
    {
        $maxAttempts = 10;
        $blockDuration = 1440; 

        $ip = $request->ip();

        $blockedIP = DB::table('blocked_ips')
            ->where('ip_address', $ip)
            ->where('blocked_until', '>', Carbon::now())
            ->first();

        if ($blockedIP) {
            return response()->json(['message' => 'IP blocked. Please try again later.'], 403);
        }

        $loginAttempts = DB::table('login_attempts')
            ->where('ip_address', $ip)
            ->where('created_at', '>', Carbon::now()->subMinutes($blockDuration))
            ->count();

        if ($loginAttempts >= $maxAttempts) {
            DB::table('blocked_ips')->insert([
                'ip_address' => $ip,
                'attempts' => $loginAttempts,
                'blocked_until' => Carbon::now()->addMinutes($blockDuration)
            ]);

            return response()->json(['message' => 'IP blocked. Please try again later.'], 403);
        }

        DB::table('login_attempts')->insert([
            'ip_address' => $ip,
            'attempt_count' => $loginAttempts + 1,
            'created_at' => Carbon::now()
        ]);

        return $next($request);
    }
}
