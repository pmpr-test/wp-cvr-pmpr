<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6f2e9686             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Pmpr\Customizer; class Header extends Template { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('wp_print_styles', [$this, 'ysmqwssysomwuqcq']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_add_to_cart_fragments', [$this, 'gwyousmeuuwwiecy']); $this->aqaqisyssqeomwom('header_left_menu_icon_' . Customizer::eaymwcsywymcueus, [$this, 'oewskwikmmawggeg'])->aqaqisyssqeomwom('header_left_menu_html_' . Customizer::eaymwcsywymcueus, [$this, 'omsoqyikokqkiaqi'])->aqaqisyssqeomwom('header_left_menu_html_' . Customizer::kakmqeamywsckeso, [$this, 'wiewyouigmeywmew']); } public function omsoqyikokqkiaqi($aqykuigiuwmmcieu) { if ($this->wigckqooeccseiyu()) { $aqykuigiuwmmcieu .= $this->iuygowkemiiwqmiw('cart_dropdown', ['widget' => 'WC_Widget_Cart', 'count_text' => sprintf('%s %s', $this->eokyamkqwyyuesek(0), __('Product', PR__CVR__PMPR)), 'cart_link' => $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__('View Cart', PR__CVR__PMPR), $this->caokeucsksukesyo()->wikusamwomuogoau()->geoemsmuouqcqmei(), ['class' => 'card-link']), 'empty_text' => __('No products in the cart.', PR__CVR__PMPR)]); } return $aqykuigiuwmmcieu; } public function wiewyouigmeywmew($nsmgceoqaqogqmuw) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $oammesyieqmwuwyi = []; $ymmmmaiuoocagigk = $this->wkiaeewoqmsougim(Customizer::sakqiumesekgquyk, []); if ($ymmmmaiuoocagigk) { $sowouiywwmkayamk = $cgceoyqmmwumqyqa->kamgouysgcgiaosw(); if ($sowouiywwmkayamk) { foreach ($sowouiywwmkayamk as $kgccggmwkeukkkci => $pkyyagewkiyckmwy) { if ($kgccggmwkeukkkci === 'dashboard') { $sqqewmoeaekuyyas = 0; } elseif ($kgccggmwkeukkkci === 'customer-logout') { $sqqewmoeaekuyyas = 1000; } else { $sqqewmoeaekuyyas = 5; } if (in_array($kgccggmwkeukkkci, $ymmmmaiuoocagigk, true)) { $oammesyieqmwuwyi[$kgccggmwkeukkkci] = [Constants::TEXT => $pkyyagewkiyckmwy, Constants::qgqyauaqwqmqseim => $this->uuiqowweqqewoysu($kgccggmwkeukkkci), Constants::ogigqueukwysusii => $cgceoyqmmwumqyqa->quiocgkecyewioqa($kgccggmwkeukkkci), Constants::iuqumwggccmcuyem => $sqqewmoeaekuyyas]; } } } } $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $oammesyieqmwuwyi = $this->ocksiywmkyaqseou('woocommerce_menu_account_dropdown_links', $oammesyieqmwuwyi); $oammesyieqmwuwyi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($oammesyieqmwuwyi); $nsmgceoqaqogqmuw .= $this->iuygowkemiiwqmiw('account_dropdown', ['user' => $yoiguusocukqeayg->get(), 'links' => $oammesyieqmwuwyi, 'arrow_icon' => IconInterface::akoyqksyocguggwc, 'display_name' => $yoiguusocukqeayg->ygwimyogyaqgumam(), 'account_link' => $this->caokeucsksukesyo()->wikusamwomuogoau()->guuoascmyqygwsic(), 'get_account_text' => __('Show Account', PR__CVR__PMPR)]); } return $nsmgceoqaqogqmuw; } public function oewskwikmmawggeg($nsmgceoqaqogqmuw) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gaeqamemwmwsyukm = $swqimwqeweekeusq->gmqyuaqwgiayskei($this->eokyamkqwyyuesek(0), ['class' => 'position-absolute bottom-0 left-0 badge badge-danger ml-2']); return $swqimwqeweekeusq->gmqyuaqwgiayskei([$nsmgceoqaqogqmuw, $gaeqamemwmwsyukm], ['class' => 'count-frame']); } public function eokyamkqwyyuesek($gaeqamemwmwsyukm = null) : ?string { if ($gaeqamemwmwsyukm === null) { $gaeqamemwmwsyukm = $this->caokeucsksukesyo()->wikusamwomuogoau()->gmoosossamayqukq(); } else { $gaeqamemwmwsyukm = $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($gaeqamemwmwsyukm); } return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei($gaeqamemwmwsyukm, ['class' => 'count-value']); } public function ysmqwssysomwuqcq() { $this->uwkmaywceaaaigwo()->usugyumcgeaaowsi()->ciuuyygmkuwgoiki('woocommerce-inline', 'after', ''); } public function gwyousmeuuwwiecy($kyayogegqasiumes) { $kyayogegqasiumes['.count-value'] = $this->eokyamkqwyyuesek(); return $kyayogegqasiumes; } }
