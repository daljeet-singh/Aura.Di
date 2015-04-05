<?php
/**
 *
 * This file is part of Aura for PHP.
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 */
namespace Aura\Di;

/**
 *
 * Lazy-loads an arbitrary value.
 *
 * @package Aura.Di
 *
 */
class LazyValue implements LazyInterface
{
    /**
     *
     * The resolver.
     *
     * @var Resolver
     *
     */
    protected $resolver;

    /**
     *
     * The value key to retrieve.
     *
     * @var string
     *
     */
    protected $key;

    /**
     *
     * Constructor.
     *
     * @param array $values The arbitrary values.
     *
     * @param string $key The value key to retrieve.
     *
     */
    public function __construct(Resolver $resolver, $key)
    {
        $this->resolver = $resolver;
        $this->key = $key;
    }

    /**
     *
     * Returns the lazy value.
     *
     * @return mixed
     *
     */
    public function __invoke()
    {
        return $this->resolver->values[$this->key];
    }
}