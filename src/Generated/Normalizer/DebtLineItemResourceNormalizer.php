<?php

namespace Datenkraft\Backbone\Client\FrontendApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\FrontendApi\Generated\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class DebtLineItemResourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\DebtLineItemResource';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\DebtLineItemResource';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FrontendApi\Generated\Model\DebtLineItemResource();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('debtLineItemId', $data)) {
            $object->setDebtLineItemId($data['debtLineItemId']);
        }
        if (\array_key_exists('skuCode', $data)) {
            $object->setSkuCode($data['skuCode']);
        }
        if (\array_key_exists('skuGroupName', $data)) {
            $object->setSkuGroupName($data['skuGroupName']);
        }
        if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
            $object->setQuantity($data['quantity']);
        }
        elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
            $object->setQuantity(null);
        }
        if (\array_key_exists('projectId', $data)) {
            $object->setProjectId($data['projectId']);
        }
        if (\array_key_exists('projectName', $data)) {
            $object->setProjectName($data['projectName']);
        }
        if (\array_key_exists('usageStart', $data)) {
            $object->setUsageStart(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['usageStart']));
        }
        if (\array_key_exists('usageEnd', $data)) {
            $object->setUsageEnd(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['usageEnd']));
        }
        if (\array_key_exists('priceTotal', $data)) {
            $object->setPriceTotal($this->denormalizer->denormalize($data['priceTotal'], 'Datenkraft\\Backbone\\Client\\FrontendApi\\Generated\\Model\\PriceProperty', 'json', $context));
        }
        if (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] !== null) {
            $object->setInvoiceNumber($data['invoiceNumber']);
        }
        elseif (\array_key_exists('invoiceNumber', $data) && $data['invoiceNumber'] === null) {
            $object->setInvoiceNumber(null);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['debtLineItemId'] = $object->getDebtLineItemId();
        $data['skuCode'] = $object->getSkuCode();
        if (null !== $object->getSkuGroupName()) {
            $data['skuGroupName'] = $object->getSkuGroupName();
        }
        if (null !== $object->getQuantity()) {
            $data['quantity'] = $object->getQuantity();
        }
        $data['projectId'] = $object->getProjectId();
        if (null !== $object->getProjectName()) {
            $data['projectName'] = $object->getProjectName();
        }
        $data['usageStart'] = $object->getUsageStart()->format('Y-m-d\\TH:i:sP');
        $data['usageEnd'] = $object->getUsageEnd()->format('Y-m-d\\TH:i:sP');
        if (null !== $object->getPriceTotal()) {
            $data['priceTotal'] = $this->normalizer->normalize($object->getPriceTotal(), 'json', $context);
        }
        if (null !== $object->getInvoiceNumber()) {
            $data['invoiceNumber'] = $object->getInvoiceNumber();
        }
        return $data;
    }
}