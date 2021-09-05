<?php

use Illuminate\Support\Facades\Auth;

function isAdmin(){
      $user=Auth::user();

      if($user->role=='admin'){
            return true;
      }else{
            return false;
      }
}

