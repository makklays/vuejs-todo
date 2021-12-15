<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormTodoController extends Controller
{
  public function submit(Request $request)
  {
    $this->validate($request, [
      'title' => 'required|string',
      'email' => 'required|email',
    ]);
    
    /** send email here */
    
    return response()->json(null, 200); // 204 - no content
  }
}
