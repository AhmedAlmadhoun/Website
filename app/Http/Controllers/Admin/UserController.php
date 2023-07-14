<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Message;
use App\Models\Subscrip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(10);
        return view('admin.users.index', compact('users'));
    }
    public function message(){
        $messages = Message::orderBy('id', 'DESC')->paginate(10);
        return view('admin.message.index', compact('messages'));
    }
    public function messagedestroy($id){
        $messages = Message::findOrFail($id);
        $messages->delete();
        return redirect()->back()->with('success', 'تم حذف الرسالة بنجاح');
    }
    public function subscripe(){
        $subscripes = Subscrip::orderBy('id', 'DESC')->paginate(10);
        return view('admin.subscripe.index', compact('subscripes'));
    }
    public function subscripeestroy($id){
        $subscripes = Subscrip::findOrFail($id);
        $subscripes->delete();
        return redirect()->back()->with('success', 'تم حذف الاشتراك بنجاح');
    }
}