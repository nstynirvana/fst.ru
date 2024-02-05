<?php
global $subdomain;
require_once $_SERVER["DOCUMENT_ROOT"] . '/amo/access.php';

$domain = 'fst-klinker.ru';
$pipeline_id = 4604887;
$user_amo = 1450897;

if (isset($_POST['name-form-circle'])) {
    $name = $_REQUEST['user-name'];
    $phone = $_REQUEST['user-phone'];
    $title = $_REQUEST['name-form-circle'];
    $data = [
        [
            "name" => "Заявка $title",
            "_embedded" => [
                "metadata" => [
                    "category" => "forms",
                    "form_id" => 'applicationFormSend',
                    "form_name" => "form-type-circle",
                    "form_page" => $domain,
                    "form_sent_at" => strtotime(date("Y-m-d H:i:s")),
                ],
                "contacts" => [
                    [
                        "first_name" => $name,
                        "custom_fields_values" => [
                        //   [
                        //         "field_id" => 12358,
                        //         "values" => [
                        //             [
                        //                 "value" => $name
                        //             ]
                        //         ]
                        //     ],
                            [
                                "field_id" => 366003,
                                "values" => [
                                    [
                                        "value" => $phone
                                    ]
                                ]
                            ],
                        ]
                    ]
                ],
            ],
            "status_id" => 42349444,
            "pipeline_id" => $pipeline_id,
            "request_id" => "uns_qweasd"
        ]
    ];   

    echo "success";

    }
    if (isset($_POST['form-type-application'])) {
    $name = $_REQUEST['applicationUserName']; // Тело письма
    $phone = $_REQUEST['applicationUserPhone'];
    $data = [
    [
    "name" => "Заявка",
    "_embedded" => [
    "metadata" => [
    "category" => "forms",
    "form_id" => 'applicationFormSend',
    "form_name" => "form-type-application",
    "form_page" => $domain,
    "form_sent_at" => strtotime(date("Y-m-d H:i:s")),
    ],
    "contacts" => [
    [
    "first_name" => $name,
    "custom_fields_values" => [
    //                            [
    //                                "field_id" => 12358,
    //                                "values" => [
    //                                    [
    //                                        "value" => $name
    //                                    ]
    //                                ]
    //                            ],
    [
    "field_id" => 366003,
    "values" => [
    [
    "value" => $phone
    ]
    ]
    ],
    ]
    ]
    ],
    ],
    "status_id" => 42349444,
    "pipeline_id" => $pipeline_id,
    "request_id" => "uns_qweasd"
    ]
    ];    
    echo "success";
}


if (isset($_POST['form-type-question'])) {
    $name = $_REQUEST['name-lastname'];
    $phone = $_REQUEST['phone'];
    $message = $_REQUEST['message'];

    $data = [
        [
            "name" => "Дополнительные вопросы",

            "_embedded" => [
                "metadata" => [
                    "category" => "forms",
                    "form_id" => 'applicationFormSend',
                    "form_name" => "form-type-question",
                    "form_page" => $domain,
                    "form_sent_at" => strtotime(date("Y-m-d H:i:s")),
                ],
                "contacts" => [
                    [
                        "first_name" => $name,
                        "custom_fields_values" => [
//                            [
//                                "field_id" => 12358,
//                                "values" => [
//                                    [
//                                        "value" => $name
//                                    ]
//                                ]
//                            ],
                            [
                                "field_id" => 366003,
                                "values" => [
                                    [
                                        "value" => $phone
                                    ]
                                ]
                            ],
                            [
                                "field_id" => 366001,
                                "values" => [
                                    [
                                        "value" => $message
                                    ]
                                ]
                            ],
                        ]
                    ]
                ],
            ],
            "status_id" => 42349444,
            "pipeline_id" => $pipeline_id,
            "request_id" => "uns_qweasd"
        ]
    ];   
    echo "success";

}
if (isset($_POST['form-type-price'])) {
    $name = $_REQUEST['user-name'];
    $phone = $_REQUEST['phone-number'];
    $width = $_REQUEST['width'];
    $town = $_REQUEST['town'];
    $data = [
        [
            "name" => "Заявка по расчету точной стоимости объекта",
            "_embedded" => [
                "metadata" => [
                    "category" => "forms",
                    "form_id" => 'applicationFormSend',
                    "form_name" => "form-type-price",
                    "form_page" => $domain,
                    "form_sent_at" => strtotime(date("Y-m-d H:i:s")),
                ],
                "contacts" => [
                    [
                        "first_name" => $name,
                        "phone" => $phone,
                        "custom_fields_values" => [
//                            [
//                                "field_id" => 12358,
//                                "values" => [
//                                    [
//                                        "value" => $name
//                                    ]
//                                ]
//                            ],
                            [
                                "field_id" => 366003,
                                "values" => [
                                    [
                                        "value" => $phone
                                    ]
                                ]
                            ],
                            [
                                "field_id" => 360329,
                                "values" => [
                                    [
                                        "value" => $width
                                    ]
                                ]
                            ],
                            [
                                "field_id" => 360357,
                                "values" => [
                                    [
                                        "value" => $town
                                    ]
                                ]
                            ],
                        ]
                    ]
                ],
            ],
            "status_id" => 42349444,
            "pipeline_id" => $pipeline_id,
            "request_id" => "uns_qweasd"
        ]
    ];
    echo "success";

}

