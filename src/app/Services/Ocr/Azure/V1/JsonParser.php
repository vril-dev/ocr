<?php

namespace App\Services\Ocr\Azure\V1;

trait JsonParser
{

    /**
     * extractWords function
     *
     * @param string $json
     *
     * @return string
     */
    public function extractWords(string $json): string
    {
        return collect(
                data_get(
                    json_decode($json, true),
                    'analyzeResult.pages.0.lines'
                )
            )
            ->implode('content', ' ');
    }

}
