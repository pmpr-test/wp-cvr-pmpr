<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6705174dabba2             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Data\Metadata; use Pmpr\Common\Foundation\Data\View; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Cover\Woocommerce\Template as BaseClass; use Pmpr\Cover\Pmpr\Traits\CommonTrait; use WC_Product; use WC_Product_Variation; use WP_Term; abstract class Template extends BaseClass { use CommonTrait; protected bool $isGridView = false; public function uuiqowweqqewoysu($uusmaiomayssaecw = '') { $ykiyyumywksqcisg = ["\x64\141\x73\150\x62\157\141\x72\x64" => IconInterface::ygcmqmkcsymeucoq, "\x6f\x72\x64\145\162\x73" => IconInterface::goqumcwkcuygcaui, "\144\x6f\167\156\x6c\x6f\x61\x64\x73" => IconInterface::msyqysqykouywsua, "\x65\144\151\x74\x2d\x61\144\x64\162\145\163\x73" => IconInterface::wykikkeyisimsmyy, "\160\x61\171\155\145\156\x74\x2d\x6d\x65\164\150\157\x64\163" => IconInterface::acciucugwcskkwmi, "\145\144\x69\x74\55\141\x63\143\157\165\156\164" => IconInterface::wqqgoiyyqicsycmm, "\x63\x75\163\164\x6f\155\x65\x72\55\x6c\x6f\147\x6f\x75\164" => IconInterface::ygmsyksiyocgyyke]; return $ykiyyumywksqcisg[$uusmaiomayssaecw] ?? IconInterface::wukkqukiiuuoyiiy; } public function __construct() { $this->isGridView = (new View())->qcaekwgmiswccowk(View::igqcciosuoyiuwiu); parent::__construct(); } public function gmauoekwmqeoiwms() { global $product; $iwywmkygwewiamwm = $this->sscegwueamckwmcy("\x77\157\157\x63\x6f\x6d\155\145\x72\x63\145\x5f\154\157\x6f\x70\137\x70\162\157\144\165\143\x74\137\x6c\x69\x6e\153", $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy(), $product); $this->meqqwuauskckweee(["\143\x6c\x61\x73\x73" => "\164\145\170\164\x2d\x64\145\143\157\162\x61\x74\151\x6f\156\55\x6e\157\156\145\40\x74\x65\170\164\55\155\165\x74\145"], $iwywmkygwewiamwm); } public function yeoeauseikmskscu() : bool { return $this->isGridView; } public function agoiskwswoomuqoa($ywmkwiwkosakssii = []) { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::oguseymmyyoyaako => '', "\x70\162\x69\x63\145\163" => [], "\164\144\x5f\x63\x6c\x61\x73\163" => '', "\x74\x72\137\143\154\141\163\x73" => '', "\x74\150\x5f\x63\154\x61\163\x73" => "\x74\145\170\x74\55\147\x72\x61\x79\x2d\x38\x30\x30\x20\x70\171\x2d\x32", "\150\x61\x73\x5f\164\x69\x74\x6c\x65" => true, "\x74\141\x62\x6c\x65\x5f\143\154\141\163\163" => "\x6d\142\55\x35"]); $product = $ywmkwiwkosakssii[Constants::oguseymmyyoyaako]; $uiiuuaeiyecmiouc = $ywmkwiwkosakssii["\160\x72\151\143\145\163"]; if (!$product) { goto esikeyqyuikmaiek; } $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($product); goto okkmcocqokkskasy; esikeyqyuikmaiek: global $product; okkmcocqokkskasy: if (!$product instanceof WC_Product) { goto wwukgaquuyoissgy; } $aumscagymwyyicag = $product->get_price_html(); if (!$aumscagymwyyicag) { goto suqcsgaosywaauuu; } $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $aumscagymwyyicag = $smuykqsageuocuos->igmaewykumgwoaoy($aumscagymwyyicag, ["\x2e\x77\157\x6f\x63\x6f\155\x6d\x65\x72\143\145\x2d\120\x72\x69\143\x65\x2d\143\x75\162\162\x65\156\x63\171\x53\x79\155\142\x6f\154" => ["\x63\x6c\x61\163\x73" => "\146\x6f\x6e\164\x2d\61\63"]]); $qecuekqmeaiykeek = 0; if (!$product instanceof WC_Product_Variation) { goto qiiigwkqeoewsuwm; } $qecuekqmeaiykeek = count($product->get_variation_attributes()); qiiigwkqeoewsuwm: $eukiyocmgugiioei = $smuykqsageuocuos->qqimkcgcmeewwwei($aumscagymwyyicag, "\144\x65\x6c"); $ywoyoawciekocqao = $smuykqsageuocuos->qqimkcgcmeewwwei($aumscagymwyyicag, "\x69\156\x73"); if ($eukiyocmgugiioei) { goto ikqeeaysmqgcgawq; } $eeeyyekmaesysegc = $aumscagymwyyicag; goto mscgewkcqcoowweg; ikqeeaysmqgcgawq: $uiiuuaeiyecmiouc["\x72\x65\147\165\154\x61\162\x5f\160\162\x69\143\x65"] = $eukiyocmgugiioei; if (!($qecuekqmeaiykeek < 3 && $ywoyoawciekocqao)) { goto esaqcqqwuussiiwo; } $uiiuuaeiyecmiouc["\x64\x69\x73\x63\x6f\165\x6e\x74"] = $this->yqauycsoymimeise($product); esaqcqqwuussiiwo: $eeeyyekmaesysegc = $ywoyoawciekocqao; $uiiuuaeiyecmiouc["\144\151\163\x63\157\x75\x6e\x74\x5f\x65\x78\160\x69\162\145"] = $this->sscegwueamckwmcy("\167\157\x6f\x63\x6f\x6d\x6d\x65\x72\x63\x65\x5f\160\162\x6f\144\165\143\164\x5f\144\151\x73\x63\157\x75\x6e\164\137\x65\170\x70\151\162\x65\137\x68\x74\155\154", '', ["\160\162\x6f\x64\165\143\164" => $product]); mscgewkcqcoowweg: $uiiuuaeiyecmiouc["\x73\x61\154\145\x5f\x70\162\x69\x63\145"] = $eeeyyekmaesysegc; suqcsgaosywaauuu: wwukgaquuyoissgy: if (!(is_array($uiiuuaeiyecmiouc) && $uiiuuaeiyecmiouc)) { goto usymasgsyqgsuocg; } $oammesyieqmwuwyi = []; $uiiuuaeiyecmiouc = array_filter($uiiuuaeiyecmiouc); foreach ($uiiuuaeiyecmiouc as $uusmaiomayssaecw => $aumscagymwyyicag) { $ugugimquukqwogge = new Metadata(); switch ($uusmaiomayssaecw) { case "\x72\145\x67\165\154\141\162\137\x70\162\151\x63\x65": $ugugimquukqwogge->gswweykyogmsyawy(__("\x52\145\x67\165\154\141\162\x20\120\162\151\143\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(10); goto yqagomygmeoecwey; case "\x73\x61\x6c\x65\x5f\x70\162\151\x63\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\123\141\154\145\40\120\162\x69\143\x65", PR__CVR__PMPR))->jyumyyugiwwiqomk(25); goto yqagomygmeoecwey; case "\144\151\x73\x63\157\165\x6e\164\x5f\145\x78\x70\151\x72\145": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\x69\x73\143\157\165\156\x74\x20\x45\170\x70\x69\162\x61\x74\151\157\156", PR__CVR__PMPR))->jyumyyugiwwiqomk(20); goto yqagomygmeoecwey; case "\x64\x69\163\143\x6f\x75\156\164": $ugugimquukqwogge->gswweykyogmsyawy(__("\104\151\x73\143\157\165\x6e\164", PR__CVR__PMPR))->jyumyyugiwwiqomk(15); goto yqagomygmeoecwey; } qikaewekoecykeou: yqagomygmeoecwey: if (!$aumscagymwyyicag) { goto eucqomyqykgoiuge; } $ugugimquukqwogge->usuqmwksoeaayaig($uusmaiomayssaecw)->iygyugseyaqwywyg($aumscagymwyyicag); $oammesyieqmwuwyi[] = $ugugimquukqwogge; eucqomyqykgoiuge: qsgqwyqaqiowkmco: } gsygwgsiawgmqiyi: $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::uwceyikaaaqgkkee => $this->eskggqsasgsiommy("\x70\162\x69\143\145")]); $this->ewcsyqaaigkicgse("\x6d\x65\164\x61\x64\141\164\x61\137\x72\x65\x6e\x64\145\162", $ywmkwiwkosakssii); usymasgsyqgsuocg: } public function isuqqoeugcomuioq($cuyooiakswegosog = true) { if ($cuyooiakswegosog) { goto aiccyaswigkaycqk; } woocommerce_template_loop_add_to_cart(); goto sqyokemumceysegy; aiccyaswigkaycqk: woocommerce_template_single_add_to_cart(); sqyokemumceysegy: } public function wigckqooeccseiyu() : bool { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); return !($cgceoyqmmwumqyqa->wmqwkwyuqwksiiqk() || $cgceoyqmmwumqyqa->gqoskmoekogyqwsc()); } public function qoygkmewcyasayyu($koaqeegoeiaiccse = true) : string { global $product; $nsmgceoqaqogqmuw = ''; if (!$product instanceof WC_Product) { goto aueaceeyommgkicu; } $iwewcwusemqaiggk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->kckogqkiycqeumoa($this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product), Constants::cmckeoksigiaqykc); if (!$iwewcwusemqaiggk instanceof WP_Term) { goto zayqqeqgcwkekwws; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->yuawgssgauywkiia($aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk), $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), ["\x63\x6c\x61\163\x73" => "\x70\x72\157\144\165\143\x74\55\x63\x61\164\145\147\157\162\171\40\150\157\166\x65\x72\55\160\162\x69\155\141\162\171\x20\146\157\156\164\x2d\61\66"]); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(__("\111\x6e\x20\103\x61\x74\x65\147\157\162\171\72\x20\x25\x73", PR__CVR__PMPR), $nsmgceoqaqogqmuw), ["\x63\154\141\x73\x73" => "\x74\145\170\x74\55\x67\x72\141\x79\x2d\66\x30\x30"]); $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ["\x63\x6c\141\163\163" => "\151\x63\x6f\156\55\x73\x6d\40\x6d\x72\55\62\x20\x6d\171\x2d\x61\x75\164\x6f"]); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->iaaacsuskiakkwui($wkaqekwwgqsqwcoi . $nsmgceoqaqogqmuw, ["\x63\154\x61\163\163" => "\144\x2d\x66\x6c\x65\170"]); if (!$koaqeegoeiaiccse) { goto oqousikwiiqagoyw; } echo $nsmgceoqaqogqmuw; oqousikwiiqagoyw: zayqqeqgcwkekwws: aueaceeyommgkicu: return $nsmgceoqaqogqmuw; } public function yqauycsoymimeise($product, $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { $xgwukwqqaseqagay = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->yqauycsoymimeise($product); if ($mgkceomocowocqyo === Constants::uwycywkimsycqwcy) { goto mysueeoswqgccmui; } $wewsywccwwomowkw = $xgwukwqqaseqagay; goto egmayaiikwsskgmy; mysueeoswqgccmui: $wewsywccwwomowkw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($xgwukwqqaseqagay . "\x25", ["\143\x6c\141\163\x73" => "\160\162\151\143\145\x2d\144\151\x73\143\x6f\x75\156\164\55\x61\155\157\x75\x6e\164\40\164\x65\x78\x74\55\144\141\x6e\147\x65\162"]); $wewsywccwwomowkw = $this->ocksiywmkyaqseou("\x70\162\x69\143\x65\137\x64\x69\x73\x63\x6f\165\x6e\164", $wewsywccwwomowkw, $xgwukwqqaseqagay); egmayaiikwsskgmy: return $wewsywccwwomowkw; } public function uyiokmsuakcaeoes($product, $mgkceomocowocqyo = Constants::uwycywkimsycqwcy) { $wewsywccwwomowkw = 0; $product = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->get($product); if (!$product instanceof WC_Product) { goto sguskaeaaqcagqgc; } $eeeyyekmaesysegc = (float) $product->get_sale_price(false); $iuiwoikawsooqksg = (float) $product->get_regular_price(false); if (!$iuiwoikawsooqksg) { goto ucuoeymyqeokgsya; } $wewsywccwwomowkw = $iuiwoikawsooqksg - $eeeyyekmaesysegc; ucuoeymyqeokgsya: if (!($mgkceomocowocqyo === Constants::uwycywkimsycqwcy)) { goto yuuyikiacmmueosu; } $wewsywccwwomowkw = $this->ocksiywmkyaqseou("\160\162\x69\143\145\x5f\144\151\163\x63\x6f\165\x6e\x74", $wewsywccwwomowkw, $iuiwoikawsooqksg, $eeeyyekmaesysegc); yuuyikiacmmueosu: sguskaeaaqcagqgc: return $wewsywccwwomowkw; } public function mgqacgmuqsmkcsmo($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $aiowsaccomcoikus) { if (!(isset($aiowsaccomcoikus["\x72\x65\x71\x75\151\162\145\x64"]) && $aiowsaccomcoikus["\162\145\161\165\151\162\x65\x64"])) { goto oocuemosmeeekgas; } $aiowsaccomcoikus["\143\x6c\x61\x73\163"] = ["\x69\x73\55\151\156\166\x61\154\151\x64"]; oocuemosmeeekgas: $ikgwqyuyckaewsow[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; syuaummumssgwwee: } agkmiayuawacakau: unset($ikgwqyuyckaewsow["\142\x69\x6c\154\151\x6e\147\x5f\143\157\x75\x6e\164\x72\x79"]); unset($ikgwqyuyckaewsow["\142\151\x6c\154\151\156\x67\137\x61\144\x64\162\145\163\x73\137\62"]); $ikgwqyuyckaewsow["\x62\x69\154\154\151\x6e\x67\137\x73\x74\141\164\x65"]["\160\162\x69\x6f\x72\151\x74\171"] = 60; $ikgwqyuyckaewsow["\x62\151\154\154\151\x6e\x67\137\x63\x69\164\x79"]["\x70\x72\x69\x6f\162\151\164\171"] = 70; $ikgwqyuyckaewsow["\142\x69\154\x6c\x69\156\147\137\141\144\144\162\x65\x73\x73\x5f\61"]["\x70\x72\x69\x6f\162\x69\164\171"] = 80; $ikgwqyuyckaewsow["\142\151\x6c\154\x69\156\x67\137\x65\155\x61\x69\x6c"]["\x70\162\x69\x6f\162\151\164\x79"] = 98; $ikgwqyuyckaewsow["\x62\x69\154\x6c\x69\x6e\147\x5f\160\157\163\164\143\x6f\144\145"]["\154\x61\x62\145\x6c"] = __("\120\157\x73\164\143\x6f\x64\145", PR__CVR__PMPR); $ikgwqyuyckaewsow["\142\151\154\x6c\151\156\147\x5f\x65\x6d\141\151\x6c"]["\x6c\x61\x62\145\x6c"] = __("\105\155\x61\151\x6c", PR__CVR__PMPR); return $ikgwqyuyckaewsow; } public function ikkussiqikuiuusi(string $egkyssmuqcwaciya = '') : string { return rtrim("\x62\164\x6e\x20\142\x74\156\55\142\154\157\x63\x6b\x20\142\x74\156\55\160\x72\151\155\141\162\171\x20{$egkyssmuqcwaciya}"); } public function sekiuyeokwgsgoko() : array { return ["\165\154\x2e\167\157\157\143\157\155\155\x65\162\143\145\55\x73\150\151\x70\x70\151\156\147\55\x6d\x65\164\x68\157\x64\x73" => ["\143\x6c\x61\x73\163" => "\154\151\163\164\x2d\x67\x72\x6f\165\x70\x20\154\151\x73\x74\x2d\x67\162\x6f\165\x70\x2d\x66\154\x75\163\150\40\x62\147\x2d\x74\162\x61\x6e\x73\x70\x61\x72\145\x6e\x74"], "\165\154\x2e\x77\157\157\x63\157\155\155\145\x72\x63\145\x2d\163\150\x69\160\x70\151\156\x67\x2d\x6d\145\164\x68\x6f\x64\163\40\x6c\x61\x62\x65\x6c" => ["\143\154\141\163\x73" => "\x6d\x2d\60"], "\165\x6c\x2e\167\x6f\x6f\x63\157\155\x6d\x65\x72\143\x65\x2d\x73\150\151\160\x70\x69\156\x67\x2d\x6d\145\164\150\157\x64\163\x20\x6c\151" => ["\x63\x6c\141\x73\163" => "\x6c\x69\163\164\x2d\x67\162\157\165\160\55\x69\164\x65\155\40\x70\171\x2d\x31\40\160\170\x2d\x30"]]; } public function umooigokeuauqqsw() : array { return ["\x64\154\x2e\x76\x61\x72\x69\x61\x74\151\157\x6e" => ["\143\x6c\x61\x73\x73" => "\144\55\x66\x6c\x65\170\40\155\55\x61\x75\164\x6f"], "\x64\x6c\56\x76\x61\162\x69\x61\164\x69\157\x6e\x20\160" => ["\x63\x6c\x61\x73\163" => "\x6d\x62\x2d\60"], "\x64\154\56\x76\141\x72\151\141\164\151\x6f\x6e\40\x64\x64" => ["\x63\x6c\x61\163\163" => "\155\142\55\x30"], "\144\x6c\x2e\166\141\162\151\x61\164\151\x6f\x6e\40\144\x74" => ["\x63\154\x61\x73\x73" => "\167\x2d\154\x67\x2d\62\60"]]; } public function ywwekgwmisgaksgk($eaoumsseceiowgsk, $aqykuigiuwmmcieu, $siquossayskcwkea = []) : array { $smuykqsageuocuos = $this->caokeucsksukesyo()->gkksucgseqqemesc(); $aqykuigiuwmmcieu = $smuykqsageuocuos->ogaeogwycyqqckeu($aqykuigiuwmmcieu, ["\x2e\146\x6f\162\x6d\55\162\157\167" => ["\x63\x6c\141\x73\x73" => "\146\157\162\x6d\55\162\x6f\x77"]]); $aqykuigiuwmmcieu = $smuykqsageuocuos->mosawwqeoikikcuo($aqykuigiuwmmcieu, "\x2e\x77\157\x6f\143\157\155\155\145\162\143\145\x2d{$eaoumsseceiowgsk}\55\x66\x69\145\154\x64\x73\137\x5f\x66\x69\x65\x6c\144\x2d\167\x72\141\x70\160\145\x72\40\76\x20\x70", ["\143\x6c\141\163\x73" => "\162\x6f\x77"]); $aqykuigiuwmmcieu = $smuykqsageuocuos->suygukqgsuwaaumg($aqykuigiuwmmcieu, ["\x61\142\142\x72"]); $ggauoeuaesiymgee = ["\56\151\163\55\x69\x6e\x76\141\154\151\x64\40\151\x6e\x70\165\x74" => ["\143\154\x61\163\x73" => "\162\145\x71\x75\x69\162\145\x64\55\151\156\x70\x75\164"], "\56\151\x73\55\151\156\x76\141\x6c\151\x64\40\163\x65\x6c\145\143\x74" => ["\143\x6c\141\x73\163" => "\x72\x65\x71\x75\151\162\145\144\x2d\151\x6e\160\165\164"], "\163\x65\154\145\x63\x74\x2c\40\x69\x6e\x70\165\164" => ["\143\x6c\141\x73\x73" => "\x66\157\x72\155\x2d\x63\157\156\164\162\x6f\x6c"], "\x23\142\151\x6c\x6c\151\156\x67\x5f\146\x69\x72\x73\x74\x5f\156\141\x6d\145\x5f\146\x69\x65\x6c\x64" => ["\x63\x6c\x61\x73\x73" => "\x63\157\x6c\x2d\x6d\144\x2d\x36"], "\x23\142\151\154\x6c\x69\x6e\x67\x5f\x6c\141\x73\x74\137\156\x61\x6d\x65\137\146\x69\145\x6c\x64" => ["\143\x6c\141\163\163" => "\143\157\154\55\155\144\x2d\x36"], "\x23\142\151\154\154\151\156\x67\137\x70\x68\157\x6e\145\x5f\146\151\145\154\144" => ["\x63\154\x61\x73\163" => "\143\157\x6c\x2d\155\x64\55\x36"], "\x23\142\151\154\x6c\151\156\x67\137\x6d\x6f\142\151\x6c\145\137\x66\x69\145\x6c\144" => ["\143\x6c\141\163\163" => "\x63\157\x6c\x2d\155\x64\55\66"], "\43\x62\x69\x6c\154\x69\x6e\x67\137\x63\157\x6d\x70\141\156\x79\137\x66\151\x65\x6c\144" => ["\x63\154\141\x73\163" => "\x63\157\x6c\x2d\x6d\x64\55\x36"], "\43\x62\x69\x6c\154\x69\x6e\x67\137\x63\x69\164\171\x5f\146\x69\x65\x6c\x64" => ["\143\x6c\x61\163\163" => "\143\157\154\x2d\x6d\x64\x2d\x36"], "\x23\142\151\x6c\x6c\151\x6e\x67\x5f\x73\164\x61\x74\145\137\146\x69\x65\154\x64" => ["\143\x6c\x61\163\163" => "\143\x6f\154\55\155\144\x2d\66"], "\43\x62\151\154\154\151\156\147\x5f\145\x6d\x61\151\154\137\x66\x69\145\154\x64" => ["\143\x6c\x61\163\163" => "\x63\x6f\154\55\x6d\x64\55\66"], "\43\142\x69\154\x6c\x69\x6e\x67\x5f\x70\157\x73\x74\143\157\144\145\x5f\146\x69\x65\154\144" => ["\x63\154\141\x73\x73" => "\143\x6f\154\x2d\155\x64\x2d\x36"], "\43\x62\151\x6c\x6c\x69\x6e\x67\x5f\x70\x6f\163\164\x63\157\144\145\137\x66\151\x65\x6c\x64\40\151\156\160\x75\x74" => ["\143\x6c\x61\163\x73" => "\144\151\x72\145\143\x74\151\157\x6e\55\154\x74\162"], "\43\x63\x75\163\x74\157\x6d\x65\x72\x5f\x64\x65\x74\141\151\x6c\x73\40\x69\156\160\165\x74" => ["\x63\154\x61\x73\x73" => "\146\157\162\155\x2d\143\157\156\164\x72\x6f\x6c"], "\x2e\x77\x6f\x6f\143\x6f\x6d\155\x65\162\x63\x65\55{$eaoumsseceiowgsk}\x2d\146\151\x65\x6c\144\x73\x5f\x5f\146\151\x65\154\144\55\x77\x72\141\x70\160\x65\x72\x20\160" => ["\x63\154\x61\163\x73" => "\x66\157\162\155\55\147\162\157\165\160\40\143\157\154\55\61\62"], "\x70" => ["\143\154\141\163\x73" => "\155\x62\55\62"]]; return [$aqykuigiuwmmcieu, array_merge($ggauoeuaesiymgee, $siquossayskcwkea)]; } }
