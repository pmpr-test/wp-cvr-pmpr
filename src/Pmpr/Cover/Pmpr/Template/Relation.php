<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae197df2dd             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Template; use Pmpr\Common\Foundation\Interfaces\Constants; class Relation extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\x65\156\x64\x65\162\137\162\145\154\141\x74\145\x64", [$this, "\x79\x6f\171\x65\167\147\157\x75\x65\x65\x6b\x6f\157\171\167\143"], 1, 3)->qcsmikeggeemccuu("\162\145\x6e\144\145\x72\137\162\145\x63\157\x6d\155\145\x6e\x64\145\144", [$this, "\x63\141\161\157\x75\161\x61\x67\x63\163\147\155\x69\x63\x69\x61"], 1, 3); parent::wigskegsqequoeks(); } public function ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky) { $icwicymcioeyeyek = []; $qscicukamogegaac = Manager::ykcmskykuassmaug($ayegqaqygsqsmews, $post->post_type, $yemgmmgogcwccuky); foreach ($qscicukamogegaac as $ymqmyyeuycgmigyo => $gwiwsycaaqgwmewg) { $icwicymcioeyeyek = Manager::get($post, $ymqmyyeuycgmigyo, $gwiwsycaaqgwmewg); koiscokkkaimiecq: } cquecqekuucwoumw: return $icwicymcioeyeyek; } private function render($ayegqaqygsqsmews, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse) { $aqykuigiuwmmcieu = null; $post = get_post(); if (!$post) { goto owuuuiekkaeoeacq; } $qookweymeqawmcwo[Constants::qwumqqyuasyskkkc] = $this->ckcoaqgksakciqmk($ayegqaqygsqsmews, $post, $yemgmmgogcwccuky); $qookweymeqawmcwo = array_replace([Constants::waguuiqqgsysuukq => Constants::meugkwqwuyoyeeqs, Constants::sqomuccqsqwsckyw => "\143\157\154\x6c\141\160\x73\x69\x62\154\x65\x5f\154\x69\163\164"], $qookweymeqawmcwo); $iqyiekoceqqsqoow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($qookweymeqawmcwo, Constants::sqomuccqsqwsckyw); $aqykuigiuwmmcieu = $this->iuygowkemiiwqmiw("\162\145\x6c\x61\x74\x69\x6f\156\x5f{$iqyiekoceqqsqoow}", $qookweymeqawmcwo); owuuuiekkaeoeacq: if (!$koaqeegoeiaiccse) { goto saauykgakaeiyoua; } echo $aqykuigiuwmmcieu; saauykgakaeiyoua: return $aqykuigiuwmmcieu; } public function yoyewgoueekooywc($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::okoqmuqwqogqeasw, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } public function caqouqagcsgmicia($qookweymeqawmcwo = [], $yemgmmgogcwccuky = [], $koaqeegoeiaiccse = true) { return $this->render(Manager::siyaagweooaocgem, $qookweymeqawmcwo, $yemgmmgogcwccuky, $koaqeegoeiaiccse); } }
