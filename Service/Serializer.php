<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/23/17
 * Time: 10:15 AM
 */

namespace monsieurgourmand\Bundle\InterfaceBundle\Service;


class Serializer
{
    public function serialize($element)
    {
        $depth = 0;
        if (is_array($element)) {
            foreach ($element as $key => &$item)
                $item = self::object($item, $depth, $key);
        } else {
            $element = self::object($element, $depth);
        }
        return $element;
    }

    public function object($object, $depth, $key = NULL)
    {
        if ($depth > 2) return;
        $array = array();
        if (is_object($object)) {
            $reflectionClass = new \ReflectionClass(get_class($object));
            foreach ($reflectionClass->getProperties() as $property) {
                $property->setAccessible(true);
                $value = $property->getValue($object);
                if (is_array($value)) {
                    if (isset($value[0])) {
                        if (is_object($value[0])) {
                            foreach ($value as &$element) {
                                $element = self::object($element, $depth + 1);
                            }
                        }
                    }

                } elseif (is_object($value) && strpos(get_class($value), "monsieurgourmand") !== false)
                    $value = self::object($value, $depth + 1);
                $type = '';
                if (preg_match('/@var\s+(\\\\\w+)/', $property->getDocComment(), $matches)) {
                    list(, $type) = $matches;
                } elseif (preg_match('/@var\s+(\w+)/', $propDest->getDocComment(), $matches)) {
                    list(, $type) = $matches;
                }
                if ((strstr($type, '\DateTime') || strstr($type, 'DateTime')) && $value !== null) {
                    $array[$property->getName()] = $value->format('c');
                } else {
                    $array[$property->getName()] = $value;
                }
                $property->setAccessible(false);
            }
            return $array;
        } elseif (is_array($object)) {
            foreach ($object as $key => &$item)
                $item = self::object($item, $depth, $key);
            return $object;
        } else
            return $object;
    }
}
