<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\View;

class UserPdfController extends Controller
{
    /**
     * Генерирует и возвращает PDF-файл резюме пользователя.
     *
     * @param int $id
     * @return JsonResponse|null
     */
    public function indexUserPdf($id): ?JsonResponse
    {
        $user = Users::find($id);

        // Проверяем, найден ли пользователь
        if (!$user) {
            return response()->json(['message' => 'Пользователь не найден'], 404);
        }

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        // $options->set('defaultFont', 'Helvetica'); // Установка шрифта по умолчанию

        $dompdf = new Dompdf($options);

        // Генерируем HTML для PDF-файла на основе шаблона
        $html = View::make('user-pdf', compact('user'))->render();

        $dompdf->loadHtml($html);
        $dompdf->render();

        // Возвращаем PDF-файл в качестве ответа
        return $dompdf->stream('resume_' . $user->name . '.pdf');
    }
}
