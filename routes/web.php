<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('apen-ai', function () {
//     $yourApiKey = getenv('YOUR_API_KEY');
//     $client = OpenAI::client($yourApiKey);

//     $result = $client->completions()->create([
//         'model' => 'text-davinci-003',
//         'prompt' => 'PHP is',
//     ]);

//     echo $result['choices'][0]['text'];
// })->name('openai');
