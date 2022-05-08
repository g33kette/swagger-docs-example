<?php

namespace App\Http\Controllers;

use App\Http\Middleware\TrimStrings;
use Illuminate\Http\Request;

class CatsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/cats/{cat}",
     *     summary="Get Cat",
     *     description="Get an ascii cat",
     *     tags={"cats"},
     *     @OA\Parameter(
     *         name="cat",
     *         in="path",
     *         description="Cat name",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *             enum={"achilles","hercules"}
     *         ),
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\Schema(
     *             type="string"
     *         ),
     *     ),
     *     @OA\Response(
     *        response=422,
     *        description="Unknown cat",
     *        @OA\JsonContent(
     *           @OA\Property(property="message", type="string", example="The selected cat is invalid."),
     *           @OA\Property(property="errors", type="object", example="{'errors':{'cat':['The selected cat is invalid.']}}")
     *         )
     *     )
     * )
     */
    public function index(string $cat, Request $request)
    {
        validator(['cat' => $cat], ['cat' => ['in:hercules,achilles']])->validate();
        return response($this->$cat());
    }

    private function hercules():string
    {
        return "|\---/|"."\r\n"
            ."| o_o |"."\r\n"
            ." \_^_/";
    }

    private function achilles():string
    {
        return " /\_/\\"."\r\n"
        ."( o.o )"."\r\n"
        ." > ^ <";
    }
}
