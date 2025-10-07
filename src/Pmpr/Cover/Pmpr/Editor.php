<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68e580bc35e5e             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr; class Editor extends Container { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('mce_buttons', [$this, 'wwaewugsiywccykq'])->cecaguuoecmccuse('mce_buttons_2', [$this, 'wyicmmmqusoksyqo']); parent::kgquecmsgcouyaya(); } public static function wwaewugsiywccykq($qyukicweqoisimwg) { $remove_buttons = ['italic', 'underline', 'alignleft', 'alignright', 'aligncenter', 'alignjustify', 'strikethrough']; foreach ($qyukicweqoisimwg as $button_key => $button_value) { if (in_array($button_value, $remove_buttons)) { unset($qyukicweqoisimwg[$button_key]); } } return $qyukicweqoisimwg; } public static function wyicmmmqusoksyqo($qyukicweqoisimwg) { $remove_buttons = ['wp_help', 'strikethrough']; foreach ($qyukicweqoisimwg as $button_key => $button_value) { if (in_array($button_value, $remove_buttons)) { unset($qyukicweqoisimwg[$button_key]); } } return $qyukicweqoisimwg; } }
