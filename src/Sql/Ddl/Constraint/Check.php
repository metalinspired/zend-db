<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license http://framework.zend.com/license/new-bsd New BSD License
 * @package Zend_Db
 */

namespace Zend\Db\Sql\Ddl\Constraint;

class Check extends AbstractConstraint
{
    protected $specification = 'CONSTRAINT %s CHECK (%s)';

    protected $expression;

    public function __construct($expression, $name)
    {
        $this->expression = $expression;
        $this->name = $name;
    }

    public function getExpressionData()
    {
        return array(array(
            $this->specification,
            array($this->name, $this->expression),
            array(self::TYPE_IDENTIFIER, self::TYPE_LITERAL)
        ));
    }

}
