<?php

declare(strict_types=1);

return [
    'accepted'             => 'Поље :attribute мора бити прихваћено.',
    'accepted_if'          => ':Attribute се мора прихватити када је :other :value.',
    'active_url'           => 'Поље :attribute није валидан УРЛ.',
    'after'                => 'Поље :attribute мора бити датум после :date.',
    'after_or_equal'       => 'Поље :attribute мора да буде :date или каснији датум.',
    'alpha'                => 'Поље :attribute може садржати само слова.',
    'alpha_dash'           => 'Поље :attribute може садржати само слова, бројеве и повлаке.',
    'alpha_num'            => 'Поље :attribute може садржати само слова и бројеве.',
    'array'                => 'Поље :attribute мора садржати неких низ ставки.',
    'ascii'                => ':Attribute мора да садржи само једнобајтне алфанумеричке знакове и симболе.',
    'before'               => 'Поље :attribute мора бити датум пре :date.',
    'before_or_equal'      => ':Attribute мора да буде :date или ранији датум.',
    'between'              => [
        'array'   => 'Поље :attribute мора бити између :min - :max ставки.',
        'file'    => 'Фајл :attribute мора бити између :min - :max килобајта.',
        'numeric' => 'Поље :attribute мора бити између :min - :max.',
        'string'  => 'Поље :attribute мора бити између :min - :max карактера.',
    ],
    'boolean'              => 'Поље :attribute мора бити тачно или нетачно',
    'can'                  => 'Поље :attribute садржи неовлашћену вредност.',
    'confirmed'            => 'Потврда поља :attribute се не поклапа.',
    'contains'             => 'The :attribute field is missing a required value.',
    'current_password'     => 'Лозинка је нетачна.',
    'date'                 => 'Поље :attribute није важећи датум.',
    'date_equals'          => 'Поље :attribute мора да буде датум: :date.',
    'date_format'          => 'Поље :attribute не одговора према формату :format.',
    'decimal'              => ':Attribute мора имати :decimal децималних места.',
    'declined'             => ':Attribute се мора одбити.',
    'declined_if'          => ':Attribute се мора одбити када је :other :value.',
    'different'            => 'Поља :attribute и :other морају бити различита.',
    'digits'               => 'Поље :attribute мора садржати :digits шифри.',
    'digits_between'       => 'Поље :attribute мора бити иземђу :min и :max шифри.',
    'dimensions'           => 'Поље :attribute име недозвољене димензије слике.',
    'distinct'             => 'Поље :attribute има дуплирану вредност.',
    'doesnt_end_with'      => ':Attribute се не може завршити са једним од следећих: :values.',
    'doesnt_start_with'    => ':Attribute можда не почиње са једним од следећих: :values.',
    'email'                => 'Формат поља :attribute није валидан.',
    'ends_with'            => 'Поље :attribute мора да се заврши са нечим од следећег: :values.',
    'enum'                 => 'Изабраних :attribute је неважећих.',
    'exists'               => 'Одабрано поље :attribute није валидно.',
    'extensions'           => 'Поље :attribute мора имати једну од следећих екстензија: :values.',
    'file'                 => ':Attribute мора да буде датотека.',
    'filled'               => 'Поље :attribute је обавезно.',
    'gt'                   => [
        'array'   => 'Поље :attribute мора да садржи више од :value ставке.',
        'file'    => 'Поље :attribute мора да буде већи од :value килобајта.',
        'numeric' => 'Поље :attribute мора да буде већи од :value.',
        'string'  => 'Поље :attribute мора да садржи више од :value знакова.',
    ],
    'gte'                  => [
        'array'   => 'Поље :attribute мора да садржи :value ставки или више.',
        'file'    => 'Поље :attribute мора да има :value или више килобајта.',
        'numeric' => 'Поље :attribute мора да буде :value или већи.',
        'string'  => 'Поље :attribute мора да садржи :value или више знакова.',
    ],
    'hex_color'            => 'Поље :attribute мора бити важећа хексадецимална боја.',
    'image'                => 'Поље :attribute мора бити слика.',
    'in'                   => 'Поље Одабрано поље :attribute није валидно.',
    'in_array'             => 'Поље :attribute не постоји у :other.',
    'integer'              => 'Поље :attribute мора бити број.',
    'ip'                   => 'Поље :attribute мора бити валидна ИП адреса.',
    'ipv4'                 => 'Поље :attribute мора да буде важећа ИПв4 адреса.',
    'ipv6'                 => 'Поље :attribute мора да буде важећа ИПв6 адреса.',
    'json'                 => 'Поље :attribute мора да буде важећа ЈСОН формат.',
    'list'                 => 'Поље :attribute мора бити листа.',
    'lowercase'            => ':Attribute мора бити малим словима.',
    'lt'                   => [
        'array'   => 'Поље :attribute мора да садржи мање од :value ставки.',
        'file'    => 'Поље :attribute мора да буде мањи од :value килобајта.',
        'numeric' => 'Поље :attribute мора да буде мањи од :value.',
        'string'  => 'Поље :attribute мора да садржи мање од :value знакова.',
    ],
    'lte'                  => [
        'array'   => 'Поље :attribute не сме да садржи више од :value ставки.',
        'file'    => 'Поље :attribute мора да буде :value или мањи.',
        'numeric' => 'Поље :attribute мора да буде :value или мањи.',
        'string'  => 'Поље :attribute мора да садржи :value или мање знакова.',
    ],
    'mac_address'          => ':Attribute мора бити важећа МАЦ адреса.',
    'max'                  => [
        'array'   => 'Поље :attribute не смије да имаге више од :max ставки.',
        'file'    => 'Поље :attribute мора бити мање од :max килобајта.',
        'numeric' => 'Поље :attribute мора бити мање од :max.',
        'string'  => 'Поље :attribute мора садржати мање од :max карактера.',
    ],
    'max_digits'           => ':Attribute не сме имати више од :max цифара.',
    'mimes'                => 'Поље :attribute мора бити фајл типа: :values.',
    'mimetypes'            => 'Поље :attribute мора бити фајл типа: :values.',
    'min'                  => [
        'array'   => 'Поље :attribute мора садрзати најмање :min ставку.',
        'file'    => 'Фајл :attribute мора бити најмање :min килобајта.',
        'numeric' => 'Поље :attribute мора бити најмање :min.',
        'string'  => 'Поље :attribute мора садржати најмање :min карактера.',
    ],
    'min_digits'           => ':Attribute мора имати најмање :min цифара.',
    'missing'              => 'Мора да недостаје поље :attribute.',
    'missing_if'           => 'Поље :attribute мора недостајати када је :other :value.',
    'missing_unless'       => 'Поље :attribute мора да недостаје осим ако :other није :value.',
    'missing_with'         => 'Поље :attribute мора недостајати када је присутно :values.',
    'missing_with_all'     => 'Поље :attribute мора недостајати када је присутно :values.',
    'multiple_of'          => 'Број :attribute треба да буде вишеструки од :value',
    'not_in'               => 'Одабрани елемент поља :attribute није валидан.',
    'not_regex'            => 'Формат :attribute је неважећи.',
    'numeric'              => 'Поље :attribute мора бити број.',
    'password'             => [
        'letters'       => ':Attribute мора да садржи најмање једно слово.',
        'mixed'         => ':Attribute мора да садржи најмање једно велико и једно мало слово.',
        'numbers'       => ':Attribute мора да садржи најмање један број.',
        'symbols'       => ':Attribute мора да садржи најмање један симбол.',
        'uncompromised' => 'Датих :attribute појавило се у цурењу података. Молимо изаберите другу :attribute.',
    ],
    'present'              => 'Поље :attribute мора да буде присутно.',
    'present_if'           => 'Поље :attribute мора бити присутно када је :other :value.',
    'present_unless'       => 'Поље :attribute мора бити присутно осим ако :other није :value.',
    'present_with'         => 'Поље :attribute мора бити присутно када је присутно :values.',
    'present_with_all'     => 'Поље :attribute мора бити присутно када је присутно :values.',
    'prohibited'           => 'Поље :attribute је забрањено.',
    'prohibited_if'        => 'Поље :attribute је забрањено када је :other једнако :value.',
    'prohibited_unless'    => 'Поље :attribute је забрањено, осим ако је :other у :values. години.',
    'prohibits'            => 'Поље :attribute забрањује присуство :other.',
    'regex'                => 'Формат поља :attribute није валидан.',
    'required'             => 'Поље :attribute је обавезно.',
    'required_array_keys'  => 'Поље :attribute мора да садржи уносе за: :values.',
    'required_if'          => 'Поље :attribute је потребно када поље :other садржи :value.',
    'required_if_accepted' => 'Поље :attribute је обавезно када се прихвати :other.',
    'required_if_declined' => 'The :attribute field is required when :other is declined.',
    'required_unless'      => 'Поље :attribute је обавезно, осим ако је :other у :values.',
    'required_with'        => 'Поље :attribute је потребно када поље :values је присутан.',
    'required_with_all'    => 'Поље :attribute је обавезно када је :values приказано.',
    'required_without'     => 'Поље :attribute је потребно када поље :values није присутан.',
    'required_without_all' => 'Поље :attribute је потребно када ниједан од следећи поља :values нису присутни.',
    'same'                 => 'Поља :attribute и :other се морају поклапати.',
    'size'                 => [
        'array'   => 'Поље :attribute мора садржати :size ставки.',
        'file'    => 'Фајл :attribute мора бити :size килобајта.',
        'numeric' => 'Поље :attribute мора бити :size.',
        'string'  => 'Поље :attribute мора бити :size карактера.',
    ],
    'starts_with'          => 'Поље :attribute мора да почне са: :values',
    'string'               => 'Поље :attribute мора садржати слова.',
    'timezone'             => 'Поље :attribute мора бити исправна временска зона.',
    'ulid'                 => ':Attribute мора бити важећи УЛИД.',
    'unique'               => 'Поље :attribute већ постоји.',
    'uploaded'             => ':Attribute није отпремљен.',
    'uppercase'            => ':Attribute мора бити великим словима.',
    'url'                  => 'Формат поља :attribute не важи.',
    'uuid'                 => ':Attribute мора да буде важећи УУИД.',
    'attributes'           => [
        'address'                  => 'адреса',
        'affiliate_url'            => 'придружени УРЛ',
        'age'                      => 'године',
        'amount'                   => 'износ',
        'announcement'             => 'саопштење',
        'area'                     => 'области',
        'audience_prize'           => 'награда публике',
        'available'                => 'доступан',
        'birthday'                 => 'рођендан',
        'body'                     => 'тело поруке',
        'city'                     => 'град',
        'compilation'              => 'компилација',
        'concept'                  => 'концепт',
        'conditions'               => 'Услови',
        'content'                  => 'садржаја',
        'country'                  => 'држава',
        'cover'                    => 'поклопац',
        'created_at'               => 'Креирано',
        'creator'                  => 'стваралац',
        'currency'                 => 'валута',
        'current_password'         => 'Тренутна лозинка',
        'customer'                 => 'купац',
        'date'                     => 'датум',
        'date_of_birth'            => 'Датум рођења',
        'dates'                    => 'датуми',
        'day'                      => 'дан',
        'deleted_at'               => 'обрисано на',
        'description'              => 'опис',
        'display_type'             => 'Тип екрана',
        'district'                 => 'округа',
        'duration'                 => 'трајање',
        'email'                    => 'емаил',
        'excerpt'                  => 'извод',
        'filter'                   => 'филтер',
        'finished_at'              => 'завршио у',
        'first_name'               => 'име',
        'gender'                   => 'пол',
        'grand_prize'              => 'Главна награда',
        'group'                    => 'група',
        'hour'                     => 'сат',
        'image'                    => 'слика',
        'image_desktop'            => 'слика радне површине',
        'image_main'               => 'главна слика',
        'image_mobile'             => 'мобилна слика',
        'images'                   => 'слике',
        'is_audience_winner'       => 'је победник публике',
        'is_hidden'                => 'је скривено',
        'is_subscribed'            => 'је претплаћен',
        'is_visible'               => 'је видљиво',
        'is_winner'                => 'је победник',
        'items'                    => 'ставке',
        'key'                      => 'кључ',
        'last_name'                => 'презиме',
        'lesson'                   => 'лекција',
        'line_address_1'           => 'адреса линије 1',
        'line_address_2'           => 'адреса линије 2',
        'login'                    => 'Пријавите се',
        'message'                  => 'порука',
        'middle_name'              => 'средње име',
        'minute'                   => 'минут',
        'mobile'                   => 'мобилни',
        'month'                    => 'месец',
        'name'                     => 'име',
        'national_code'            => 'национални код',
        'number'                   => 'број',
        'password'                 => 'лозинка',
        'password_confirmation'    => 'понови лозинку',
        'phone'                    => 'телефон',
        'photo'                    => 'фото',
        'portfolio'                => 'портфолио',
        'postal_code'              => 'поштански код',
        'preview'                  => 'превиев',
        'price'                    => 'Цена',
        'product_id'               => 'ИД производа',
        'product_uid'              => 'УИД производа',
        'product_uuid'             => 'УУИД производа',
        'promo_code'               => 'промотивни код',
        'province'                 => 'покрајина',
        'quantity'                 => 'количина',
        'reason'                   => 'разлог',
        'recaptcha_response_field' => 'рецаптцха поље за одговор',
        'referee'                  => 'судија',
        'referees'                 => 'судије',
        'reject_reason'            => 'одбацити разум',
        'remember'                 => 'запамтити',
        'restored_at'              => 'рестаурирано на',
        'result_text_under_image'  => 'текст резултата испод слике',
        'role'                     => 'улога',
        'rule'                     => 'владати',
        'rules'                    => 'Правила',
        'second'                   => 'секунда',
        'sex'                      => 'пол',
        'shipment'                 => 'пошиљка',
        'short_text'               => 'кратак текст',
        'size'                     => 'величина',
        'skills'                   => 'вештине',
        'slug'                     => 'пуж',
        'specialization'           => 'специјализација',
        'started_at'               => 'почео у',
        'state'                    => 'стање',
        'status'                   => 'статус',
        'street'                   => 'улица',
        'student'                  => 'ученик',
        'subject'                  => 'наслов',
        'tag'                      => 'таг',
        'tags'                     => 'ознаке',
        'teacher'                  => 'учитељ',
        'terms'                    => 'услови',
        'test_description'         => 'опис теста',
        'test_locale'              => 'тест лоцале',
        'test_name'                => 'назив теста',
        'text'                     => 'текст',
        'time'                     => 'време',
        'title'                    => 'наслов',
        'type'                     => 'тип',
        'updated_at'               => 'ажурирано на',
        'user'                     => 'корисник',
        'username'                 => 'корисничко име',
        'value'                    => 'вредност',
        'year'                     => 'година',
    ],
];
