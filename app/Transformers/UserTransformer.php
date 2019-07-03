<?php
/**
 * User: Hemant Saini
 * Date: Wed, 03 Jul 2019 09:35:50 +0000
 */

namespace App\Transformers;


use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{

    public function transform(User $user){
        return [
			'id' => $user->id,
			'first_name' => $user->first_name,
			'last_name' => $user->last_name,
			'age' => (int)$user->age,
			'created_at' => $user->created_at,
			'updated_at' => $user->updated_at,
		];
    }
}
