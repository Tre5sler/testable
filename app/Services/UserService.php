<?php
/**
 * User: Hemant Saini
 * Date: Tue, 02 Jul 2019 13:32:22 +0000
 */

namespace App\Services;


use App\Api\V1\Exceptions\UserNotFoundException;
use App\User;
use App\Services\Contract\CreateUserContract;
use App\Services\Contract\UpdateUserContract;

/**
 * Class UserService
 * @package App\Services
 */
class UserService
{

    /**
     * @param $userId
     * @return User
     */
    public static function find($userId) {
        $user = User::find($userId);
        if (!$user) {
            throw new UserNotFoundException();
        }
        return $user;
    }

    /**
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index() {
        return User::all();
    }

    /**
     * @param $userId
     * @return User
     */
    public function show($userId) {
        return self::find($userId);
    }

    /**
     * @param CreateUserContract $contract
     * @return User
     */
    public function store(CreateUserContract $contract) {
        $user = new User();
                $user->first_name = $contract->getFirstName();
        $user->last_name = $contract->getLastName();
        $user->age = $contract->getAge();

        $user->save();
        return $user;
    }

    /**
     * @param $userId
     * @param UpdateUserContract $contract
     * @return User
     */
    public function update($userId, UpdateUserContract $contract) {
        $user = self::find($userId);
                if ($contract->hasFirstName()) {
            $user->first_name = $contract->getFirstName();
        }
        if ($contract->hasLastName()) {
            $user->last_name = $contract->getLastName();
        }
        if ($contract->hasAge()) {
            $user->age = $contract->getAge();
        }

        $user->save();
        return $user;
    }

    /**
     * @param $userId
     */
    public function delete($userId) {
        $user = $this->find($userId);
        try {
            $user->delete();
        } catch (\Exception $e) {
        }
    }
}
