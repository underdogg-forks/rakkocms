<?php

namespace App\Modules\Chishiki\Http\Requests\helpdesk;

use App\Modules\Chishiki\Http\Requests\Request;

/**
 * TeamUpdate.
 *
 * @author  Ladybird <info@ladybirdweb.com>
 */
class TeamUpdate extends Request
{

	/**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        ];
	}


}
