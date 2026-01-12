<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'يجب قبول :attribute.',
    'active_url'           => ':attribute ليس عنوان URL صالحًا.',
    'after'                => 'يجب أن تكون :attribute تاريخًا بعد :date.',
    'alpha'                => 'يجب أن تحتوي :attribute على حروفٍ فقط.',
    'alpha_dash'           => 'يجب أن تحتوي :attribute على حروفٍ وأرقامٍ وشرطات فقط.',
    'alpha_num'            => 'يجب أن تحتوي :attribute على حروفٍ وأرقامٍ فقط.',
    'array'                => 'يجب أن تكون :attribute مصفوفة.',
    'before'               => 'يجب أن تكون :attribute تاريخًا قبل :date.',
    'between'              => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file'    => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'string'  => 'يجب أن يكون طول :attribute بين :min و :max حرفًا.',
        'array'   => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max.',
    ],
    'boolean'              => 'يجب أن تكون قيمة :attribute، صحيحة أو خاطئة.',
    'confirmed'            => 'تأكيد :attribute غير متطابق.',
    'date'                 => ':attribute ليس تاريخًا صحيحًا.',
    'date_format'          => 'لا يطابق :attribute التنسيق :format.',
    'different'            => 'يجب أن يكون :attribute و :other مختلفين.',
    'digits'               => 'يجب أن يحتوي :attribute على :digits أرقام.',
    'digits_between'       => 'يجب أن يحتوي :attribute بين :min و :max أرقام.',
    'dimensions'           => 'أبعاد صورة :attribute غير صالحة.',
    'distinct'             => 'حقل :attribute يحتوي على قيمة مكررة.',
    'email'                => 'يجب أن يكون :attribute عنوان بريد إلكتروني صالحًا.',
    'exists'               => 'قيمة :attribute غير موجودة.',
    'file'                 => ':attribute يجب أن يكون ملفًا.',
    'filled'               => 'حقل :attribute إجباري.',
    'image'                => 'يجب أن يكون :attribute صورة.',
    'in'                   => 'قيمة :attribute غير صحيحة.',
    'in_array'             => 'حقل :attribute غير موجود في :other.',
    'integer'              => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip'                   => 'يجب أن يكون :attribute عنوان IP صالحًا.',
    'json'                 => 'يجب أن يكون :attribute نص JSON صالحًا.',
    'max'                  => [
        'numeric' => 'يجب ألا تكون قيمة :attribute أكبر من :max.',
        'file'    => 'يجب ألا يزيد حجم الملف :attribute عن :max كيلوبايت.',
        'string'  => 'يجب ألا يزيد طول :attribute عن :max حرفًا.',
        'array'   => 'يجب ألا يحتوي :attribute على أكثر من :max عنصر.',
    ],
    'mimes'                => 'يجب أن يكون ملف :attribute من نوع: :values.',
    'min'                  => [
        'numeric' => 'يجب أن تكون قيمة :attribute على الأقل :min.',
        'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت.',
        'string'  => 'يجب أن يكون طول :attribute على الأقل :min حرفًا.',
        'array'   => 'يجب أن يحتوي :attribute على الأقل على :min عنصر.',
    ],
    'not_in'               => 'قيمة :attribute غير صحيحة.',
    'numeric'              => 'يجب أن يكون :attribute رقمًا.',
    'present'              => 'يجب تقديم حقل :attribute.',
    'regex'                => 'صيغة :attribute غير صحيحة.',
    'required'             => 'حقل :attribute مطلوب.',
    'required_if'          => 'حقل :attribute مطلوب عندما تكون قيمة :other تساوي :value.',
    'required_unless'      => 'حقل :attribute مطلوب ما لم يكن :other ضمن :values.',
    'required_with'        => 'حقل :attribute مطلوب عندما يتواجد :values.',
    'required_with_all'    => 'حقل :attribute مطلوب عندما تتواجد :values.',
    'required_without'     => 'حقل :attribute مطلوب عندما لا يتواجد :values.',
    'required_without_all' => 'حقل :attribute مطلوب عندما لا يتواجد أي من :values.',
    'same'                 => 'يجب أن يتطابق :attribute مع :other.',
    'size'                 => [
        'numeric' => 'يجب أن تكون قيمة :attribute :size.',
        'file'    => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت.',
        'string'  => 'يجب أن يكون طول :attribute :size حرفًا.',
        'array'   => 'يجب أن يحتوي :attribute على :size عنصر.',
    ],
    'string'               => 'يجب أن يكون :attribute نصًا.',
    'timezone'             => 'يجب أن يكون :attribute نطاقًا زمنيًا صالحًا.',
    'unique'               => 'قيمة :attribute مُستخدمة بالفعل.',
    'uploaded'             => 'فشل في رفع :attribute.',
    'url'                  => 'صيغة :attribute غير صحيحة.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        
        'ISBN' => [
            'required' => 'حقل ISBN مطلوب',
            'size' => 'يجب أن يحتوي ISBN على :size حرفًا',
            'unique' => 'هذا الـ ISBN مستخدم بالفعل',
        ],
        'title' => [
            'required' => 'حقل العنوان مطلوب',
            'max' => 'العنوان لا يجب أن يتجاوز :max حرفًا',
        ],
        'price' => [
            'numeric' => 'حقل السعر يجب أن يكون رقمًا',
            'min' => 'حقل السعر يجب أن يكون على الأقل :min',
            'max' => 'حقل السعر يجب ألا يتجاوز :max',
        ],
        'mortgage' => [
            'required' => 'حقل التأمين مطلوب',
            'numeric' => 'حقل التأمين يجب أن يكون رقمًا',
            'min' => 'حقل التأمين يجب أن يكون على الأقل :min',
            'max' => 'حقل التأمين يجب ألا يتجاوز :max',
        ],
        'authorship_date' => [
            'date' => 'حقل تاريخ التأليف غير صالح',
        ],
        'category_id' => [
            'required' => 'حقل التصنيف مطلوب',
            'exists' => 'التصنيف المحدد غير موجود',
        ],
        'cover' => [
            'string' => 'حقل الغلاف يجب أن يكون نصًا (مسار/اسم الملف)',
            'max' => 'حقل الغلاف يجب ألا يتجاوز :max حرفًا',
        ],
        'image' => [
            'image' => 'يجب أن يكون الحقل صورة صالحة',
            'mimes' => 'صيغة الصورة غير مدعومة، استخدم jpeg أو png أو jpg أو gif أو webp',
            'max' => 'حجم الصورة يجب ألا يتجاوز :max كيلوبايت',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name' => 'الاسم',
        'ISBN' => 'الـ ISBN',
        'title' => 'عنوان الكتاب',
        'price' => 'السعر',
        'mortgage' => 'التأمين',
        'authorship_date' => 'تاريخ التأليف',
        'category_id' => 'التصنيف',
        'cover' => 'غلاف الكتاب',
        'image' => 'صورة الصنف',
    ],
   'model_not_found_author' => 'المؤلف غير موجود',

];
