<?php
namespace Adesa\SmartLabelClient\Methods;

use Adesa\SmartLabelClient\WebserviceMethod;

class TransfertOk extends WebserviceMethod
{
    public function getName()
    {
        return 'W2P_Transfert_Ok';
    }

    public function getResultName()
    {
        return 'W2P_Transfert_OkResult';
    }

    public function getWSDL()
    {
        return 'https://srvcalc.adesa.fr/api_smartlabel_web/API_Smartlabel.awws?wsdl';
    }

    public function getParametersList()
    {
        return array('nDossier');
    }

    /**
     * @param $int int
     * @return static
     */
    public function nDossier($int)
    {
        return $this->setParameter('nDossier', $int, 'int');
    }
}
