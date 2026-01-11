<?php

namespace App\Http\Controllers;

use App\Http\Helpers\ResponseFormat;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return ResponseFormat::success(User::all());
        } catch (Exception $e) {
            return ResponseFormat::error();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        try {

            
            $request["password"] = Hash::make($request["password"]);
            $user = User::create($request->validated());
            return ResponseFormat::success($user);
        } catch (Exception $e) {
           
            return ResponseFormat::error();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        try {
            return ResponseFormat::success($user, "Succes to get single data");
        } catch (Exception $e) {
            return ResponseFormat::error();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        try {
            if ($request["password"] ?? false)
                $request["password"] = Hash::make($request["password"]);
            $user = $user->update($request->validated());
            return ResponseFormat::success($user);
        } catch (Exception $e) {

        dd($e->getMessage());
            return ResponseFormat::error();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try {
            $user = $user->delete();
            return ResponseFormat::success($user, "Succes to delete data");
        } catch (Exception $e) {
            return ResponseFormat::error();
        }
    }
}