if (isset($_POST['form-type-newsletter'])) {

    $name = $_REQUEST['user-name']; // Тело письма
    $phone = $_REQUEST['user-phone'];

    $data = [
        [
            "name" => "Заявка для подписки на рассылку",
            "_embedded" => [
                "metadata" => [
                    "category" => "forms",
                    "form_id" => 'applicationFormSend',
                    "form_name" => "form-type-newsletter",
                    "form_page" => $domain,
                    "form_sent_at" => strtotime(date("Y-m-d H:i:s")),
                ],
                "contacts" => [
                    [
                        "first_name" => $name,
                        "phone" => $phone,
                        "custom_fields_values" => [
//                                "field_id" => 12358,
//                                "values" => [
//                                    [
//                                        "value" => $name
//                                    ]
//                                ]
//                            ],
                            [
                                "field_id" => 366003,
                                "values" => [
                                    [
                                        "value" => $phone
                                    ]
                                ]
                            ],
                        ]
                    ]
                ],
            ],
            "status_id" => 42349444,
            "pipeline_id" => $pipeline_id,
            "request_id" => "uns_qweasd"
        ]
    ];
    
    echo "success";

}
if (isset($_POST['form-delivery'])) {
    $name = $_REQUEST['user-name']; // Тело письма
    $phone = $_REQUEST['user-phone'];
    $data = [
        [
            "name" => "Заявка для расчета стоимости доставки",
            "_embedded" => [
                "metadata" => [
                    "category" => "forms",
                    "form_id" => 'applicationFormSend',
                    "form_name" => "form-delivery",
                    "form_page" => $domain,
                    "form_sent_at" => strtotime(date("Y-m-d H:i:s")),
                ],
                "contacts" => [
                    [
                        "first_name" => $name,
                        "custom_fields_values" => [
//                            [
//                                "field_id" => 12358,
//                                "values" => [
//                                    [
//                                        "value" => $name
//                                    ]
//                                ]
//                            ],
                            [
                                "field_id" => 366003,
                                "values" => [
                                    [
                                        "value" => $phone
                                    ]
                                ]
                            ],
                        ]
                    ]
                ],
            ],
            "status_id" => 42349444,
            "pipeline_id" => $pipeline_id,
            "request_id" => "uns_qweasd"
        ]
    ];    echo "success";

}

$method = "/api/v4/leads/complex";

$headers = [
    'Content-Type: application/json;  charset=utf-8',
    'Authorization: Bearer ' . $access_token,
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/1.0');
curl_setopt($curl, CURLOPT_URL, "https://$subdomain.amocrm.ru" . $method);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_COOKIEFILE, 'amo/cookie.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, 'amo/cookie.txt');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

$out = curl_exec($curl);

echo "<pre>";
print_r($data);
echo "</pre>";

$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

$code = (int)$code;

$errors = [
    301 => 'Moved permanently.',
    400 => 'Wrong structure of the array of transmitted data, or invalid identifiers of custom fields.',
    401 => 'Not Authorized. There is no account information on the server. You need to make a request to another server on the transmitted IP.',
    403 => 'The account is blocked, for repeatedly exceeding the number of requests per second.',
    404 => 'Not found.',
    500 => 'Internal server error.',
    502 => 'Bad gateway.',
    503 => 'Service unavailable.'
];

if ($code < 200 || $code > 204) die("Error $code. " . (isset($errors[$code]) ? $errors[$code] : 'Undefined error'));

$Response = json_decode($out, true);

$Response = $Response['_embedded']['items'];

$output = 'ID добавленных элементов списков:' . PHP_EOL;

foreach ($Response as $v)
    if (is_array($v))
        $output .= $v['id'] . PHP_EOL;
return $output;

