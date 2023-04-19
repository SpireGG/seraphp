<?php

declare(strict_types=1);

namespace SeraPHP\Tests\DTO\Lol;

use PHPUnit\Framework\TestCase;
use SeraPHP\DTO\Lol\MatchDTO;

final class MatchDTOTest extends TestCase
{
    public function testCreateFromArray(): void
    {
        $data = [
            'metadata' => [
                'dataVersion' => '2',
                'matchId' => 'EUW1_6365913977',
                'participants' => [
                    'wiA7GfynmL_4TteVMW7cxF3gHcITLza8rHk_K-kps-f6aEBKTLf_FHiVs8MwCJ7hNmvi4Ti0378PAg',
                    'fizO2hEMIoq8lDyPNYyiQaiTA7_0EdSjAfdvRq2QAZTRXwykMqFV2xu6z6ZCCwGtKYXV8WpzoiHZhQ',
                    '84a_7nx_YySdL9gyVDOP91Qyp_O46go_nh1N9d8DquJfwe9-oFHcji4tIoLcObac_YfkUEKjk9Fy3Q',
                    '_9foqy_KoVJWVN-WrJEkK7ki2x1Ermvni5Yma1JXETeSZGHao3LQ9j0vWlZyMC4dwwq0rXnqwdgzqA',
                    'tOFEuLzLyr5I2xVDSglmpCF_0L9DVGEE52cjVJDE1Xe0enTY5IKy318mmhuAYM_UbcDvJeLaeTOsqg',
                    'Et_Z9V0OsUuvLVlfhGeCnhDIezbDSWpKmcMUTmIbaJ3ZeDf3P1Po_iK5BE45SXnczDPCJyghlQEL5A',
                    'qySAn3I4s5h4ulCjqxlPuDP35-VRm3K6hVXQ4g7LCpvAdlbHRQ41XiRmY3fGE1Lt8zhV3mQVt7TYTA',
                    'ygt_Q4oVSDnzbNqB-as1caYQvn1m6VHbRvgrC1Haelf3Tt-pUrjr9p5UgRvCMiZRHQksYMg32To-NQ',
                    'Ci_Bk5F2HrFWwJIhAXR_n-O_UdX1wTrgTtU6PM7KWSKQBMBkuLDVFa7E4_qTGfr-hO5PVOJuw4ZTTg',
                    'NSYmrTKIlFSB0jU2PDw_hK3RA-o7CPHgya976nCWo_BKUGe2FHfoCW2-JwbZ-rDZP4dZlQX2bI7W5A',
                ],
            ],
            'info' => InfoDTOTest::DATA,
        ];
        $object = MatchDTO::createFromArray($data);
        self::assertEquals('2', $object->getMetadata()->getDataVersion());
        self::assertEquals('MATCHED_GAME', $object->getInfo()->getGameType());
    }
}
