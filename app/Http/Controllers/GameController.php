<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\PlayedWord;
use App\Models\Word;

class GameController extends Controller
{

    public function getWords(Request $request, $categoryId)
    {
        $playerId = $request->player_id;

        // Obtener IDs de palabras ya jugadas por el jugador
        $playedWordIds = PlayedWord::where('player_id', $playerId)
                                    ->pluck('word_id')
                                    ->toArray();

        // Buscar palabras NO jugadas en esa categoría
        $words = Word::with(['options' => function ($query) {
                        $query->inRandomOrder();
                    }])
                    ->where('category_id', $categoryId)
                    ->whereNotIn('id', $playedWordIds)
                    ->inRandomOrder()
                    ->limit(5)
                    ->get();

        // Si no hay más palabras disponibles
        if ($words->isEmpty()) {
            return response()->json([
                'message' => 'No hay más palabras disponibles en esta categoría.',
                'words' => [],
            ]);
        }

        // Registrar palabras como jugadas
        foreach ($words as $word) {
            PlayedWord::create([
                'player_id' => $playerId,
                'word_id' => $word->id,
            ]);
        }

        return response()->json($words);
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
