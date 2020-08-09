<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeedbackCreateRequest;

class FeedbackController extends Controller
{
   
    public function index()
    {
        return view('feedback');
    }

    public function store(FeedbackCreateRequest $request)
	{
		 $data = $request->only(['name', 'text']);
		 $saveFile = function(array $data) {
			  $responseData = [];
		 	  $fileFeedback = storage_path('app/feedback.txt');
		 	  if(file_exists($fileFeedback)) {
		 	  	 $file = file_get_contents($fileFeedback);
				 $response = json_decode($file, true);
			  }


		 	  $responseData[] = $data;
		 	  if(isset($response) && !empty($response)) {
				  $r = array_merge($response, $responseData);
			  }else {
		 	  	  $r = $responseData;
			  }
		 	  file_put_contents($fileFeedback, json_encode($r));
		 };

		 $saveFile($data);

		 return redirect()->route('feedback')->with('success', 'Отзыв успешно добавлен');
    }
    public function api()
	{
		$file =  file_get_contents(storage_path('app/feedback.txt'));
		$data = json_decode($file, true);
		return response()->json($data);

	}
}