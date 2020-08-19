<?php

namespace craft\ckeditor\assets\ckeditor;

use craft\web\AssetBundle;

/**
 * CKEditor asset bundle
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since 1.0
 */
class CkeditorAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = dirname(__DIR__, 3).'/lib/ckeditor/dist';
        $this->js = [
            'editor.js'
        ];

        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view); // TODO: Change the autogenerated stub

        $css = <<<CSS
.ck-editor__editable {
    background: #fff !important;
}
CSS;
        $view->registerCss($css);
    }
}
