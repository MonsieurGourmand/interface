<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 4/26/17
 * Time: 7:22 PM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Model;



use monsieurgourmand\Bundle\InterfaceBundle\Service\MGD;

class Master
{
    /**
     * @var MGD
     */
    protected $master;

    /**
     * @return Mgd
     */
    public function getMaster()
    {
        return $this->master;
    }

    /**
     * @param Mgd $master
     * @return Master
     */
    public function setMaster($master)
    {
        $this->master = $master;
        return $this;
    }

    public function getLiteralConst($constants, $type)
    {
        $result = array();
        foreach ($constants as $key => $constant) {
            if (strpos($key, $type) >= 0)
                $result[$constant] = str_replace(
                    array('TRANSPORT_CP',
                        'TRANSPORT_CPCOURSIER',
                        'TRANSPORT_CPSERVEUR',
                        'TRANSPORT_COURSIER',
                        'TRANSPORT_SERVEUR',
                        'TRANSPORT_COURSIERLYON',
                        'TRANSPORT_SERVEURLYON',
                        'TRANSPORT_MGD',
                        'TRANSPORT_FOURNISSEUR',
                        'SERVICE_OUILYON',
                        'SERVICE_OUI',
                        'SERVICE_NON',
                        'SERVICE_NONLYON',
                        'SERVICE_SERVEURSANSSERVICE',
                        'SERVICE_SERVEURSANSSERVICELYON',
                        'DOCS_FCEVENTAIL',
                        'DOCS_FCEVENTAILQUES',
                        'DOCS_FC',
                        'DOCS_FCQUES',
                        'DOCS_NONE',
                        'DOCS_QUES',
                        'DOCS_EVENTAIL',
                        'TEMPPT_FREEZE',
                        'TEMPPT_FRESH',
                        'TEMPPT_SEC',
                        'TEMPPT_DUO',
                        'TEMPDE_HOME',
                        'TEMPDE_TRANSPORT',
                        'TEMPDE_COLISCLIENT',
                        'TEMPDE_COLISCOURSIER',
                        'TEMPDE_COLISSERVEUR',
                        'TEMPDE_HORSCOLISCLIENT',
                        'TEMPDE_HORSCOLISSERVEUR',
                        'TEMPDE_NA'),
                    array('Chronopost',
                        'CP + Coursier',
                        'CP + Serveur',
                        'Coursier',
                        'Serveur',
                        'Coursier Lyon',
                        'Serveur Lyon',
                        'MGD',
                        'Fournisseur',
                        'Oui Lyon',
                        'Oui',
                        'Non',
                        'Non Lyon',
                        'Serveur sans service',
                        'Serveur sans service lyon',
                        'FC + éventail',
                        'FC + éventail + Questionnaire',
                        'FC Seule',
                        'FC + Questionnaire',
                        'Aucun',
                        'Questionnaire Seul',
                        'Eventail Seul',
                        'Freeze',
                        'Fresh',
                        'Sec',
                        'Duo',
                        'Chez nous avant départ',
                        'Pendant le transport',
                        'Dans les colis chez client',
                        'Dans les colis chez coursier',
                        'Dans les colis chez serveur',
                        'Hors colis chez client',
                        'Hors colis chez serveur',
                        'NA',
                    ), $key);
        }
        return $result;
    }
}