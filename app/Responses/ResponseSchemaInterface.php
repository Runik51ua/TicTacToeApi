<?php

namespace App\Responses;

use App\Models\Game;

interface ResponseSchemaInterface
{
    public function gameBoardResponse(Game $game): array;

    public function gameBoardErrorResponse(string $message): array;
}
