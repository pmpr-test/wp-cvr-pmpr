<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebec7b4f6             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Template; use Pmpr\Common\Foundation\Interfaces\Constants; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\145\156\x64\x65\x72\137\162\145\x6c\x61\x74\145\144", [$this, "\x79\x6f\x79\145\x77\x67\x6f\x75\x65\145\153\157\x6f\x79\167\x63"], 1, 3)->qcsmikeggeemccuu("\x72\145\156\x64\145\162\137\x72\145\143\157\x6d\155\145\156\144\x65\144", [$this, "\x63\x61\161\157\x75\x71\141\x67\143\163\147\155\151\143\x69\141"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); kqyoakickmseyyeq: } aukucaieceiwesmm: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto micceocwuwkyusic; } $qookweymeqawmcwo[Constants::qwumqqyuasyskkkc] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace([Constants::waguuiqqgsysuukq => Constants::meugkwqwuyoyeeqs, Constants::sqomuccqsqwsckyw => "\x63\157\x6c\154\x61\x70\x73\x69\142\154\x65\x5f\154\151\x73\x74"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($qookweymeqawmcwo, Constants::sqomuccqsqwsckyw); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\x72\145\x6c\141\164\151\x6f\x6e\x5f{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); micceocwuwkyusic: if (!$koaqeegoeiaiccse) { goto iwueukqcywkiyqge; } echo $aqykuigiuwmmcieu; iwueukqcywkiyqge: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }