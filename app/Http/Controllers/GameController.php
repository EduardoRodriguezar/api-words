<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\PlayedWord;
use App\Models\Word;
use Carbon\Carbon;

class GameController extends Controller
{
    public function getWords(Request $request, $categoryId)
    {
        $playerId = $request->player_id;
        $today = Carbon::today(); // Fecha de hoy

        // Verificar si ya se jugó una palabra hoy
        $playedToday = PlayedWord::where('player_id', $playerId)
                                  ->whereDate('created_at', $today)
                                  ->exists();

        if ($playedToday) {
            return response()->json([
                'message' => 'Ya jugaste una palabra hoy.',
                'word' => null,
            ]);
        }

        // Obtener una palabra no jugada en esa categoría
        $word = Word::with(['options' => function ($query) {
                        $query->inRandomOrder();
                    }])
                    ->where('category_id', $categoryId)
                    ->whereNotIn('id', PlayedWord::where('player_id', $playerId)->pluck('word_id')->toArray())
                    ->inRandomOrder()
                    ->first();

        // Si no hay palabras disponibles
        if (!$word) {
            return response()->json([
                'message' => 'No hay más palabras disponibles en esta categoría.',
                'word' => null,
            ]);
        }

        // Registrar la palabra como jugada
        PlayedWord::create([
            'player_id' => $playerId,
            'word_id' => $word->id,
        ]);

        return response()->json([
            'word' => $word,
        ]);
    }

    // Enviar respuestas y calcular cuántas fueron correctas
    public function submitAnswers(Request $request)
    {
        $correct = 0;

        foreach ($request->answers as $answer) {
            $option = Option::find($answer['selected_option_id']);
            if ($option && $option->is_correct) {
                $correct++;
            }
        }

        return response()->json([
            'player_id' => $request->player_id,
            'correct_answers' => $correct,
            'total_questions' => count($request->answers),
        ]);
    }

    public function getPlayedWords($playerId)
    {
        $playedWords = PlayedWord::with('word') // Relación con el modelo Word
            ->where('player_id', $playerId)
            ->get();

        return response()->json($playedWords);
    }
}
