<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Models\Users;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

/**
 * Class UsersController
 * @package App\Http\Controllers
 */
class UsersController extends Controller
{
    /**
     * Отображает форму создания пользователя.
     *
     * @return View
     */
    public function createUserForm(): View
    {
        return view('create-users_form');
    }

    /**
     * Получает всех пользователей в формате JSON.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $users = Users::all();
        return response()->json($users);
    }

    /**
     * Получает пользователя по ID в формате JSON.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function getUserId(int $id): JsonResponse
    {
        $user = Users::find($id);
        if (!$user) {
            return response()->json(['message' => 'Пользователь не найден'], 404);
        }
        return response()->json($user);
    }

    /**
     * Создает нового пользователя и возвращает сообщение об успешном создании.
     *
     * @param UsersRequest $request
     * @return JsonResponse
     */
    public function createUser(UsersRequest $request): JsonResponse
    {
        $user = new Users();
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        // $user->password = bcrypt($request->password); // код для хеширования пароля
        $user->save();

        return response()->json(['message' => 'Пользователь успешно создан'], 201);
    }
}
