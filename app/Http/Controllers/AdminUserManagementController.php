<?php

namespace App\Http\Controllers;
use App\Models\users;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserManagementController extends Controller
{
    // Display the list of users
    public function index(Request $request)
    {   
        $users = users::all();
        // $users = users::paginate(10);
        return view('admin.UserManagement.index', compact('users'));  
    }

    // Make random avatar for all users in the database (optional)
    // public function randImg(){
    //     $maxID = users::max('id');
        
    //     for($i=1; $i<=$maxID; $i++){
    //         $user = users::find('id',$i)->first();
    //         if(!$user){
    //             continue;
    //         }
    //         else{
    //             $images = [
    //                 'images/users/users_avatar_1.png',
    //                 'images/users/users_avatar_2.png',
    //                 'images/users/users_avatar_3.png',
    //                 'images/users/users_avatar_4.png',
    //                 'images/users/users_avatar_5.png',
    //                 'images/users/users_avatar_6.png',
    //                 'images/users/users_avatar_7.png',
    //                 'images/users/users_avatar_8.png',
    //                 'images/users/users_avatar_9.png',
    //             ];
    //             $rand_img = $images[array_rand($images)];
    //             $user->avatar = $rand_img;
    //             $user->save();
    //         }
    //     } 
    // }

    // Display the form to add a new user
    public function create()
    {
        return view('admin.UserManagement.create');
    }

    // Handle adding a new user
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|string|max:11',
            'avatar' => 'nullable|string',
            'role' => 'required',
        ]);

        // Create a new user
        users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'avatar' => $request->avatar,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.UserManagement.index')->with('success', 'User added successfully!');
    }

    // Display the form to edit a user
    public function edit($id)
    {
        $user = users::findOrFail($id);
        return view('admin.UserManagement.edit', compact('user'));
    }

    // Handle updating a user
    public function update(Request $request, $id)
    {
        $user = users::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'phone' => 'required|string|max:11',
            'avatar' => 'nullable|string',
            'role' => 'required',
        ]);

        // Avatar random 1-9
        $images = [
            'images/users/users_avatar_1.png',
                'images/users/users_avatar_2.png',
                'images/users/users_avatar_3.png',
                'images/users/users_avatar_4.png',
                'images/users/users_avatar_5.png',
                'images/users/users_avatar_6.png',
                'images/users/users_avatar_7.png',
                'images/users/users_avatar_8.png',
                'images/users/users_avatar_9.png',
        ];
        $rand_img = $images[array_rand($images)];

        // Update user information
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'avatar' => $rand_img,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.UserManagement.index')->with('success', 'User information has been updated!!');
    }

    // Handle deleting a user
    public function destroy($id)
    {
        $user = users::FindOrFail($id);
        $user->delete();

        return redirect()->route('admin.UserManagement.index')->with('success', 'User has been successfully deleted!');
    }
}
