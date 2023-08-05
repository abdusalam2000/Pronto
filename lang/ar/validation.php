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

    'accepted' => 'يجب قبول حقل :attribute.',
    'accepted_if' => 'يجب قبول حقل :attribute عندما يكون :other هو :value.',
    'active_url' => 'يجب أن يكون حقل :attribute عنوان URL صحيحًا.',
    'after' => 'يجب أن يكون حقل :attribute تاريخًا بعد :date.',
    'after_or_equal' => 'يجب أن يكون حقل :attribute تاريخًا بعد أو يساوي :date.',
    'alpha' => 'يجب أن يحتوي حقل :attribute على أحرف فقط.',
    'alpha_dash' => 'يجب أن يحتوي حقل :attribute على أحرف وأرقام وشرطات وشرطات سفلية فقط.',
    'alpha_num' => 'يجب أن يحتوي حقل :attribute على أحرف وأرقام فقط.',
    'array' => 'يجب أن يكون حقل :attribute مصفوفة.',
    'ascii' => 'يجب أن يحتوي حقل :attribute على أحرف ASCII ذات بايت واحد ورموز فقط.',
    'before' => 'يجب أن يكون حقل :attribute تاريخًا قبل :date.',
    'before_or_equal' => 'يجب أن يكون حقل :attribute تاريخًا قبل أو يساوي :date.',
    'between' => [
    'array' => 'يجب أن يحتوي حقل :attribute على بين :min و :max عنصرًا.',
    'file' => 'يجب أن يكون حجم حقل :attribute بين :min و :max كيلوبايت.',
    'numeric' => 'يجب أن يكون حقل :attribute بين :min و :max.',
    'string' => 'يجب أن يكون طول حقل :attribute بين :min و :max حرفًا.',
    ],
    'boolean' => 'يجب أن يكون حقل :attribute إما صحيحًا أو خاطئًا.',
    'can' => 'يحتوي حقل :attribute على قيمة غير مصرح بها.',
    'confirmed' => 'لم يتطابق تأكيد حقل :attribute.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'يجب أن يكون حقل :attribute تاريخًا صحيحًا.',
    'date_equals' => 'يجب أن يكون حقل :attribute تاريخًا يساوي :date.',
    'date_format' => 'لا يتطابق حقل :attribute مع الشكل :format.',
    'decimal' => 'يجب أن يكون حقل :attribute يحتوي على :decimal أماكن عشرية.',
    'declined' => 'يجب رفض حقل :attribute.',
    'declined_if' => 'يجب رفض حقل :attribute عندما يكون :other هو :value.',
    'different' => 'يجب أن يكون حقل :attribute مختلفًا عن :other.',
    'digits' => 'يجب أن يحتوي حقل :attribute على :digits أرقام.',
    'digits_between' => 'يجب أن يحتوي حقل :attribute على عدد من الأرقام بين :min و :max.',
    'dimensions' => 'يحتوي حقل :attribute على أبعاد صورة غير صحيحة.',
    'distinct' => 'يحتوي حقل :attribute على قيمة مكررة.',
    'email' => 'يجب أن يكون حقل :attribute عنوان بريد إلكتروني صحيحًا.',
    'ends_with' => 'يجب أن ينتهي حقل :attribute بأحد القيم التالية: :values',
    'exists' => 'القيمة المحددة في حقل :attribute غير موجودة.',
    'file' => 'يجب أن يكون حقل :attribute ملفًا.',
    'filled' => 'يجب أن يحتوي حقل :attribute على قيمة.',
    'gt' => [
    'array' => 'يجب أن يحتوي حقل :attribute على أكثر من :value عنصرًا.',
    'file' => 'يجب أن يكون حجم حقل :attribute أكبر من :value كيلوبايت.',
    'numeric' => 'يجب أن يكون حقل :attribute أكبر من :value.',
    'string' => 'يجب أن يحتوي حقل :attribute على أكثر من :value حرفًا.',
    ],
    'gte' => [
    'array' => 'يجب أن يحتوي حقل :attribute على :value عنصرًا أو أكثر.',
    'file' => 'يجب أن يكون حجم حقل :attribute أكبر من أو يساوي :value كيلوبايت.',
    'numeric' => 'يجب أن يكون حقل :attribute أكبر من أو يساوي :value.',
    'string' => 'يجب أن يحتوي حقل :attribute على :value حرفًا أو أكثر.',
    ],
    'image' => 'يجب أن يكون حقل :attribute صورة.',
    'in' => 'القيمة المحددة في حقل :attribute غير صحيحة.',
    'in_array' => 'قيمة حقل :attribute غير موجودة في :other.',
    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون حقل :attribute عنوان IP صحيحًا.',
    'ipv4' => 'يجب أن يكون حقل :attribute عنوان IPv4 صحيحًا.',
    'ipv6' => 'يجب أن يكون حقل :attribute عنوان IPv6 صحيحًا.',
    'json' => 'يجب أن يكون حقل :attribute نص JSON صحيحًا.',
    'lt' => [
    'array' => 'يجب أن يحتوي حقل :attribute على أقل من :value عنصرًا.',
    'file' => 'يجب أن يكون حجم حقل :attribute أصغر من :value كيلوبايت.',
    'numeric' => 'يجب أن يكون حقل :attribute أصغر من :value.',
    'string' => 'يجب أن يحتوي حقل :attribute على أقل من :value حرفًا.',
    ],
    'lte' => [
        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :value عنصر.',
        'file' => 'يجب أن يكون حجم حقل :attribute أقل من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute أقل من أو يساوي :value.',
        'string' => 'يجب أن يكون طول حقل :attribute أقل من أو يساوي :value حرفًا.',
        ],
        'mac_address' => 'يجب أن يكون حقل :attribute عنوان MAC صالح.',
        'max' => [
        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عنصر.',
        'file' => 'يجب أن لا يكون حجم حقل :attribute أكبر من :max كيلوبايت.',
        'numeric' => 'يجب أن لا يكون حقل :attribute أكبر من :max.',
        'string' => 'يجب أن لا يكون طول حقل :attribute أكبر من :max حرفًا.',
        ],
        'max_digits' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max أرقام.',
        'mimes' => 'يجب أن يكون حقل :attribute ملفًا من النوع: :values.',
        'mimetypes' => 'يجب أن يكون حقل :attribute ملفًا من النوع: :values.',
        'min' => [
        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عنصرًا.',
        'file' => 'يجب أن يكون حجم حقل :attribute على الأقل :min كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute على الأقل :min.',
        'string' => 'يجب أن يكون طول حقل :attribute على الأقل :min حرفًا.',
        ],
        'min_digits' => 'يجب أن يحتوي حقل :attribute على الأقل على :min رقمًا.',
        'missing' => 'يجب أن يكون حقل :attribute مفقودًا.',
        'missing_if' => 'يجب أن يكون حقل :attribute مفقودًا عندما يكون :other هو :value.',
        'missing_unless' => 'يجب أن يكون حقل :attribute مفقودًا ما لم يكن :other هو :value.',
        'missing_with' => 'يجب أن يكون حقل :attribute مفقودًا عندما يكون :values موجودًا.',
        'missing_with_all' => 'يجب أن يكون حقل :attribute مفقودًا عندما يكون :values موجودًا.',
        'multiple_of' => 'يجب أن يكون حقل :attribute مضاعفًا لـ :value.',
        'not_in' => 'الـ :attribute المحدد غير صالح.',
        'not_regex' => 'تنسيق حقل :attribute غير صالح.',
        'numeric' => 'يجب أن يكون حقل :attribute رقمًا.',
        'password' => [
        'letters' => 'يجب أن يحتوي حقل :attribute على حرف واحدعلى الأقل.',
        'mixed' => 'يجب أن يحتوي حقل :attribute على حرف واحد على الأقل من الأحرف الكبيرة والصغيرة.',
        'numbers' => 'يجب أن يحتوي حقل :attribute على رقم واحد على الأقل.',
        'symbols' => 'يجب أن يحتوي حقل :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'تم العثور على الـ :attribute المعطى في تسرب البيانات. يرجى اختيار :attribute مختلف.',
        ],
        'present' => 'يجب أن يكون حقل :attribute موجودًا.',
        'prohibited' => 'حقل :attribute ممنوع.',
        'prohibited_if' => 'حقل :attribute ممنوع عندما يكون :other هو :value.',
        'prohibited_unless' => 'حقل :attribute ممنوع ما لم يكن :other في :values.',
        'prohibits' => 'حقل :attribute يمنع وجود :other.',
        'regex' => 'تنسيق حقل :attribute غير صالح.',
        'required' => 'يجب توفير حقل :attribute.',
        'required_array_keys' => 'يجب أن يحتوي حقل :attribute على مدخلات لـ :values.',
        'required_if' => 'يجب توفير حقل :attribute عندما يكون :other هو :value.',
        'required_if_accepted' => 'يجب توفير حقل :attribute عندما يتم قبول :other.',
        'required_unless' => 'يجب توفير حقل :attribute ما لم يكن :other في :values.',
        'required_with' => 'يجب توفير حقل :attribute عندما يكون :values موجودًا.',
        'required_with_all' => 'يجب توفير حقل :attribute عندما تكون القيم :values موجودة.',
        'required_without' => 'يجب توفير حقل :attribute عندما لا تكون القيم :values موجودة.',
        'required_without_all' => 'يجب توفير حقل :attribute عندما لا تكون أي من القيم :values موجودة.',
        'same' => 'يجب أن يتطابق حقل :attribute مع :other.',
        'size' => [
        'array' => 'يجب أن يحتوي حقل :attribute على :size عنصرًا.',
        'file' => 'يجب أن يكون حجم حقل :attribute :size كيلوبايت.',
        'numeric' => 'يجب أن يكون حقل :attribute :size.',
        'string' => 'يجب أن يكون طول حقل :attribute :size حرفًا.',
        ],
        'starts_with' => 'يجب أن يبدأ حقل :attribute بواحد من القيم التالية: :values.',
        'string' => 'يجب أن يكون حقل :attribute سلسلة نصية.',
        'timezone' => 'يجب أن يكون حقل :attribute منطقة زمنية صالحة.',
        'unique' => 'تم اختيار :attribute مسبقًا.',
        'uploaded' => 'فشل تحميل حقل :attribute.',
        'uppercase' => 'يجب أن يكون حقل :attribute حروف كبيرة فقط.',
        'url' => 'يجب أن يكون حقل :attribute عن',
    'ulid' => 'يجب أن يكون حقل :attribute قيمة ULID صالحة.',
    'uuid' => 'يجب أن يكون حقل :attribute قيمة UUID صالحة.',

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
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
