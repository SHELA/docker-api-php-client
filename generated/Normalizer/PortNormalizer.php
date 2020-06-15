<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PortNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\Port';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\Port;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\Port();
        if (property_exists($data, 'IP') && $data->{'IP'} !== null) {
            $object->setIP($data->{'IP'});
        }
        if (property_exists($data, 'PrivatePort') && $data->{'PrivatePort'} !== null) {
            $object->setPrivatePort($data->{'PrivatePort'});
        }
        if (property_exists($data, 'PublicPort') && $data->{'PublicPort'} !== null) {
            $object->setPublicPort($data->{'PublicPort'});
        }
        if (property_exists($data, 'Type') && $data->{'Type'} !== null) {
            $object->setType($data->{'Type'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getIP()) {
            $data->{'IP'} = $object->getIP();
        }
        if (null !== $object->getPrivatePort()) {
            $data->{'PrivatePort'} = $object->getPrivatePort();
        }
        if (null !== $object->getPublicPort()) {
            $data->{'PublicPort'} = $object->getPublicPort();
        }
        if (null !== $object->getType()) {
            $data->{'Type'} = $object->getType();
        }

        return $data;
    }
}