<?php
namespace app\controller;

use app\model\User;
use think\facade\Db;

class Data
{
    public function index(){
        return "Data index";
    }

    public function test() {
        $users = Db::table('user')->select();
        return json($users);
    }

    public function getUser() {
        $users = User::select();
        return json($users);
    }

    public function getUserById($id) {
        $user = User::where('id', $id)->find();
        return json($user);
    }
}