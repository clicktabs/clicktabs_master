<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscription;

class CheckExpiration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && Auth::user()->roles[0]["name"] !== "super-admin") {
            $user = auth()->user();

            // Check if the user has an associated organization_id
            if ($user->organization_id) {
                // Find the user's organization's active subscription
                $subscription_data = Subscription::where('organization_id', $user->organization_id)
                ->where('status', 'active')
                ->first();
                // Calculate the expiry date 7 days from now
                $expiryDate = $subscription_data->expires_at->addDays(7);
                // Compare the expiry date with the current date and time
                if (!empty($subscription_data) && $expiryDate >= now()) {
                    return $next($request);
                } else {
                    return redirect('/dashboard')->with('error', 'Please update your subscription first!');
                }
            } else {
                return redirect('/dashboard')->with('error', 'Please Update Organization!');
            }
        } else {
            if(Auth::user()->roles[0]["name"] == "super-admin"){
                return $next($request);
            }else{
                return redirect('/dashboard')->with('error', 'Please login as admin!');
            }
        }
    }
}
