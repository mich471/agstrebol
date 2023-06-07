<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace AgSoftware\Home\Setup\Patch\Data;

use Magento\Cms\Api\BlockRepositoryInterface;
use Magento\Cms\Api\Data\BlockInterfaceFactory;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchRevertableInterface;

/**
 */
class CmsBlockv1
    implements DataPatchInterface,
    PatchRevertableInterface
{
    /**
     * @var \Magento\Framework\Setup\ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * @param \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(
        \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup,
        BlockRepositoryInterface $blockRepository,
        BlockInterfaceFactory $blockInterfaceFactory
    ) {
        /**
         * If before, we pass $setup as argument in install/upgrade function, from now we start
         * inject it with DI. If you want to use setup, you can inject it, with the same way as here
         */
        $this->moduleDataSetup = $moduleDataSetup;
        $this->blockRepository = $blockRepository;
        $this->blockInterfaceFactory = $blockInterfaceFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        $this->moduleDataSetup->getConnection()->startSetup();
        //The code that you want apply in the patch
        //Please note, that one patch is responsible only for one setup version
        //So one UpgradeData can consist of few data patches
        $cmsBlock = $this->blockInterfaceFactory->create();

        $blockHtmlContent = <<<HTML
 <style>#html-body [data-pb-style=JBOO3LF],#html-body [data-pb-style=SDH2TWR]{background-size:cover;background-repeat:no-repeat;background-attachment:scroll}#html-body [data-pb-style=JBOO3LF]{justify-content:flex-start;display:flex;flex-direction:column;background-color:#39393a;background-position:center center;min-height:500px}#html-body [data-pb-style=SDH2TWR]{background-position:left top;align-self:stretch}#html-body [data-pb-style=CW59TWN]{display:flex;width:100%}#html-body [data-pb-style=M4LWYI6]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;width:25%;padding-left:50px;padding-top:70px;align-self:stretch}#html-body [data-pb-style=TAD8UPM]{text-align:center;padding-top:10px}#html-body [data-pb-style=W3NDOGI]{text-align:center}#html-body [data-pb-style=O774X95],#html-body [data-pb-style=RH46HXN],#html-body [data-pb-style=RKXN8S0]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;width:25%;padding-top:70px;align-self:stretch}#html-body [data-pb-style=RH46HXN]{padding-right:80px}#html-body [data-pb-style=J2IRDGA]{padding-right:20px}#html-body [data-pb-style=N6SWHBU]{display:flex;width:100%}#html-body [data-pb-style=LWQU9DM]{justify-content:flex-start;display:flex;flex-direction:column;background-position:left top;background-size:cover;background-repeat:no-repeat;background-attachment:scroll;width:100%;align-self:stretch}#html-body [data-pb-style=EA7PHXP]{text-align:center;padding-top:40px}</style>
<div data-content-type="row" data-appearance="full-bleed" data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}" data-background-type="image" data-video-loop="true" data-video-play-only-visible="true" data-video-lazy-load="true" data-video-fallback-src="" data-element="main" data-pb-style="JBOO3LF">
<div class="pagebuilder-column-group" data-background-images="{}" data-content-type="column-group" data-appearance="default" data-grid-size="12" data-element="main" data-pb-style="SDH2TWR">
<div class="pagebuilder-column-line" data-content-type="column-line" data-element="main" data-pb-style="CW59TWN">
<div class="pagebuilder-column icon" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="M4LWYI6">
<div data-content-type="text" data-appearance="default" data-element="main" data-pb-style="TAD8UPM">
<p><img id="PUOK6FQ" style="width: 257px; height: 77px; float: left;" src="https://magento.test/media/.renditions/wysiwyg/Imagen_de_WhatsApp_2023-05-31_a_las_14.09.56.jpg" alt="" width="198" height="48"></p>
</div>
<div data-content-type="text" data-appearance="default" data-element="main" data-pb-style="W3NDOGI">
<p style="text-align: left;">&nbsp; &nbsp;<img id="JDE9OOO" style="width: 31px; height: 35px;" src="https://magento.test/media/.renditions/wysiwyg/youtube.jpg" alt="" width="31" height="35"> <img style="width: 31px; height: 32px;" src="https://magento.test/media/.renditions/wysiwyg/Imagen_de_WhatsApp_2023-05-31_a_las_14.09.57.jpg" alt="" width="31" height="32"> <img style="width: 31px; height: 32px;" src="https://magento.test/media/.renditions/wysiwyg/Captura_de_pantalla_2023-05-31_151408.png" alt="" width="31" height="32"> <img style="width: 33px; height: 31px;" src="https://magento.test/media/.renditions/wysiwyg/twiter.jpg" alt="" width="33" height="31"></p>
</div>
</div>
<div class="pagebuilder-column border" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="RKXN8S0">
<div class="title_a" data-content-type="text" data-appearance="default" data-element="main">
<h5><span style="font-size: 26px; color: #ffffff;">Legal</span></h5>
</div>
<div class="a" data-content-type="text" data-appearance="default" data-element="main">
<p><span style="color: #a8a8a8;"><a style="color: #a8a8a8;" title="Terms &amp; Conditions" href="//">Terms &amp; Conditions</a></span></p>
<p><span style="color: #a8a8a8;"><a style="color: #a8a8a8;" title="Data Processing Consent" href="//">Data Processing Consent</a></span></p>
<p><span style="color: #a8a8a8;"><a style="color: #a8a8a8;" title="Privacy Policy" href="//">Privacy Policy</a></span></p>
<p><span style="color: #a8a8a8;"><a style="color: #a8a8a8;" title="License Agreement" href="//">License Agreement</a></span></p>
<p><span style="color: #a8a8a8;"><a style="color: #a8a8a8;" title="Support License Agreement" href="//">Support License Agreement</a></span></p>
<p>&nbsp;</p>
</div>
</div>
<div class="pagebuilder-column border" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="O774X95">
<div class="title_b" data-content-type="text" data-appearance="default" data-element="main">
<h5><span style="color: #ffffff; font-size: 26px;">Knowledge Base</span></h5>
</div>
<div class="b" data-content-type="text" data-appearance="default" data-element="main">
<p><span style="color: #a8a8a8;"><a style="color: #a8a8a8;" title="FAQ" href="//">FAQ</a></span></p>
<p><span style="color: #a8a8a8;"><a style="color: #a8a8a8;" title="Support Knowledge Base" href="//">Support Knowledge Base</a></span></p>
<p><span style="color: #a8a8a8;"><a style="color: #a8a8a8;" title="Product Comparison" href="//">Product Comparison</a></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</div>
<div class="pagebuilder-column border" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="RH46HXN">
<div class="title_c" data-content-type="text" data-appearance="default" data-element="main">
<h5><span style="font-size: 26px; color: #ffffff;">Corporate</span></h5>
</div>
<div class="c" data-content-type="text" data-appearance="default" data-element="main" data-pb-style="J2IRDGA">
<p><span style="color: #a8a8a8;"><a style="color: #a8a8a8;" tabindex="0" title="About Us" href="//">About Us</a></span></p>
<p><span style="color: #a8a8a8;"><a style="color: #a8a8a8;" tabindex="0" title="Careers" href="//">Careers</a></span></p>
<p><span style="color: #a8a8a8;"><a style="color: #a8a8a8;" tabindex="0" title="Media Kit" href="//">Media Kit</a></span></p>
<p><span style="color: #a8a8a8;"><a style="color: #a8a8a8;" title="Blog" href="//">Blog</a></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</div>
</div>
<div class="pagebuilder-column-line" data-content-type="column-line" data-element="main" data-pb-style="N6SWHBU">
<div class="pagebuilder-column" data-content-type="column" data-appearance="full-height" data-background-images="{}" data-element="main" data-pb-style="LWQU9DM">
<div data-content-type="text" data-appearance="default" data-element="main" data-pb-style="EA7PHXP">
<p><span style="font-size: 18px;"><img style="width: 68px; height: 26px;" src="https://magento.test/media/.renditions/wysiwyg/paypal.jpg" alt="" width="68" height="26"></span>&nbsp; <span style="font-size: 18px;"><img style="width: 59px; height: 31px;" src="https://magento.test/media/.renditions/wysiwyg/express.jpg" alt="" width="60" height="32"></span> &nbsp; <span style="font-size: 18px;"><img style="width: 59px; height: 31px;" src="https://magento.test/media/.renditions/wysiwyg/discover.jpg" alt="" width="62" height="33"></span> &nbsp;<span style="font-size: 18px;"><img id="GQ5XRGK" style="width: 43px; height: 33px;" src="https://magento.test/media/.renditions/wysiwyg/mastercard.jpg" alt="" width="43" height="33"> <img id="QT0PRFP" style="width: 87px; height: 34px;" src="https://magento.test/media/.renditions/wysiwyg/visa.jpg" alt="" width="82" height="32"></span></p>
</div>
</div>
</div>
</div>
</div>
HTML;
        $blockData = [
            'title' => 'Footer',
            'identifier' => 'footer',
            'stores' => [0],
            'is_active' => 1,
            'content' => $blockHtmlContent

        ];
        $cmsBlock->setData($blockData);
        $cmsBlock->save();
        $this->moduleDataSetup->getConnection()->endSetup();
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        /**
         * This is dependency to another patch. Dependency should be applied first
         * One patch can have few dependencies
         * Patches do not have versions, so if in old approach with Install/Ugrade data scripts you used
         * versions, right now you need to point from patch with higher version to patch with lower version
         * But please, note, that some of your patches can be independent and can be installed in any sequence
         * So use dependencies only if this important for you
         */
        return [];
    }

    public function revert()
    {
        $this->moduleDataSetup->getConnection()->startSetup();
        //Here should go code that will revert all operations from `apply` method
        //Please note, that some operations, like removing data from column, that is in role of foreign key reference
        //is dangerous, because it can trigger ON DELETE statement
        $this->moduleDataSetup->getConnection()->endSetup();
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        /**
         * This internal Magento method, that means that some patches with time can change their names,
         * but changing name should not affect installation process, that's why if we will change name of the patch
         * we will add alias here
         */
        return [];
    }
}
