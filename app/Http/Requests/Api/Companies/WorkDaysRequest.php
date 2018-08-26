<?php

namespace App\Http\Requests\Api\Companies;

use App\Http\Requests\Api\AbstractRequest;

use Illuminate\Validation\Rule;

class WorkDaysRequest extends AbstractRequest
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
            $rules = [
                'day'=>['required', 'string', 'in:saturday,sunday,monday,tuesday,wednesday,thursday,friday'],
                'from' => 'required|string',
                'to'=>'required|string',
                'shift'=>'required|string|in:night,morning',
            ];
            if($this->isMethod('post')){

                $rules['day'][] = Rule::unique('workdays')->where(function ($query) {
                    return $query->where('company_id',auth()->user()->id);
                });
            }

            return $rules;
    }
    public function requestAttributes()
    {
        return [
            'day',
            'from',
            'to',
            'shift'
        ];
    }
}
