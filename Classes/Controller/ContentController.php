<?php
namespace AppZap\ThemeAmalia\Controller;

class ContentController extends \FluidTYPO3\Fluidcontent\Controller\ContentController {

	public function teaserAction() {
		$row = $this->getRecord();
		if ($row['tx_flux_parent']) {
			$parentRow = $this->workspacesAwareRecordService->getSingle('tt_content', '*', $row['tx_flux_parent']);
			if ($parentRow['tx_fed_fcefile']) {
				$this->view->assign('parentTemplate', explode('.', explode(':', $parentRow['tx_fed_fcefile'])[1])[0]);
			}
		}
	}

}
