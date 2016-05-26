<?php

namespace App\Modules\Chishiki\Http\Requests\helpdesk;

use App\Modules\Chishiki\Http\Requests\Request;

/**
 * TemplateUdate.
 *
 * @author  Ladybird <info@ladybirdweb.com>
 */
class TemplateUdate extends Request
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

            'ban_status'            => 'required',
            'template_set_to_clone' => 'required',
            'language'              => 'required',
        ];
	}


}
