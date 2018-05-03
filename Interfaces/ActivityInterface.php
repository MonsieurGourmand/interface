<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 02/05/18
 * Time: 07:09
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Interfaces;


interface ActivityInterface extends MainInterface
{


    const CONTENT_TEXT = 'TEXT';
    const CONTENT_IMAGE = 'IMG';
    const CONTENT_PDF = 'PDF';
    const CONTENT_SLIDESHARE = 'SLD';

    const CREATOR_TRANSPORT = 0;
    const CREATOR_MARKETING = 1;
    const CREATOR_SUPPORT = 2;

    //todo handle multiple activityType
}