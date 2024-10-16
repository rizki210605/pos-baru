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

    'accepted' => 'Atribut :harus diterima.',
    'accepted_if' => ':attribute harus diterima ketika :other adalah :value.',
    'active_url' => 'Atribut :bukan URL yang valid.',
    'after' => ':attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => ':attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => 'Atribut :hanya boleh berisi huruf.',
    'alpha_dash' => 'Atribut :hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => 'Atribut :hanya boleh berisi huruf dan angka.',
    'array' => 'Atribut :harus berupa array.',
    'ascii' => 'Atribut :hanya boleh berisi karakter alfanumerik dan simbol satu-byte.',
    'before' => ':attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => ':attribute harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => ':attribute harus memiliki antara :min dan :max item.',
        'file' => 'Atribut :harus berada di antara kilobyte :min dan :max.',
        'numeric' => ':atribut harus antara :min dan :max.',
        'string' => 'Atribut :harus berada di antara karakter :min dan :max.',
    ],
    'boolean' => 'Kolom :attribute harus benar atau salah.',
    'confirmed' => 'Konfirmasi :atribut tidak cocok.',
    'current_password' => 'Kata sandinya salah.',
    'date' => 'Atribut :bukan tanggal yang valid.',
    'date_equals' => ':attribute harus berupa tanggal yang sama dengan :date.',
    'date_format' => ':atribut tidak cocok dengan format :format.',
    'decimal' => ':attribute harus memiliki :tempat desimal desimal.',
    'declined' => 'Atribut :harus ditolak.',
    'declined_if' => ':attribute harus ditolak ketika :other adalah :value.',
    'different' => ':attribute dan :other harus berbeda.',
    'digits' => ':attribute harus berupa :digits digit.',
    'digits_between' => 'Atribut :harus berada di antara digit :min dan :max.',
    'dimensions' => 'Atribut : memiliki dimensi gambar yang tidak valid.',
    'distinct' => 'Bidang :attribute memiliki nilai duplikat.',
    'doesnt_end_with' => ':attribute tidak boleh diakhiri dengan salah satu dari berikut ini: :values.',
    'doesnt_start_with' => ':attribute tidak boleh dimulai dengan salah satu dari berikut ini: :values.',
    'email' => 'Atribut :harus berupa alamat email yang valid.',
    'ends_with' => ':attribute harus diakhiri dengan salah satu berikut: :values.',
    'enum' => 'Atribut yang dipilih tidak valid.',
    'exists' => 'Atribut yang dipilih tidak valid.',
    'file' => 'Atribut :harus berupa berkas.',
    'filled' => 'Bidang :attribute harus memiliki nilai.',
    'gt' => [
        'array' => ':attribute harus memiliki lebih dari item :value.',
        'file' => ':attribute harus lebih besar dari :value kilobyte.',
        'numeric' => ':atribut harus lebih besar dari :nilai.',
        'string' => ':attribute harus lebih besar dari karakter :value.',
    ],
    'gte' => [
        'array' => ':attribute harus memiliki :value item atau lebih.',
        'file' => ':attribute harus lebih besar atau sama dengan :value kilobyte.',
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'string' => ':attribute harus lebih besar atau sama dengan karakter :value.',
    ],
    'image' => 'Atribut :harus berupa gambar.',
    'in' => 'Atribut yang dipilih tidak valid.',
    'in_array' => 'Kolom :attribute tidak ada di :other.',
    'integer' => 'Atribut :harus berupa bilangan bulat.',
    'ip' => 'Atribut :harus berupa alamat IP yang valid.',
    'ipv4' => 'Atribut :harus berupa alamat IPv4 yang valid.',
    'ipv6' => 'Atribut :harus berupa alamat IPv6 yang valid.',
    'json' => ':attribute harus berupa string JSON yang valid.',
    'lowercase' => 'Atribut :harus huruf kecil.',
    'lt' => [
        'array' => ':attribute harus memiliki item yang kurang dari :nilai.',
        'file' => ':attribute harus kurang dari :nilai kilobyte.',
        'numeric' => ':atribut harus lebih kecil dari :nilai.',
        'string' => ':attribute harus kurang dari karakter :nilai.',
    ],
    'lte' => [
        'array' => ':attribute tidak boleh memiliki lebih dari item :nilai.',
        'file' => ':atribut harus kurang dari atau sama dengan :nilai kilobyte.',
        'numeric' => ':atribut harus kurang dari atau sama dengan :nilai.',
        'string' => ':attribute harus kurang dari atau sama dengan karakter :nilai.',
    ],
    'mac_address' => 'Atribut :harus berupa alamat MAC yang valid.',
    'max' => [
        'array' => ':atribut tidak boleh memiliki lebih dari :max item.',
        'file' => ':atribut tidak boleh lebih besar dari :kilogram maksimum.',
        'numeric' => ':attribute tidak boleh lebih besar dari :max.',
        'string' => ':atribut tidak boleh lebih besar dari :karakter maksimum.',
    ],
    'max_digits' => 'The :attribute must not have more than :max digits.',
    'mimes' => ':attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => ':attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'array' => ':atribut harus memiliki sedikitnya :min item.',
        'file' => ':atribut harus minimal :min kilobyte.',
        'numeric' => ':atribut minimal harus :min.',
        'string' => 'Atribut :harus terdiri dari sedikitnya :min karakter.',
    ],
    'min_digits' => ':atribut harus memiliki setidaknya :min digit.',
    'multiple_of' => ':atribut harus kelipatan :nilai.',
    'not_in' => 'Atribut yang dipilih tidak valid.',
    'not_regex' => 'Format :atribut tidak valid.',
    'numeric' => 'Atribut :harus berupa angka.',
    'password' => [
        'letters' => 'Atribut :harus mengandung setidaknya satu huruf.',
        'mixed' => 'Atribut :harus mengandung setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers' => 'Atribut :harus berisi setidaknya satu angka.',
        'symbols' => 'Atribut :harus mengandung setidaknya satu simbol.',
        'uncompromised' => 'Atribut yang diberikan telah muncul dalam kebocoran data. Harap pilih atribut yang lain.',
    ],
    'present' => 'Kolom :attribute harus ada.',
    'prohibited' => 'Kolom :attribute dilarang.',
    'prohibited_if' => 'Kolom :attribute dilarang saat :other adalah :value.',
    'prohibited_unless' => 'Kolom :attribute dilarang kecuali :other ada di dalam :values.',
    'prohibits' => 'Kolom :attribute melarang :other untuk hadir.',
    'regex' => 'Format :atribut tidak valid.',
    'required' => 'Kolom :attribute wajib diisi.',
    'required_array_keys' => 'Bidang :attribute harus berisi entri untuk: :values.',
    'required_if' => 'Kolom :attribute diperlukan saat :other adalah :value.',
    'required_if_accepted' => 'Kolom :attribute diperlukan jika :other diterima.',
    'required_unless' => 'Kolom :attribute diperlukan kecuali :other ada di dalam :values.',
    'required_with' => 'Kolom :attribute diperlukan saat :values ​​ada.',
    'required_with_all' => 'Kolom :attribute diperlukan apabila :values ​​ada.',
    'required_without' => 'Kolom :attribute diperlukan jika :values ​​tidak ada.',
    'required_without_all' => 'Kolom :attribute diperlukan apabila tidak ada satu pun :value yang ada.',
    'same' => ':attribute dan :other harus cocok.',
    'size' => [
        'array' => ':attribute harus berisi item :size.',
        'file' => ':attribute harus berukuran :kilogram kilobyte.',
        'numeric' => ':attribute harus berupa :size.',
        'string' => ':attribute harus berupa karakter :size.',
    ],
    'starts_with' => ':attribute harus dimulai dengan salah satu berikut: :values.',
    'string' => 'Atribut :harus berupa string.',
    'timezone' => 'Atribut :harus berupa zona waktu yang valid.',
    'unique' => ':atribut telah diambil.',
    'uploaded' => ':Atribut gagal diunggah.',
    'uppercase' => 'Atribut :harus huruf besar.',
    'url' => 'Atribut :harus berupa URL yang valid.',
    'ulid' => ':attribute harus berupa ULID yang valid.',
    'uuid' => 'Atribut :harus berupa UUID yang valid.',

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
            'rule-name' => 'pesan khusus',
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

    'custom-messages' => [
        'quantity_not_available' => 'Kuantitas :qty :unit tersedia',
        'this_field_is_required' => 'Bidang ini wajib diisi',
    ],

];
