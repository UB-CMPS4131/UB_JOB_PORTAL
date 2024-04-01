<?php

declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class SearchCriteriaTest extends TestCase
{
    public function testConstructor()
    {
        $internship = true;
        $fulltime = false;
        $parttime = true;
        $remote = false;

        $searchCriteria = new SearchCriteria($internship, $fulltime, $parttime, $remote);

        $this->assertInstanceOf(SearchCriteria::class, $searchCriteria); // Check if the object is an instance of the SearchCriteria class
        $this->assertAttributeEquals($internship, 'internship', $searchCriteria); // Check if internship attribute is set correctly
        $this->assertAttributeEquals($fulltime, 'fulltime', $searchCriteria); // Check if fulltime attribute is set correctly
        $this->assertAttributeEquals($parttime, 'parttime', $searchCriteria); // Check if parttime attribute is set correctly
        $this->assertAttributeEquals($remote, 'remote', $searchCriteria); // Check if remote attribute is set correctly
    }

    public function testGetSearchCriteriaList()
    {
        $internship = true;
        $fulltime = false;
        $parttime = true;
        $remote = false;

        $searchCriteria = new SearchCriteria($internship, $fulltime, $parttime, $remote);

        $expected = [
            'internship' => $internship,
            'fulltime' => $fulltime,
            'parttime' => $parttime,
            'remote' => $remote
        ];

        $this->assertEquals($expected, $searchCriteria->getSearchCriteriaList()); // Check if getSearchCriteriaList returns correct value
    }

    public function testGetSearchCriteriaListFailure()
    {
       $internship = true;
       $fulltime = false;
       $parttime = true;
       $remote = false;

       $searchCriteria = new SearchCriteria($internship, $fulltime, $parttime, $remote);

      // Intentionally set the wrong expected value
      $expected = [
        'internship' => false, // Incorrect value
        'fulltime' => false,
        'parttime' => true,
        'remote' => false
      ];

      // This assertion should fail because the returned search criteria list should not match the incorrect expected value
      $this->assertEquals($expected, $searchCriteria->getSearchCriteriaList());
   }

}
