<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Kode_Module extends Module
{
    public function __construct()
    {
        $this->name = 'kode_module';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Tero Kotti';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7',
            'max' => _PS_VERSION_
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Kode Module');
        $this->description = $this->l('Koded Module - Killer software');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

    }

    public function install()
    {
        return (parent::install() &&
            $this->registerHook('displayLeftColumn'));
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayLeftColumn($params)
    {
        return "HELLO WORLD! THIS IS <strong>KILLER</strong> MODULE by Kode!";
    }


}
?>
