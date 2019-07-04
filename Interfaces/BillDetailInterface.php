<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 02/05/18
 * Time: 07:09
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Interfaces;


interface BillDetailInterface extends MainInterface
{
    const CATEGORY_SOLU_LOC_TRANSPORT_VENTE = 22311;
    const CATEGORY_SOLU_LOC_TRANSPORT_ACHAT = 22310;
    const CATEGORY_SOLU_LOC_SERVEURS = 22309;
    const CATEGORY_SOLU_LOC_PRESTATIONS = 22308;
    const CATEGORY_SOLU_LOC_MARCHANDISES = 22307;
    const CATEGORY_SOLU_LOC_LOCATIONS = 22306;
    const CATEGORY_SOLU_LOC_EMBALLAGES = 22305;
    const CATEGORY_SOLU_LOC_COMMISSION_VENTE = 22304;
    const CATEGORY_SOLU_LOC_COMMISSION_ACHAT = 22637;
    const CATEGORY_SOLU_LOC_MATERIEL = 22303;
    const CATEGORY_SOLU_LOC_SERVEUR_HEBRES = 22674;
    const CATEGORY_ACHATS_TRANSPORT_VENTE = 22244;
    const CATEGORY_ACHATS_SERVEURS = 22242;
    const CATEGORY_ACHATS_PRESTATIONS = 22241;
    const CATEGORY_ACHATS_LOCATIONS = 22239;
    const CATEGORY_ACHATS_SERVEUR_HEBRES = 22673;
    const CATEGORY_ACHATS_COMMISSION_VENTE = 22237;
    const CATEGORY_ACHATS_COMMISSION_ACHAT = 22636;
    const CATEGORY_ACHATS_MATERIEL = 22236;
    const CATEGORY_ACHATS_HSTOCK = 22236;
}
