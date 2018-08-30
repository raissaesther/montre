<?php
if(!function_exists('qode_import_export_options_map')) {
    /**
     * Import/Export options page
     */
    function qode_import_export_options_map(){

        $backupPage = new QodeAdminPage("_backupoptions", "Backup Options", "fa fa-database");
        qode_framework()->qodeOptions->addAdminPage("Backup Options", $backupPage);


        $panel1 = new QodeImportExport("Import/Export", "importexport_section");
		$backupPage->addChild("panel1", $panel1);

    }
    add_action('qode_options_map','qode_import_export_options_map',209);
}