<?php

namespace olee\sociallink\Controllers;

use Illuminate\Http\Request;
use olee\sociallink\Models\SocialLink;
class SocialLinkController extends Controller
{
    public function test (){
     $data =  SocialLink::all();  
return $data ;
    }
}
