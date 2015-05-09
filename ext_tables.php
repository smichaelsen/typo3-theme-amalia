<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Theme Amalia');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('theme_amalia', 'Page');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('theme_amalia', 'Content');

