<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6f2e9686             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Navigation\Walker; use Pmpr\Common\Cover\Navigation\Walker; class Main extends Walker { public function __construct() { $this->seqmucuwuueuqekq(['class' => 'dropdown-menu right-0']); } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { $cmkqisoeyioisqaw = []; $uysgyyocqmkymuog = ''; $iuimqmewsoqiquew = ''; if ($kkisyguyosoyymqs) { $cmkqisoeyioisqaw = ['custom-dropdown']; if ($igqsaukqcqscimok->menu_item_parent) { $cmkqisoeyioisqaw[] = $uysgyyocqmkymuog; } else { $cmkqisoeyioisqaw[] = $iuimqmewsoqiquew; } $cmkqisoeyioisqaw[] = 'my-auto'; $cmkqisoeyioisqaw[] = 'nav-item'; $cmkqisoeyioisqaw[] = 'dropdown'; } else { if ($igqsaukqcqscimok->menu_item_parent) { $cmkqisoeyioisqaw[] = $uysgyyocqmkymuog; } else { $cmkqisoeyioisqaw[] = $iuimqmewsoqiquew; } } if ($cmkqisoeyioisqaw) { $igqsaukqcqscimok = $this->igmaewykumgwoaoy($igqsaukqcqscimok, 'classes', $cmkqisoeyioisqaw); } return parent::iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, 'class', 'nav-link mr-4 pr-2'); return parent::smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum); } }
