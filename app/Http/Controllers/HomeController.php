<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user(); 
        if ($user->type == 0) {
            return redirect()->route('user.index');
        } else {
            return redirect()->route('admin.index');
        }

        abort(403);
    }
}
