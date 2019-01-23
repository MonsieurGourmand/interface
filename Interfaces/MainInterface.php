<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 02/05/18
 * Time: 07:09
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Interfaces;


interface MainInterface
{
    //Transport
    const TRANSPORT_CP = 0;
    const TRANSPORT_CPCOURSIER = 1;
    const TRANSPORT_CPSERVEUR = 2;
    const TRANSPORT_COURSIER = 3;
    const TRANSPORT_SERVEUR = 4;
    const TRANSPORT_MGD = 6;
    const TRANSPORT_FOURNISSEUR = 7;
    const TRANSPORT_UPS = 8;
    const TRANSPORT_UPSCOURSIER = 9;

    //Service
    const SERVICE_OUI = 0;
    const SERVICE_NON = 1;
    const SERVICE_SERVEURSANSSERVICE = 2;

    //Documents
    const DOCS_FCEVENTAIL = 0;
    const DOCS_FCEVENTAILQUES = 1;
    const DOCS_FC = 2;
    const DOCS_FCQUES = 3;
    const DOCS_NONE = 4;
    const DOCS_QUES = 5;
    const DOCS_EVENTAIL = 6;
    const DOCS_PICFC = 7;
    const DOCS_PIC = 8;

    //Temp Prepa/transport

    const TEMPPT_FREEZE = 0;
    const TEMPPT_FRESH = 1;
    const TEMPPT_SEC = 2;
    const TEMPPT_DUO = 3;

    //Temp Defrost
    const TEMPDE_HOME = 0;
    const TEMPDE_TRANSPORT = 1;
    const TEMPDE_COLISCLIENT = 2;
    const TEMPDE_COLISCOURSIER = 3;
    const TEMPDE_COLISSERVEUR = 4;
    const TEMPDE_HORSCOLISCLIENT = 5;
    const TEMPDE_HORSCOLISSERVEUR = 6;
    const TEMPDE_NA = 7;
}