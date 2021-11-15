<?php

declare(strict_types=1);

/*
 * This file is part of the plausibleio extension for TYPO3
 * - (c) 2021 waldhacker UG (haftungsbeschränkt)
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace Waldhacker\Plausibleio\Services;

class ISO3166Service
{
    public const ALPHA2 = 'alpha2';
    public const ALPHA3 = 'alpha3';
    private array $data = [
        [
            'alpha2' => 'AF',
            'alpha3' => 'AFG',
        ],
        [
            'alpha2' => 'AX',
            'alpha3' => 'ALA',
        ],
        [
            'alpha2' => 'AL',
            'alpha3' => 'ALB',
        ],
        [
            'alpha2' => 'DZ',
            'alpha3' => 'DZA',
        ],
        [
            'alpha2' => 'AS',
            'alpha3' => 'ASM',
        ],
        [
            'alpha2' => 'AD',
            'alpha3' => 'AND',
        ],
        [
            'alpha2' => 'AO',
            'alpha3' => 'AGO',
        ],
        [
            'alpha2' => 'AI',
            'alpha3' => 'AIA',
        ],
        [
            'alpha2' => 'AQ',
            'alpha3' => 'ATA',
        ],
        [
            'alpha2' => 'AG',
            'alpha3' => 'ATG',
        ],
        [
            'alpha2' => 'AR',
            'alpha3' => 'ARG',
        ],
        [
            'alpha2' => 'AM',
            'alpha3' => 'ARM',
        ],
        [
            'alpha2' => 'AW',
            'alpha3' => 'ABW',
        ],
        [
            'alpha2' => 'AU',
            'alpha3' => 'AUS',
        ],
        [
            'alpha2' => 'AT',
            'alpha3' => 'AUT',
        ],
        [
            'alpha2' => 'AZ',
            'alpha3' => 'AZE',
        ],
        [
            'alpha2' => 'BS',
            'alpha3' => 'BHS',
        ],
        [
            'alpha2' => 'BH',
            'alpha3' => 'BHR',
        ],
        [
            'alpha2' => 'BD',
            'alpha3' => 'BGD',
        ],
        [
            'alpha2' => 'BB',
            'alpha3' => 'BRB',
        ],
        [
            'alpha2' => 'BY',
            'alpha3' => 'BLR',
        ],
        [
            'alpha2' => 'BE',
            'alpha3' => 'BEL',
        ],
        [
            'alpha2' => 'BZ',
            'alpha3' => 'BLZ',
        ],
        [
            'alpha2' => 'BJ',
            'alpha3' => 'BEN',
        ],
        [
            'alpha2' => 'BM',
            'alpha3' => 'BMU',
        ],
        [
            'alpha2' => 'BT',
            'alpha3' => 'BTN',
        ],
        [
            'alpha2' => 'BO',
            'alpha3' => 'BOL',
        ],
        [
            'alpha2' => 'BQ',
            'alpha3' => 'BES',
        ],
        [
            'alpha2' => 'BA',
            'alpha3' => 'BIH',
        ],
        [
            'alpha2' => 'BW',
            'alpha3' => 'BWA',
        ],
        [
            'alpha2' => 'BV',
            'alpha3' => 'BVT',
        ],
        [
            'alpha2' => 'BR',
            'alpha3' => 'BRA',
        ],
        [
            'alpha2' => 'IO',
            'alpha3' => 'IOT',
        ],
        [
            'alpha2' => 'BN',
            'alpha3' => 'BRN',
        ],
        [
            'alpha2' => 'BG',
            'alpha3' => 'BGR',
        ],
        [
            'alpha2' => 'BF',
            'alpha3' => 'BFA',
        ],
        [
            'alpha2' => 'BI',
            'alpha3' => 'BDI',
        ],
        [
            'alpha2' => 'CV',
            'alpha3' => 'CPV',
        ],
        [
            'alpha2' => 'KH',
            'alpha3' => 'KHM',
        ],
        [
            'alpha2' => 'CM',
            'alpha3' => 'CMR',
        ],
        [
            'alpha2' => 'CA',
            'alpha3' => 'CAN',
        ],
        [
            'alpha2' => 'KY',
            'alpha3' => 'CYM',
        ],
        [
            'alpha2' => 'CF',
            'alpha3' => 'CAF',
        ],
        [
            'alpha2' => 'TD',
            'alpha3' => 'TCD',
        ],
        [
            'alpha2' => 'CL',
            'alpha3' => 'CHL',
        ],
        [
            'alpha2' => 'CN',
            'alpha3' => 'CHN',
        ],
        [
            'alpha2' => 'CX',
            'alpha3' => 'CXR',
        ],
        [
            'alpha2' => 'CC',
            'alpha3' => 'CCK',
        ],
        [
            'alpha2' => 'CO',
            'alpha3' => 'COL',
        ],
        [
            'alpha2' => 'KM',
            'alpha3' => 'COM',
        ],
        [
            'alpha2' => 'CG',
            'alpha3' => 'COG',
        ],
        [
            'alpha2' => 'CD',
            'alpha3' => 'COD',
        ],
        [
            'alpha2' => 'CK',
            'alpha3' => 'COK',
        ],
        [
            'alpha2' => 'CR',
            'alpha3' => 'CRI',
        ],
        [
            'alpha2' => 'CI',
            'alpha3' => 'CIV',
        ],
        [
            'alpha2' => 'HR',
            'alpha3' => 'HRV',
        ],
        [
            'alpha2' => 'CU',
            'alpha3' => 'CUB',
        ],
        [
            'alpha2' => 'CW',
            'alpha3' => 'CUW',
        ],
        [
            'alpha2' => 'CY',
            'alpha3' => 'CYP',
        ],
        [
            'alpha2' => 'CZ',
            'alpha3' => 'CZE',
        ],
        [
            'alpha2' => 'DK',
            'alpha3' => 'DNK',
        ],
        [
            'alpha2' => 'DJ',
            'alpha3' => 'DJI',
        ],
        [
            'alpha2' => 'DM',
            'alpha3' => 'DMA',
        ],
        [
            'alpha2' => 'DO',
            'alpha3' => 'DOM',
        ],
        [
            'alpha2' => 'EC',
            'alpha3' => 'ECU',
        ],
        [
            'alpha2' => 'EG',
            'alpha3' => 'EGY',
        ],
        [
            'alpha2' => 'SV',
            'alpha3' => 'SLV',
        ],
        [
            'alpha2' => 'GQ',
            'alpha3' => 'GNQ',
        ],
        [
            'alpha2' => 'ER',
            'alpha3' => 'ERI',
        ],
        [
            'alpha2' => 'EE',
            'alpha3' => 'EST',
        ],
        [
            'alpha2' => 'ET',
            'alpha3' => 'ETH',
        ],
        [
            'alpha2' => 'SZ',
            'alpha3' => 'SWZ',
        ],
        [
            'alpha2' => 'FK',
            'alpha3' => 'FLK',
        ],
        [
            'alpha2' => 'FO',
            'alpha3' => 'FRO',
        ],
        [
            'alpha2' => 'FJ',
            'alpha3' => 'FJI',
        ],
        [
            'alpha2' => 'FI',
            'alpha3' => 'FIN',
        ],
        [
            'alpha2' => 'FR',
            'alpha3' => 'FRA',
        ],
        [
            'alpha2' => 'GF',
            'alpha3' => 'GUF',
        ],
        [
            'alpha2' => 'PF',
            'alpha3' => 'PYF',
        ],
        [
            'alpha2' => 'TF',
            'alpha3' => 'ATF',
        ],
        [
            'alpha2' => 'GA',
            'alpha3' => 'GAB',
        ],
        [
            'alpha2' => 'GM',
            'alpha3' => 'GMB',
        ],
        [
            'alpha2' => 'GE',
            'alpha3' => 'GEO',
        ],
        [
            'alpha2' => 'DE',
            'alpha3' => 'DEU',
        ],
        [
            'alpha2' => 'GH',
            'alpha3' => 'GHA',
        ],
        [
            'alpha2' => 'GI',
            'alpha3' => 'GIB',
        ],
        [
            'alpha2' => 'GR',
            'alpha3' => 'GRC',
        ],
        [
            'alpha2' => 'GL',
            'alpha3' => 'GRL',
        ],
        [
            'alpha2' => 'GD',
            'alpha3' => 'GRD',
        ],
        [
            'alpha2' => 'GP',
            'alpha3' => 'GLP',
        ],
        [
            'alpha2' => 'GU',
            'alpha3' => 'GUM',
        ],
        [
            'alpha2' => 'GT',
            'alpha3' => 'GTM',
        ],
        [
            'alpha2' => 'GG',
            'alpha3' => 'GGY',
        ],
        [
            'alpha2' => 'GN',
            'alpha3' => 'GIN',
        ],
        [
            'alpha2' => 'GW',
            'alpha3' => 'GNB',
        ],
        [
            'alpha2' => 'GY',
            'alpha3' => 'GUY',
        ],
        [
            'alpha2' => 'HT',
            'alpha3' => 'HTI',
        ],
        [
            'alpha2' => 'HM',
            'alpha3' => 'HMD',
        ],
        [
            'alpha2' => 'VA',
            'alpha3' => 'VAT',
        ],
        [
            'alpha2' => 'HN',
            'alpha3' => 'HND',
        ],
        [
            'alpha2' => 'HK',
            'alpha3' => 'HKG',
        ],
        [
            'alpha2' => 'HU',
            'alpha3' => 'HUN',
        ],
        [
            'alpha2' => 'IS',
            'alpha3' => 'ISL',
        ],
        [
            'alpha2' => 'IN',
            'alpha3' => 'IND',
        ],
        [
            'alpha2' => 'ID',
            'alpha3' => 'IDN',
        ],
        [
            'alpha2' => 'IR',
            'alpha3' => 'IRN',
        ],
        [
            'alpha2' => 'IQ',
            'alpha3' => 'IRQ',
        ],
        [
            'alpha2' => 'IE',
            'alpha3' => 'IRL',
        ],
        [
            'alpha2' => 'IM',
            'alpha3' => 'IMN',
        ],
        [
            'alpha2' => 'IL',
            'alpha3' => 'ISR',
        ],
        [
            'alpha2' => 'IT',
            'alpha3' => 'ITA',
        ],
        [
            'alpha2' => 'JM',
            'alpha3' => 'JAM',
        ],
        [
            'alpha2' => 'JP',
            'alpha3' => 'JPN',
        ],
        [
            'alpha2' => 'JE',
            'alpha3' => 'JEY',
        ],
        [
            'alpha2' => 'JO',
            'alpha3' => 'JOR',
        ],
        [
            'alpha2' => 'KZ',
            'alpha3' => 'KAZ',
        ],
        [
            'alpha2' => 'KE',
            'alpha3' => 'KEN',
        ],
        [
            'alpha2' => 'KI',
            'alpha3' => 'KIR',
        ],
        [
            'alpha2' => 'KP',
            'alpha3' => 'PRK',
        ],
        [
            'alpha2' => 'KR',
            'alpha3' => 'KOR',
        ],
        [
            'alpha2' => 'KW',
            'alpha3' => 'KWT',
        ],
        [
            'alpha2' => 'KG',
            'alpha3' => 'KGZ',
        ],
        [
            'alpha2' => 'LA',
            'alpha3' => 'LAO',
        ],
        [
            'alpha2' => 'LV',
            'alpha3' => 'LVA',
        ],
        [
            'alpha2' => 'LB',
            'alpha3' => 'LBN',
        ],
        [
            'alpha2' => 'LS',
            'alpha3' => 'LSO',
        ],
        [
            'alpha2' => 'LR',
            'alpha3' => 'LBR',
        ],
        [
            'alpha2' => 'LY',
            'alpha3' => 'LBY',
        ],
        [
            'alpha2' => 'LI',
            'alpha3' => 'LIE',
        ],
        [
            'alpha2' => 'LT',
            'alpha3' => 'LTU',
        ],
        [
            'alpha2' => 'LU',
            'alpha3' => 'LUX',
        ],
        [
            'alpha2' => 'MO',
            'alpha3' => 'MAC',
        ],
        [
            'alpha2' => 'MK',
            'alpha3' => 'MKD',
        ],
        [
            'alpha2' => 'MG',
            'alpha3' => 'MDG',
        ],
        [
            'alpha2' => 'MW',
            'alpha3' => 'MWI',
        ],
        [
            'alpha2' => 'MY',
            'alpha3' => 'MYS',
        ],
        [
            'alpha2' => 'MV',
            'alpha3' => 'MDV',
        ],
        [
            'alpha2' => 'ML',
            'alpha3' => 'MLI',
        ],
        [
            'alpha2' => 'MT',
            'alpha3' => 'MLT',
        ],
        [
            'alpha2' => 'MH',
            'alpha3' => 'MHL',
        ],
        [
            'alpha2' => 'MQ',
            'alpha3' => 'MTQ',
        ],
        [
            'alpha2' => 'MR',
            'alpha3' => 'MRT',
        ],
        [
            'alpha2' => 'MU',
            'alpha3' => 'MUS',
        ],
        [
            'alpha2' => 'YT',
            'alpha3' => 'MYT',
        ],
        [
            'alpha2' => 'MX',
            'alpha3' => 'MEX',
        ],
        [
            'alpha2' => 'FM',
            'alpha3' => 'FSM',
        ],
        [
            'alpha2' => 'MD',
            'alpha3' => 'MDA',
        ],
        [
            'alpha2' => 'MC',
            'alpha3' => 'MCO',
        ],
        [
            'alpha2' => 'MN',
            'alpha3' => 'MNG',
        ],
        [
            'alpha2' => 'ME',
            'alpha3' => 'MNE',
        ],
        [
            'alpha2' => 'MS',
            'alpha3' => 'MSR',
        ],
        [
            'alpha2' => 'MA',
            'alpha3' => 'MAR',
        ],
        [
            'alpha2' => 'MZ',
            'alpha3' => 'MOZ',
        ],
        [
            'alpha2' => 'MM',
            'alpha3' => 'MMR',
        ],
        [
            'alpha2' => 'NA',
            'alpha3' => 'NAM',
        ],
        [
            'alpha2' => 'NR',
            'alpha3' => 'NRU',
        ],
        [
            'alpha2' => 'NP',
            'alpha3' => 'NPL',
        ],
        [
            'alpha2' => 'NL',
            'alpha3' => 'NLD',
        ],
        [
            'alpha2' => 'NC',
            'alpha3' => 'NCL',
        ],
        [
            'alpha2' => 'NZ',
            'alpha3' => 'NZL',
        ],
        [
            'alpha2' => 'NI',
            'alpha3' => 'NIC',
        ],
        [
            'alpha2' => 'NE',
            'alpha3' => 'NER',
        ],
        [
            'alpha2' => 'NG',
            'alpha3' => 'NGA',
        ],
        [
            'alpha2' => 'NU',
            'alpha3' => 'NIU',
        ],
        [
            'alpha2' => 'NF',
            'alpha3' => 'NFK',
        ],
        [
            'alpha2' => 'MP',
            'alpha3' => 'MNP',
        ],
        [
            'alpha2' => 'NO',
            'alpha3' => 'NOR',
        ],
        [
            'alpha2' => 'OM',
            'alpha3' => 'OMN',
        ],
        [
            'alpha2' => 'PK',
            'alpha3' => 'PAK',
        ],
        [
            'alpha2' => 'PW',
            'alpha3' => 'PLW',
        ],
        [
            'alpha2' => 'PS',
            'alpha3' => 'PSE',
        ],
        [
            'alpha2' => 'PA',
            'alpha3' => 'PAN',
        ],
        [
            'alpha2' => 'PG',
            'alpha3' => 'PNG',
        ],
        [
            'alpha2' => 'PY',
            'alpha3' => 'PRY',
        ],
        [
            'alpha2' => 'PE',
            'alpha3' => 'PER',
        ],
        [
            'alpha2' => 'PH',
            'alpha3' => 'PHL',
        ],
        [
            'alpha2' => 'PN',
            'alpha3' => 'PCN',
        ],
        [
            'alpha2' => 'PL',
            'alpha3' => 'POL',
        ],
        [
            'alpha2' => 'PT',
            'alpha3' => 'PRT',
        ],
        [
            'alpha2' => 'PR',
            'alpha3' => 'PRI',
        ],
        [
            'alpha2' => 'QA',
            'alpha3' => 'QAT',
        ],
        [
            'alpha2' => 'RE',
            'alpha3' => 'REU',
        ],
        [
            'alpha2' => 'RO',
            'alpha3' => 'ROU',
        ],
        [
            'alpha2' => 'RU',
            'alpha3' => 'RUS',
        ],
        [
            'alpha2' => 'RW',
            'alpha3' => 'RWA',
        ],
        [
            'alpha2' => 'BL',
            'alpha3' => 'BLM',
        ],
        [
            'alpha2' => 'SH',
            'alpha3' => 'SHN',
        ],
        [
            'alpha2' => 'KN',
            'alpha3' => 'KNA',
        ],
        [
            'alpha2' => 'LC',
            'alpha3' => 'LCA',
        ],
        [
            'alpha2' => 'MF',
            'alpha3' => 'MAF',
        ],
        [
            'alpha2' => 'PM',
            'alpha3' => 'SPM',
        ],
        [
            'alpha2' => 'VC',
            'alpha3' => 'VCT',
        ],
        [
            'alpha2' => 'WS',
            'alpha3' => 'WSM',
        ],
        [
            'alpha2' => 'SM',
            'alpha3' => 'SMR',
        ],
        [
            'alpha2' => 'ST',
            'alpha3' => 'STP',
        ],
        [
            'alpha2' => 'SA',
            'alpha3' => 'SAU',
        ],
        [
            'alpha2' => 'SN',
            'alpha3' => 'SEN',
        ],
        [
            'alpha2' => 'RS',
            'alpha3' => 'SRB',
        ],
        [
            'alpha2' => 'SC',
            'alpha3' => 'SYC',
        ],
        [
            'alpha2' => 'SL',
            'alpha3' => 'SLE',
        ],
        [
            'alpha2' => 'SG',
            'alpha3' => 'SGP',
        ],
        [
            'alpha2' => 'SX',
            'alpha3' => 'SXM',
        ],
        [
            'alpha2' => 'SK',
            'alpha3' => 'SVK',
        ],
        [
            'alpha2' => 'SI',
            'alpha3' => 'SVN',
        ],
        [
            'alpha2' => 'SB',
            'alpha3' => 'SLB',
        ],
        [
            'alpha2' => 'SO',
            'alpha3' => 'SOM',
        ],
        [
            'alpha2' => 'ZA',
            'alpha3' => 'ZAF',
        ],
        [
            'alpha2' => 'GS',
            'alpha3' => 'SGS',
        ],
        [
            'alpha2' => 'SS',
            'alpha3' => 'SSD',
        ],
        [
            'alpha2' => 'ES',
            'alpha3' => 'ESP',
        ],
        [
            'alpha2' => 'LK',
            'alpha3' => 'LKA',
        ],
        [
            'alpha2' => 'SD',
            'alpha3' => 'SDN',
        ],
        [
            'alpha2' => 'SR',
            'alpha3' => 'SUR',
        ],
        [
            'alpha2' => 'SJ',
            'alpha3' => 'SJM',
        ],
        [
            'alpha2' => 'SE',
            'alpha3' => 'SWE',
        ],
        [
            'alpha2' => 'CH',
            'alpha3' => 'CHE',
        ],
        [
            'alpha2' => 'SY',
            'alpha3' => 'SYR',
        ],
        [
            'alpha2' => 'TW',
            'alpha3' => 'TWN',
        ],
        [
            'alpha2' => 'TJ',
            'alpha3' => 'TJK',
        ],
        [
            'alpha2' => 'TZ',
            'alpha3' => 'TZA',
        ],
        [
            'alpha2' => 'TH',
            'alpha3' => 'THA',
        ],
        [
            'alpha2' => 'TL',
            'alpha3' => 'TLS',
        ],
        [
            'alpha2' => 'TG',
            'alpha3' => 'TGO',
        ],
        [
            'alpha2' => 'TK',
            'alpha3' => 'TKL',
        ],
        [
            'alpha2' => 'TO',
            'alpha3' => 'TON',
        ],
        [
            'alpha2' => 'TT',
            'alpha3' => 'TTO',
        ],
        [
            'alpha2' => 'TN',
            'alpha3' => 'TUN',
        ],
        [
            'alpha2' => 'TR',
            'alpha3' => 'TUR',
        ],
        [
            'alpha2' => 'TM',
            'alpha3' => 'TKM',
        ],
        [
            'alpha2' => 'TC',
            'alpha3' => 'TCA',
        ],
        [
            'alpha2' => 'TV',
            'alpha3' => 'TUV',
        ],
        [
            'alpha2' => 'UG',
            'alpha3' => 'UGA',
        ],
        [
            'alpha2' => 'UA',
            'alpha3' => 'UKR',
        ],
        [
            'alpha2' => 'AE',
            'alpha3' => 'ARE',
        ],
        [
            'alpha2' => 'GB',
            'alpha3' => 'GBR',
        ],
        [
            'alpha2' => 'US',
            'alpha3' => 'USA',
        ],
        [
            'alpha2' => 'UM',
            'alpha3' => 'UMI',
        ],
        [
            'alpha2' => 'UY',
            'alpha3' => 'URY',
        ],
        [
            'alpha2' => 'UZ',
            'alpha3' => 'UZB',
        ],
        [
            'alpha2' => 'VU',
            'alpha3' => 'VUT',
        ],
        [
            'alpha2' => 'VE',
            'alpha3' => 'VEN',
        ],
        [
            'alpha2' => 'VN',
            'alpha3' => 'VNM',
        ],
        [
            'alpha2' => 'VG',
            'alpha3' => 'VGB',
        ],
        [
            'alpha2' => 'VI',
            'alpha3' => 'VIR',
        ],
        [
            'alpha2' => 'WF',
            'alpha3' => 'WLF',
        ],
        [
            'alpha2' => 'EH',
            'alpha3' => 'ESH',
        ],
        [
            'alpha2' => 'YE',
            'alpha3' => 'YEM',
        ],
        [
            'alpha2' => 'ZM',
            'alpha3' => 'ZMB',
        ],
        [
            'alpha2' => 'ZW',
            'alpha3' => 'ZWE',
        ],
    ];

    public function alpha2(string $needle): ?array
    {
        return $this->search(self::ALPHA2, $needle);
    }

    public function alpha3(string $needle): ?array
    {
        return $this->search(self::ALPHA3, $needle);
    }

    private function search(string $scope, string $needle): ?array
    {
        foreach ($this->data as $item) {
            if (($item[$scope] ?? null) !== $needle) {
                continue;
            }

            return $item;
        }

        return null;
    }
}