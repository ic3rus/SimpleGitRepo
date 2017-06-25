<?php namespace Knp\Bundle\PaginatorBundle\Twig\Extension; use Knp\Bundle\PaginatorBundle\Helper\Processor; use 
Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination; class PaginationExtension extends \Twig_Extension {     
/**      * @var Processor      */     protected $processor;     public function __construct(Processor 
$processor)     {         $this->processor = $processor;     }     /**      * {@inheritDoc}      */     public 
function getFunctions()     {         return array(             new 
\Twig_SimpleFunction('knp_pagination_render', array($this, 'render'), array('is_safe' => array('html'), 
'needs_environment' => true)),             new \Twig_SimpleFunction('knp_pagination_sortable', array($this, 
'sortable'), array('is_safe' => array('html'), 'needs_environment' => true)),             new 
\Twig_SimpleFunction('knp_pagination_filter', array($this, 'filter'), array('is_safe' => array('html'), 
'needs_environment' => true)),         );     }
