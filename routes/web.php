<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('open-ai', function () {
    try {
        $yourApiKey = config('services.open_ai.API_KEY');
        // dd($yourApiKey);
        $client = \OpenAI::client($yourApiKey);
    
        $result = $client->completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'Bit coin is ',
        ]);
        // dd($result);
    } catch (\Exception $e) {
        dd($e->getMessage());
    }
})->name('openai');
