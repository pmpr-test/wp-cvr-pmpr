<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6f2e9686             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Pmpr\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Cover\Pmpr\Traits\CommonTrait; class Media extends Template { const oomgaogyuiksiwag = ['single' => 'large', 'thumbnail' => 'thumbnail', 'gallery_thumbnail' => 'thumbnail']; use CommonTrait; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_placeholder_img', [$this, 'sgeygicskkakyqmc'], 99)->cecaguuoecmccuse('intermediate_image_sizes_advanced', [$this, 'eacakakmqgccsyyw'], 99)->cecaguuoecmccuse('single_product_archive_thumbnail_size', [$this, 'mekwqsyuqqguouas'], 999)->cecaguuoecmccuse('wp_get_attachment_image_attributes', [$this, 'osicwmqqmyyqocqm'], 99, 2); } public function eacakakmqgccsyyw($wyicceigkekkkwgs) { $weyusigueygyeuio = array_keys(self::oomgaogyuiksiwag); foreach ($weyusigueygyeuio as $oiegiwogmwmawkeo) { remove_image_size($oiegiwogmwmawkeo); unset($wyicceigkekkkwgs[$oiegiwogmwmawkeo]); } return $wyicceigkekkkwgs; } public function wmymmoesqugiuwey($oiegiwogmwmawkeo, $ymqmyyeuycgmigyo = null) : array { if (!$ymqmyyeuycgmigyo) { $ymqmyyeuycgmigyo = str_replace('woocommerce_get_image_size_', '', current_filter()); } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wyicceigkekkkwgs = $this->mkcqggisuwuuueqm(); $gkiuoymeukweiaaw = $gkyciwoiiisgywcs->get($wyicceigkekkkwgs, $gkyciwoiiisgywcs->get(self::oomgaogyuiksiwag, $ymqmyyeuycgmigyo)); if ($gkiuoymeukweiaaw) { $oiegiwogmwmawkeo = $gkiuoymeukweiaaw; } return $oiegiwogmwmawkeo; } public function mekwqsyuqqguouas() : string { return Constants::MEDIUM; } public function sgeygicskkakyqmc($sqecysgouskukcis) { return $this->caokeucsksukesyo()->gkksucgseqqemesc()->igmaewykumgwoaoy($sqecysgouskukcis, ['img' => ['class' => 'img-fluid']]); } public function osicwmqqmyyqocqm($wwgucssaecqekuek, $aiooqyausygaasqm) { if ($omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($aiooqyausygaasqm)) { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $product = $usmsssmiougymckk->get($omwmuycmeqcqokom); if ($product && ($usmsssmiougymckk->omuogooguicuqewu() || $usmsssmiougymckk->wwwwsgwguseauisw())) { $egkyssmuqcwaciya = 'img-fluid mb-3 mx-auto rounded' . ($this->yeoeauseikmskscu() ? '' : ' mb-md-auto mw-200px'); $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, 'class', $egkyssmuqcwaciya); } } return $wwgucssaecqekuek; } }
