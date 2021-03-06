<?php
namespace Magento\Framework\GraphQl\Query\BatchContractResolverWrapper;

/**
 * Interceptor class for @see \Magento\Framework\GraphQl\Query\BatchContractResolverWrapper
 */
class Interceptor extends \Magento\Framework\GraphQl\Query\BatchContractResolverWrapper implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\Resolver\BatchServiceContractResolverInterface $resolver, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\GraphQl\Query\Resolver\ValueFactory $valueFactory)
    {
        $this->___init();
        parent::__construct($resolver, $objectManager, $valueFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        if (!$pluginInfo) {
            return parent::resolve($field, $context, $info, $value, $args);
        } else {
            return $this->___callPlugins('resolve', func_get_args(), $pluginInfo);
        }
    }
}
