<?php

require_once 'searchCriteria.php'; 

use PHPUnit\Framework\TestCase;

class SearchCriteriaTest extends TestCase
{
    public function testGetSearchCriteriaList()
    {
        $searchCriteria = new SearchCriteria(true, true, false, true);
        $expected = [
            'internship' => true,
            'fulltime' => true,
            'parttime' => false,
            'remote' => true
        ];

        $this->assertEquals($expected, $searchCriteria->getSearchCriteriaList());
    }

}
