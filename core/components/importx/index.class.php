<?php
require_once dirname(__FILE__) . '/model/importx/importx.class.php';
/**
 * @package importx
 */
abstract class importXBaseManagerController extends modExtraManagerController {

    public $importX;
    public function initialize() {
        $this->importX = new importX($this->modx);

		//header.php
		$this->addJavascript($this->importX->getOption('jsUrl').'mgr/importx.js');
		$defaults = array();
		$defaults['richtext'] = (boolean)$modx->getOption('richtext_default',null,true);
		$defaults['template'] = (int)$modx->getOption('default_template',null,1);
		$defaults['hidemenu'] = (boolean)$modx->getOption('hidemenu_default',null,false);
		$defaults['published'] = (boolean)$modx->getOption('publish_default',null,true);
		$defaults['searchable'] = (boolean)$modx->getOption('search_default',null,true);
		$defaults = $modx->toJSON($defaults);
		$modx->regClientStartupHTMLBlock('<script type="text/javascript">
		Ext.onReady(function() {
		    importX.config = '.$modx->toJSON($importx->config).';
		    importX.defaults = '.$defaults.';
		});
		</script>');
		return '';
		
        //$this->addCss($this->importx->getOption('cssUrl').'mgr.css');
        $this->addJavascript($this->importX->getOption('jsUrl').'mgr/widget.home.panel.js');
        $this->addJavascript($this->importX->getOption('jsUrl').'mgr/widget.home.form.js');
        $this->addJavascript($this->importX->getOption('jsUrl').'mgr/section.index.js');
        $this->addHtml('<div id="importx-panel-home-div"></div>');

        parent::initialize();
    }
    public function getLanguageTopics() {
        return array('importx:default');
    }
    public function checkPermissions() { return true;}
}