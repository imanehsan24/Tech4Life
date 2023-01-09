<?php

namespace App\Http\Requests;

use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class BookingStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'booking_number' => ['required'],
            'email' => ['required', 'email'],
            'tel_number' => ['required'],
            'book_time' => ['required','date',new DateBetween,new TimeBetween],
            'courts_id' => ['required'],
        ];
    }
}
