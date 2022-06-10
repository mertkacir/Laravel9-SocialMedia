<?php

namespace App\Models;
use App\friendships;
use App\Models\Friendship;

trait Friendable {

    public function test() {

        return 'hi';
    }

    public function addFriend($id){

        $Friendship = Friendship::create([

            'requester' => $this->id, // who is logged in
            'user_requested' => $id,
        ]);

        if($Friendship)
        {

            return $Friendship;
        }

        return 'failed';

    }



}
