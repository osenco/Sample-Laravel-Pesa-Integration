<?php

namespace App;

use Jenssegers\Date\Date;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public function getCreatedAtAttribute($date)
    {
        return new Date($date);
    }

    public function getUpdatedAtAttribute($date)
    {
        return new Date($date);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'option','value',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'value' => 'array',
    ];

    public static $countries = [
        "CD" => "Congo-Kinshasa",
        "AF" => "Afghanistan",
        "AX" => "Åland Islands",
        "AL" => "Albania",
        "DZ" => "Algeria",
        "AS" => "American Samoa",
        "AD" => "Andorra",
        "AO" => "Angola",
        "AI" => "Anguilla",
        "AQ" => "Antarctica",
        "AG" => "Antigua and Barbuda",
        "AR" => "Argentina",
        "AM" => "Armenia",
        "AW" => "Aruba",
        "AU" => "Australia",
        "AT" => "Austria",
        "AZ" => "Azerbaijan",
        "BS" => "Bahamas",
        "BH" => "Bahrain",
        "BD" => "Bangladesh",
        "BB" => "Barbados",
        "BY" => "Belarus",
        "BE" => "Belgium",
        "BZ" => "Belize",
        "BJ" => "Benin",
        "BM" => "Bermuda",
        "BT" => "Bhutan",
        "BO" => "Bolivia, Plurinational State of",
        "BQ" => "Bonaire, Sint Eustatius and Saba",
        "BA" => "Bosnia and Herzegovina",
        "BW" => "Botswana",
        "BV" => "Bouvet Island",
        "BR" => "Brazil",
        "IO" => "British Indian Ocean Territory",
        "BN" => "Brunei Darussalam",
        "BG" => "Bulgaria",
        "BF" => "Burkina Faso",
        "BI" => "Burundi",
        "KH" => "Cambodia",
        "CM" => "Cameroon",
        "CA" => "Canada",
        "CV" => "Cape Verde",
        "KY" => "Cayman Islands",
        "CF" => "Central African Republic",
        "TD" => "Chad",
        "CL" => "Chile",
        "CN" => "China",
        "CX" => "Christmas Island",
        "CC" => "Cocos (Keeling) Islands",
        "CO" => "Colombia",
        "KM" => "Comoros",
        "CG" => "Congo",
        "CK" => "Cook Islands",
        "CR" => "Costa Rica",
        "CI" => "Côte d'Ivoire",
        "HR" => "Croatia",
        "CU" => "Cuba",
        "CW" => "Curaçao",
        "CY" => "Cyprus",
        "CZ" => "Czech Republic",
        "DK" => "Denmark",
        "DJ" => "Djibouti",
        "DM" => "Dominica",
        "DO" => "Dominican Republic",
        "EC" => "Ecuador",
        "EG" => "Egypt",
        "SV" => "El Salvador",
        "GQ" => "Equatorial Guinea",
        "ER" => "Eritrea",
        "EE" => "Estonia",
        "ET" => "Ethiopia",
        "FK" => "Falkland Islands (Malvinas)",
        "FO" => "Faroe Islands",
        "FJ" => "Fiji",
        "FI" => "Finland",
        "FR" => "France",
        "GF" => "French Guiana",
        "PF" => "French Polynesia",
        "TF" => "French Southern Territories",
        "GA" => "Gabon",
        "GM" => "Gambia",
        "GE" => "Georgia",
        "DE" => "Germany",
        "GH" => "Ghana",
        "GI" => "Gibraltar",
        "GR" => "Greece",
        "GL" => "Greenland",
        "GD" => "Grenada",
        "GP" => "Guadeloupe",
        "GU" => "Guam",
        "GT" => "Guatemala",
        "GG" => "Guernsey",
        "GN" => "Guinea",
        "GW" => "Guinea-Bissau",
        "GY" => "Guyana",
        "HT" => "Haiti",
        "HM" => "Heard Island and McDonald Islands",
        "VA" => "Holy See (Vatican City State)",
        "HN" => "Honduras",
        "HK" => "Hong Kong",
        "HU" => "Hungary",
        "IS" => "Iceland",
        "IN" => "India",
        "ID" => "Indonesia",
        "IR" => "Iran, Islamic Republic of",
        "IQ" => "Iraq",
        "IE" => "Ireland",
        "IM" => "Isle of Man",
        "IL" => "Israel",
        "IT" => "Italy",
        "JM" => "Jamaica",
        "JP" => "Japan",
        "JE" => "Jersey",
        "JO" => "Jordan",
        "KZ" => "Kazakhstan",
        "KE" => "Kenya",
        "KI" => "Kiribati",
        "KP" => "Korea, Democratic People's Republic of",
        "KR" => "Korea, Republic of",
        "KW" => "Kuwait",
        "KG" => "Kyrgyzstan",
        "LA" => "Lao People's Democratic Republic",
        "LV" => "Latvia",
        "LB" => "Lebanon",
        "LS" => "Lesotho",
        "LR" => "Liberia",
        "LY" => "Libya",
        "LI" => "Liechtenstein",
        "LT" => "Lithuania",
        "LU" => "Luxembourg",
        "MO" => "Macao",
        "MK" => "Macedonia, the former Yugoslav Republic of",
        "MG" => "Madagascar",
        "MW" => "Malawi",
        "MY" => "Malaysia",
        "MV" => "Maldives",
        "ML" => "Mali",
        "MT" => "Malta",
        "MH" => "Marshall Islands",
        "MQ" => "Martinique",
        "MR" => "Mauritania",
        "MU" => "Mauritius",
        "YT" => "Mayotte",
        "MX" => "Mexico",
        "FM" => "Micronesia, Federated States of",
        "MD" => "Moldova, Republic of",
        "MC" => "Monaco",
        "MN" => "Mongolia",
        "ME" => "Montenegro",
        "MS" => "Montserrat",
        "MA" => "Morocco",
        "MZ" => "Mozambique",
        "MM" => "Myanmar",
        "NA" => "Namibia",
        "NR" => "Nauru",
        "NP" => "Nepal",
        "NL" => "Netherlands",
        "NC" => "New Caledonia",
        "NZ" => "New Zealand",
        "NI" => "Nicaragua",
        "NE" => "Niger",
        "NG" => "Nigeria",
        "NU" => "Niue",
        "NF" => "Norfolk Island",
        "MP" => "Northern Mariana Islands",
        "NO" => "Norway",
        "OM" => "Oman",
        "PK" => "Pakistan",
        "PW" => "Palau",
        "PS" => "Palestinian Territory, Occupied",
        "PA" => "Panama",
        "PG" => "Papua New Guinea",
        "PY" => "Paraguay",
        "PE" => "Peru",
        "PH" => "Philippines",
        "PN" => "Pitcairn",
        "PL" => "Poland",
        "PT" => "Portugal",
        "PR" => "Puerto Rico",
        "QA" => "Qatar",
        "RE" => "Réunion",
        "RO" => "Romania",
        "RU" => "Russian Federation",
        "RW" => "Rwanda",
        "BL" => "Saint Barthélemy",
        "SH" => "Saint Helena, Ascension and Tristan da Cunha",
        "KN" => "Saint Kitts and Nevis",
        "LC" => "Saint Lucia",
        "MF" => "Saint Martin (French part)",
        "PM" => "Saint Pierre and Miquelon",
        "VC" => "Saint Vincent and the Grenadines",
        "WS" => "Samoa",
        "SM" => "San Marino",
        "ST" => "Sao Tome and Principe",
        "SA" => "Saudi Arabia",
        "SN" => "Senegal",
        "RS" => "Serbia",
        "SC" => "Seychelles",
        "SL" => "Sierra Leone",
        "SG" => "Singapore",
        "SX" => "Sint Maarten (Dutch part)",
        "SK" => "Slovakia",
        "SI" => "Slovenia",
        "SB" => "Solomon Islands",
        "SO" => "Somalia",
        "ZA" => "South Africa",
        "GS" => "South Georgia and the South Sandwich Islands",
        "SS" => "South Sudan",
        "ES" => "Spain",
        "LK" => "Sri Lanka",
        "SD" => "Sudan",
        "SR" => "Suriname",
        "SJ" => "Svalbard and Jan Mayen",
        "SZ" => "Swaziland",
        "SE" => "Sweden",
        "CH" => "Switzerland",
        "SY" => "Syrian Arab Republic",
        "TW" => "Taiwan, Province of China",
        "TJ" => "Tajikistan",
        "TZ" => "Tanzania, United Republic of",
        "TH" => "Thailand",
        "TL" => "Timor-Leste",
        "TG" => "Togo",
        "TK" => "Tokelau",
        "TO" => "Tonga",
        "TT" => "Trinidad and Tobago",
        "TN" => "Tunisia",
        "TR" => "Turkey",
        "TM" => "Turkmenistan",
        "TC" => "Turks and Caicos Islands",
        "TV" => "Tuvalu",
        "UG" => "Uganda",
        "UA" => "Ukraine",
        "AE" => "United Arab Emirates",
        "GB" => "United Kingdom",
        "US" => "United States",
        "UM" => "United States Minor Outlying Islands",
        "UY" => "Uruguay",
        "UZ" => "Uzbekistan",
        "VU" => "Vanuatu",
        "VE" => "Venezuela, Bolivarian Republic of",
        "VN" => "Viet Nam",
        "VG" => "Virgin Islands, British",
        "VI" => "Virgin Islands, U.S.",
        "WF" => "Wallis and Futuna",
        "EH" => "Western Sahara",
        "YE" => "Yemen",
        "ZM" => "Zambia",
        "ZW" => "Zimbabwe"
    ];

    public static function currencies($country = null){
        $countries = array(
            "AED" => "United Arab Emirates dirham (د.إ AED)",
            "AFN" => "Afghan afghani (؋ AFN)",
            "ALL" => "Albanian lek (L ALL)",
            "AMD" => "Armenian dram (AMD)",
            "ANG" => "Netherlands Antillean guilder (ƒ ANG)",
            "AOA" => "Angolan kwanza (Kz AOA)",
            "ARS" => "Argentine peso ($ ARS)",
            "AUD" => "Australian dollar ($ AUD)",
            "AWG" => "Aruban florin (Afl. AWG)",
            "AZN" => "Azerbaijani manat (AZN)",
            "BAM" => "Bosnia and Herzegovina convertible mark (KM BAM)",
            "BBD" => "Barbadian dollar ($ BBD)",
            "BDT" => "Bangladeshi taka (৳&nbsp; BDT)",
            "BGN" => "Bulgarian lev (лв. BGN)",
            "BHD" => "Bahraini dinar (.د.ب BHD)",
            "BIF" => "Burundian franc (Fr BIF)",
            "BMD" => "Bermudian dollar ($ BMD)",
            "BND" => "Brunei dollar ($ BND)",
            "BOB" => "Bolivian boliviano (Bs. BOB)",
            "BRL" => "Brazilian real (R$ BRL)",
            "BSD" => "Bahamian dollar ($ BSD)",
            "BTC" => "Bitcoin (฿ BTC)",
            "BTN" => "Bhutanese ngultrum (Nu. BTN)",
            "BWP" => "Botswana pula (P BWP)",
            "BYR" => "Belarusian ruble (old) (Br BYR)",
            "BYN" => "Belarusian ruble (Br BYN)",
            "BZD" => "Belize dollar ($ BZD)",
            "CAD" => "Canadian dollar ($ CAD)",
            "CDF" => "Congolese franc (Fr CDF)",
            "CHF" => "Swiss franc (CHF CHF)",
            "CLP" => "Chilean peso ($ CLP)",
            "CNY" => "Chinese yuan (¥ CNY)",
            "COP" => "Colombian peso ($ COP)",
            "CRC" => "Costa Rican colón (₡ CRC)",
            "CUC" => "Cuban convertible peso ($ CUC)",
            "CUP" => "Cuban peso ($ CUP)",
            "CVE" => "Cape Verdean escudo ($ CVE)",
            "CZK" => "Czech koruna (Kč CZK)",
            "DJF" => "Djiboutian franc (Fr DJF)",
            "DKK" => "Danish krone (DKK)",
            "DOP" => "Dominican peso (RD$ DOP)",
            "DZD" => "Algerian dinar (د.ج DZD)",
            "EGP" => "Egyptian pound (EGP)",
            "ERN" => "Eritrean nakfa (Nfk ERN)",
            "ETB" => "Ethiopian birr (Br ETB)",
            "EUR" => "Euro (€ EUR)",
            "FJD" => "Fijian dollar ($ FJD)",
            "FKP" => "Falkland Islands pound (£ FKP)",
            "GBP" => "Pound sterling (£ GBP)",
            "GEL" => "Georgian lari (₾ GEL)",
            "GGP" => "Guernsey pound (£ GGP)",
            "GHS" => "Ghana cedi (₵ GHS)",
            "GIP" => "Gibraltar pound (£ GIP)",
            "GMD" => "Gambian dalasi (D GMD)",
            "GNF" => "Guinean franc (Fr GNF)",
            "GTQ" => "Guatemalan quetzal (Q GTQ)",
            "GYD" => "Guyanese dollar ($ GYD)",
            "HKD" => "Hong Kong dollar ($ HKD)",
            "HNL" => "Honduran lempira (L HNL)",
            "HRK" => "Croatian kuna (kn HRK)",
            "HTG" => "Haitian gourde (G HTG)",
            "HUF" => "Hungarian forint (Ft HUF)",
            "IDR" => "Indonesian rupiah (Rp IDR)",
            "ILS" => "Israeli new shekel (₪ ILS)",
            "IMP" => "Manx pound (£ IMP)",
            "INR" => "Indian rupee (₹ INR)",
            "IQD" => "Iraqi dinar (ع.د IQD)",
            "IRR" => "Iranian rial (﷼ IRR)",
            "IRT" => "Iranian toman (تومان IRT)",
            "ISK" => "Icelandic króna (kr. ISK)",
            "JEP" => "Jersey pound (£ JEP)",
            "JMD" => "Jamaican dollar ($ JMD)",
            "JOD" => "Jordanian dinar (د.ا JOD)",
            "JPY" => "Japanese yen (¥ JPY)",
            "KES" => "Kenyan shilling (KSh KES)",
            "KGS" => "Kyrgyzstani som (сом KGS)",
            "KHR" => "Cambodian riel (៛ KHR)",
            "KMF" => "Comorian franc (Fr KMF)",
            "KPW" => "North Korean won (₩ KPW)",
            "KRW" => "South Korean won (₩ KRW)",
            "KWD" => "Kuwaiti dinar (د.ك KWD)",
            "KYD" => "Cayman Islands dollar ($ KYD)",
            "KZT" => "Kazakhstani tenge (KZT)",
            "LAK" => "Lao kip (₭ LAK)",
            "LBP" => "Lebanese pound (ل.ل LBP)",
            "LKR" => "Sri Lankan rupee (රු LKR)",
            "LRD" => "Liberian dollar ($ LRD)",
            "LSL" => "Lesotho loti (L LSL)",
            "LYD" => "Libyan dinar (ل.د LYD)",
            "MAD" => "Moroccan dirham (د.م. MAD)",
            "MDL" => "Moldovan leu (MDL)",
            "MGA" => "Malagasy ariary (Ar MGA)",
            "MKD" => "Macedonian denar (ден MKD)",
            "MMK" => "Burmese kyat (Ks MMK)",
            "MNT" => "Mongolian tögrög (₮ MNT)",
            "MOP" => "Macanese pataca (P MOP)",
            "MRO" => "Mauritanian ouguiya (UM MRO)",
            "MUR" => "Mauritian rupee (₨ MUR)",
            "MVR" => "Maldivian rufiyaa (.ރ MVR)",
            "MWK" => "Malawian kwacha (MK MWK)",
            "MXN" => "Mexican peso ($ MXN)",
            "MYR" => "Malaysian ringgit (RM MYR)",
            "MZN" => "Mozambican metical (MT MZN)",
            "NAD" => "Namibian dollar ($ NAD)",
            "NGN" => "Nigerian naira (₦ NGN)",
            "NIO" => "Nicaraguan córdoba (C$ NIO)",
            "NOK" => "Norwegian krone (kr NOK)",
            "NPR" => "Nepalese rupee (₨ NPR)",
            "NZD" => "New Zealand dollar ($ NZD)",
            "OMR" => "Omani rial (ر.ع. OMR)",
            "PAB" => "Panamanian balboa (B/. PAB)",
            "PEN" => "Sol (S/ PEN)",
            "PGK" => "Papua New Guinean kina (K PGK)",
            "PHP" => "Philippine peso (₱ PHP)",
            "PKR" => "Pakistani rupee (₨ PKR)",
            "PLN" => "Polish złoty (zł PLN)",
            "PRB" => "Transnistrian ruble (р. PRB)",
            "PYG" => "Paraguayan guaraní (₲ PYG)",
            "QAR" => "Qatari riyal (ر.ق QAR)",
            "RON" => "Romanian leu (lei RON)",
            "RSD" => "Serbian dinar (дин. RSD)",
            "RUB" => "Russian ruble (₽ RUB)",
            "RWF" => "Rwandan franc (Fr RWF)",
            "SAR" => "Saudi riyal (ر.س SAR)",
            "SBD" => "Solomon Islands dollar ($ SBD)",
            "SCR" => "Seychellois rupee (₨ SCR)",
            "SDG" => "Sudanese pound (ج.س. SDG)",
            "SEK" => "Swedish krona (kr SEK)",
            "SGD" => "Singapore dollar ($ SGD)",
            "SHP" => "Saint Helena pound (£ SHP)",
            "SLL" => "Sierra Leonean leone (Le SLL)",
            "SOS" => "Somali shilling (Sh SOS)",
            "SRD" => "Surinamese dollar ($ SRD)",
            "SSP" => "South Sudanese pound (£ SSP)",
            "STD" => "São Tomé and Príncipe dobra (Db STD)",
            "SYP" => "Syrian pound (ل.س SYP)",
            "SZL" => "Swazi lilangeni (L SZL)",
            "THB" => "Thai baht (฿ THB)",
            "TJS" => "Tajikistani somoni (ЅМ TJS)",
            "TMT" => "Turkmenistan manat (m TMT)",
            "TND" => "Tunisian dinar (د.ت TND)",
            "TOP" => "Tongan paʻanga (T$ TOP)",
            "TRY" => "Turkish lira (₺ TRY)",
            "TTD" => "Trinidad and Tobago dollar ($ TTD)",
            "TWD" => "New Taiwan dollar (NT$ TWD)",
            "TZS" => "Tanzanian shilling (Sh TZS)",
            "UAH" => "Ukrainian hryvnia (₴ UAH)",
            "UGX" => "Ugandan shilling (UGX)",
            "USD" => "United States (US) dollar ($ USD)",
            "UYU" => "Uruguayan peso ($ UYU)",
            "UZS" => "Uzbekistani som (UZS)",
            "VEF" => "Venezuelan bolívar (Bs F VEF)",
            "VES" => "Bolívar soberano (Bs.S VES)",
            "VND" => "Vietnamese đồng (₫ VND)",
            "VUV" => "Vanuatu vatu (Vt VUV)",
            "WST" => "Samoan tālā (T WST)",
            "XAF" => "Central African CFA franc (CFA XAF)",
            "XCD" => "East Caribbean dollar ($ XCD)",
            "XOF" => "West African CFA franc (CFA XOF)",
            "XPF" => "CFP franc (Fr XPF)",
            "YER" => "Yemeni rial (﷼ YER)",
            "ZAR" => "South African rand (R ZAR)",
            "ZMW" => "Zambian kwacha (ZK ZMW)"
        );

        return is_null($country) ? $countries : $countries[$country];
    }

    public static function currency_codes($country = null){
        $codes = array(
            "AED" => "د.",
            "AFN" => "(؋",
            "ALL" => "L",
            "AMD" => "AMD",
            "ANG" => "ƒ",
            "AOA" => "Kz",
            "ARS" => "$)",
            "AUD" => "$",
            "AWG" => "Afl.",
            "AZN" => "AZN",
            "BAM" => "KM",
            "BBD" => "$",
            "BDT" => "৳&nbsp;",
            "BGN" => "лв.",
            "BHD" => ".د.ب",
            "BIF" => "Fr",
            "BMD" => "$",
            "BND" => "$",
            "BOB" => "Bs.",
            "BRL" => "R$",
            "BSD" => "$",
            "BTC" => "฿",
            "BTN" => "Nu.",
            "BWP" => "P",
            "BYR" => "Br",
            "BYN" => "Br",
            "BZD" => "$",
            "CAD" => "Canadian dollar ($ CAD)",
            "CDF" => "Congolese franc (Fr CDF)",
            "CHF" => "Swiss franc (CHF CHF)",
            "CLP" => "Chilean peso ($ CLP)",
            "CNY" => "Chinese yuan (¥ CNY)",
            "COP" => "Colombian peso ($ COP)",
            "CRC" => "Costa Rican colón (₡ CRC)",
            "CUC" => "Cuban convertible peso ($ CUC)",
            "CUP" => "Cuban peso ($ CUP)",
            "CVE" => "Cape Verdean escudo ($ CVE)",
            "CZK" => "Czech koruna (Kč CZK)",
            "DJF" => "Djiboutian franc (Fr DJF)",
            "DKK" => "Danish krone (DKK)",
            "DOP" => "Dominican peso (RD$ DOP)",
            "DZD" => "Algerian dinar (د.ج DZD)",
            "EGP" => "Egyptian pound (EGP)",
            "ERN" => "Eritrean nakfa (Nfk ERN)",
            "ETB" => "Ethiopian birr (Br ETB)",
            "EUR" => "Euro (€ EUR)",
            "FJD" => "Fijian dollar ($ FJD)",
            "FKP" => "Falkland Islands pound (£ FKP)",
            "GBP" => "Pound sterling (£ GBP)",
            "GEL" => "Georgian lari (₾ GEL)",
            "GGP" => "Guernsey pound (£ GGP)",
            "GHS" => "Ghana cedi (₵ GHS)",
            "GIP" => "Gibraltar pound (£ GIP)",
            "GMD" => "Gambian dalasi (D GMD)",
            "GNF" => "Guinean franc (Fr GNF)",
            "GTQ" => "Guatemalan quetzal (Q GTQ)",
            "GYD" => "Guyanese dollar ($ GYD)",
            "HKD" => "Hong Kong dollar ($ HKD)",
            "HNL" => "Honduran lempira (L HNL)",
            "HRK" => "Croatian kuna (kn HRK)",
            "HTG" => "Haitian gourde (G HTG)",
            "HUF" => "Hungarian forint (Ft HUF)",
            "IDR" => "Indonesian rupiah (Rp IDR)",
            "ILS" => "Israeli new shekel (₪ ILS)",
            "IMP" => "Manx pound (£ IMP)",
            "INR" => "Indian rupee (₹ INR)",
            "IQD" => "Iraqi dinar (ع.د IQD)",
            "IRR" => "Iranian rial (﷼ IRR)",
            "IRT" => "Iranian toman (تومان IRT)",
            "ISK" => "Icelandic króna (kr. ISK)",
            "JEP" => "Jersey pound (£ JEP)",
            "JMD" => "Jamaican dollar ($ JMD)",
            "JOD" => "Jordanian dinar (د.ا JOD)",
            "JPY" => "Japanese yen (¥ JPY)",
            "KES" => "KSh",
            "KGS" => "Kyrgyzstani som (сом KGS)",
            "KHR" => "Cambodian riel (៛ KHR)",
            "KMF" => "Comorian franc (Fr KMF)",
            "KPW" => "North Korean won (₩ KPW)",
            "KRW" => "South Korean won (₩ KRW)",
            "KWD" => "Kuwaiti dinar (د.ك KWD)",
            "KYD" => "Cayman Islands dollar ($ KYD)",
            "KZT" => "Kazakhstani tenge (KZT)",
            "LAK" => "Lao kip (₭ LAK)",
            "LBP" => "Lebanese pound (ل.ل LBP)",
            "LKR" => "Sri Lankan rupee (රු LKR)",
            "LRD" => "Liberian dollar ($ LRD)",
            "LSL" => "Lesotho loti (L LSL)",
            "LYD" => "Libyan dinar (ل.د LYD)",
            "MAD" => "Moroccan dirham (د.م. MAD)",
            "MDL" => "Moldovan leu (MDL)",
            "MGA" => "Malagasy ariary (Ar MGA)",
            "MKD" => "Macedonian denar (ден MKD)",
            "MMK" => "Burmese kyat (Ks MMK)",
            "MNT" => "Mongolian tögrög (₮ MNT)",
            "MOP" => "Macanese pataca (P MOP)",
            "MRO" => "Mauritanian ouguiya (UM MRO)",
            "MUR" => "Mauritian rupee (₨ MUR)",
            "MVR" => "Maldivian rufiyaa (.ރ MVR)",
            "MWK" => "Malawian kwacha (MK MWK)",
            "MXN" => "Mexican peso ($ MXN)",
            "MYR" => "Malaysian ringgit (RM MYR)",
            "MZN" => "Mozambican metical (MT MZN)",
            "NAD" => "Namibian dollar ($ NAD)",
            "NGN" => "Nigerian naira (₦ NGN)",
            "NIO" => "Nicaraguan córdoba (C$ NIO)",
            "NOK" => "Norwegian krone (kr NOK)",
            "NPR" => "Nepalese rupee (₨ NPR)",
            "NZD" => "New Zealand dollar ($ NZD)",
            "OMR" => "Omani rial (ر.ع. OMR)",
            "PAB" => "Panamanian balboa (B/. PAB)",
            "PEN" => "Sol (S/ PEN)",
            "PGK" => "Papua New Guinean kina (K PGK)",
            "PHP" => "Philippine peso (₱ PHP)",
            "PKR" => "Pakistani rupee (₨ PKR)",
            "PLN" => "Polish złoty (zł PLN)",
            "PRB" => "Transnistrian ruble (р. PRB)",
            "PYG" => "Paraguayan guaraní (₲ PYG)",
            "QAR" => "Qatari riyal (ر.ق QAR)",
            "RON" => "Romanian leu (lei RON)",
            "RSD" => "Serbian dinar (дин. RSD)",
            "RUB" => "Russian ruble (₽ RUB)",
            "RWF" => "Rwandan franc (Fr RWF)",
            "SAR" => "Saudi riyal (ر.س SAR)",
            "SBD" => "Solomon Islands dollar ($ SBD)",
            "SCR" => "Seychellois rupee (₨ SCR)",
            "SDG" => "Sudanese pound (ج.س. SDG)",
            "SEK" => "Swedish krona (kr SEK)",
            "SGD" => "Singapore dollar ($ SGD)",
            "SHP" => "Saint Helena pound (£ SHP)",
            "SLL" => "Sierra Leonean leone (Le SLL)",
            "SOS" => "Somali shilling (Sh SOS)",
            "SRD" => "Surinamese dollar ($ SRD)",
            "SSP" => "South Sudanese pound (£ SSP)",
            "STD" => "São Tomé and Príncipe dobra (Db STD)",
            "SYP" => "Syrian pound (ل.س SYP)",
            "SZL" => "Swazi lilangeni (L SZL)",
            "THB" => "Thai baht (฿ THB)",
            "TJS" => "Tajikistani somoni (ЅМ TJS)",
            "TMT" => "Turkmenistan manat (m TMT)",
            "TND" => "Tunisian dinar (د.ت TND)",
            "TOP" => "Tongan paʻanga (T$ TOP)",
            "TRY" => "Turkish lira (₺ TRY)",
            "TTD" => "Trinidad and Tobago dollar ($ TTD)",
            "TWD" => "New Taiwan dollar (NT$ TWD)",
            "TZS" => "Tanzanian shilling (Sh TZS)",
            "UAH" => "Ukrainian hryvnia (₴ UAH)",
            "UGX" => "Ugandan shilling (UGX)",
            "USD" => "United States (US) dollar ($ USD)",
            "UYU" => "Uruguayan peso ($ UYU)",
            "UZS" => "Uzbekistani som (UZS)",
            "VEF" => "Venezuelan bolívar (Bs F VEF)",
            "VES" => "Bolívar soberano (Bs.S VES)",
            "VND" => "Vietnamese đồng (₫ VND)",
            "VUV" => "Vanuatu vatu (Vt VUV)",
            "WST" => "Samoan tālā (T WST)",
            "XAF" => "Central African CFA franc (CFA XAF)",
            "XCD" => "East Caribbean dollar ($ XCD)",
            "XOF" => "West African CFA franc (CFA XOF)",
            "XPF" => "CFP franc (Fr XPF)",
            "YER" => "Yemeni rial (﷼ YER)",
            "ZAR" => "R",
            "ZMW" => "ZK"
        );

        return is_null($country) ? $codes : $codes[$country];
    }

    public static function one($option, $default = 'not set', $group = 'school')
    {
        $setting  = self::whereOption($group)->first();

        if($setting){
            return isset($setting->value[$option]) ? $setting->value[$option] : __($default);
        } else{
            return '';
        }
    }

    public static function general($option, $default = 'not set')
    {
        $setting  = self::whereOption('school')->first();

        if($setting){
            return isset($setting->value[$option]) ? $setting->value[$option] : __($default);
        } else {
            return $default;
        }
    }

    public static function locale($option, $default = 'not set')
    {
        $setting  = self::whereOption('locale')->first();

        if($setting){
            return isset($setting->value[$option]) ? $setting->value[$option] : __($default);
        } else {
            return $default;
        }
    }

    public static function branding($option, $default = 'not set')
    {
        $setting  = self::whereOption('branding')->first();

        if($setting){
            return isset($setting->value[$option]) ? $setting->value[$option] : __($default);
        } else {
            return $default;
        }
    }

    public static function email($option, $default = 'not set')
    {
        $setting  = self::whereOption('email')->first();

        if($setting){
            return isset($setting->value[$option]) ? $setting->value[$option] : __($default);
        } else {
            return $default;
        }
    }

    public static function sms($option, $default = 'not set')
    {
        $setting  = self::whereOption('sms')->first();

        if($setting){
            return isset($setting->value[$option]) ? $setting->value[$option] : __($default);
        } else {
            return $default;
        }
    }

    public static function mpesa($option, $default = 'not set')
    {
        $setting  = self::whereOption('mpesa')->first();

        if($setting){
            return isset($setting->value[$option]) ? $setting->value[$option] : __($default);
        } else {
            return $default;
        }
    }

    public static function invoice($option, $default = 'not set')
    {
        $setting  = self::whereOption('invoice')->first();

        if($setting){
            return isset($setting->value[$option]) ? $setting->value[$option] : __($default);
        } else {
            return $default;
        }
    }
}
