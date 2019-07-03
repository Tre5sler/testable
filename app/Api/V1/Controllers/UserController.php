<?php
/**
 * Created by: Hemant Saini
 * Date: Wed, 03 Jul 2019 09:26:44 +0000
 */


namespace App\Api\V1\Controllers;


use App\Transformers\UserTransformer;
use App\Api\V1\Requests\CreateUserRequest;
use App\Api\V1\Requests\UpdateUserRequest;
use App\Services\UserService;
use Devslane\Generator\Controllers\BaseController;

/**
 * Class UserController
 * @package App\Api\V1\Controllers
 *
 * @property-read UserService $userService
 */
class UserController extends BaseController
{
    protected $userService;

    public function __construct() {
        $this->userService = new UserService();
    }
    
    
    /**
     * @param UserService $service
     * @return \Dingo\Api\Http\Response
     */
    public function index(UserService $service) {
        $users = $service->index();
        return $this->response->collection($users, new UserTransformer());
    }

    /**
     * @param $id
     * @param UserService $service
     * @return \Dingo\Api\Http\Response
     */
    public function show($id, UserService $service) {
        $user = $service->show($id);
        return $this->response->item($user, new UserTransformer());
    }

    /**
     * @param CreateUserRequest $request
     * @param UserService $service
     * @return \Dingo\Api\Http\Response
     */
    public function store(CreateUserRequest $request, UserService $service) {
        $user = $service->store($request);
        return $this->response->item($user, new UserTransformer());
    }

    /**
     * @param UpdateUserRequest $request
     * @param $id
     * @param UserService $service
     * @return \Dingo\Api\Http\Response
     */
    public function update(UpdateUserRequest $request, $id, UserService $service) {
        $user = $service->update($id, $request);
        return $this->response->item($user, new UserTransformer());
    }
    
    /**
     * @param $id
     * @param UserService $service
     */
    public function destroy($id, UserService $service) {
        $service->delete($id);
    }
}
