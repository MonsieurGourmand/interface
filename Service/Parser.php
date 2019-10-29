<?php

namespace monsieurgourmand\Bundle\InterfaceBundle\Service;

use DateTime;
use Exception;
use ReflectionException;
use ReflectionObject;
use ReflectionProperty;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 9:43 AM
 */
class Parser
{
    public function parse($response, $destination, $master, $format)
    {
        if (!empty($response)) {
            switch ($format) {
                case "json":
                    return $this->toJson($response);
                    break;
                default:
                    return $this->toObject($response, $destination, $master);
            }
        } else {
            switch ($format) {
                case "json":
                    return $this->toJson($response);
                    break;
                default:
                    return array();
            }
        }

    }

    public function toObject($response, $destination, $master)
    {
        if (isset($response[0])) {
            foreach ($response as &$item)
                $item = self::object($item, $destination, $master);
        } else
            $response = self::object($response, $destination, $master);
        return $response;
    }

    /**
     * @param array $arraySource
     * @param $destination
     * @param $master
     * @throws ReflectionException
     * @throws Exception
     */
    public function object(array $arraySource, $destination, $master)
    {
        if (!isset($arraySource)) return;
        $destination = new $destination();
        $destinationReflection = new ReflectionObject($destination);

        // Intégration du master
        $propDest = $destinationReflection->getProperty("master");
        $propDest->setAccessible(true);
        $propDest->setValue($destination, $master);

        foreach ($arraySource as $key => $value) {
            if ($destinationReflection->hasProperty($key)) {
                $propDest = $destinationReflection->getProperty($key);
                $this->setValue($propDest, $destination, $value, $master);
            } elseif ($destinationReflection->getParentClass() && $destinationReflection->getParentClass()->hasProperty($key)) {
                $propDest = $destinationReflection->getParentClass()->getProperty($key);
                $this->setValue($propDest, $destination, $value, $master);
            } else {
                $destination->$key = $value;
            }
        }

        // Création des routes secondaires
        foreach ($destinationReflection->getProperties() as $property) {
            preg_match('/\\\\monsieurgourmand\\\\Bundle\\\\InterfaceBundle\\\\Route\\\\(.*)/', $property->getDocComment(), $matches);
            if (count($matches) > 0) {
                $class = trim($matches[0]);
                $property->setAccessible(true);
                $property->setValue($destination, new $class($destination));
            }
        }

        return $destination;
    }

    public function toJson($response)
    {
        $json = json_encode($response);
        return $json;
    }

    private function setValue(ReflectionProperty $propDest, $destination, $value, $master)
    {
        $propDest->setAccessible(true);
        if (is_array($value)) {
            if (isset($value[0])) {
                if (preg_match('/@var\s+(\w+)/', $propDest->getDocComment(), $matches)) {
                    list(, $type) = $matches;
                }
                if (strstr($type, 'array')) {
                    $propDest->setValue($destination, $value);
                } else {
                    foreach ($value as &$item)
                        $item = self::object($item, "\\monsieurgourmand\\Bundle\\InterfaceBundle\\Model\\" . $type, $master);
                }
            } else {
                if (preg_match('/@var\s+(\w+)/', $propDest->getDocComment(), $matches)) {
                    list(, $type) = $matches;
                }
                if (strstr($type, 'array') || empty($value)) {
                    $propDest->setValue($destination, $value);
                } else
                    $value = self::object($value, "\\monsieurgourmand\\Bundle\\InterfaceBundle\\Model\\" . $type, $master);
            }
        }
        $type = '';
        if (preg_match('/@var\s+(\\\\\w+)/', $propDest->getDocComment(), $matches)) {
            list(, $type) = $matches;
        } elseif (preg_match('/@var\s+(\w+)/', $propDest->getDocComment(), $matches)) {
            list(, $type) = $matches;
        }
        if ((strstr($type, '\DateTime') || strstr($type, 'DateTime')) && $value !== null) {
            $propDest->setValue($destination, new DateTime($value));
        } else {
            $propDest->setValue($destination, $value);
        }
    }

}
