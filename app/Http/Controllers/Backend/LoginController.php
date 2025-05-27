<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;
//use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    // https://dev.to/codeanddeploy/laravel-8-user-roles-and-permissions-step-by-step-tutorial-1dij
    public function showLoginForm(Request $request){
        return view('backend.auth.index');
    }

    public function login(Request $request)
    {
        $request->validate([
        'email' => 'required|string',
        'password' => 'required|string|min:8',
        ]);

        $login = $request->input('email');
        $password = $request->input('password');
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_id';
        if (auth()->attempt([$fieldType => $login, 'password' => $password])) {
            return redirect()->intended('dashboard')->withSuccess('You have successfully signed in!');
        } else {
            return redirect()->back()->with('error', 'Oops! Invalid login credentials.');
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect(url('/'))->with('success', 'Logged out successfully');
    }
}
