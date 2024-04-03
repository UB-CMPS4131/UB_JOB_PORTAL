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
        $this->assertEquals($internship, $searchCriteria->isInternship()); // Check if internship attribute is set correctly
        $this->assertEquals($fulltime, $searchCriteria->isFulltime()); // Check if fulltime attribute is set correctly
        $this->assertEquals($parttime, $searchCriteria->isParttime()); // Check if parttime attribute is set correctly
        $this->assertEquals($remote, $searchCriteria->isRemote()); // Check if remote attribute is set correctly
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
}

class SearchCriteria {
    private bool $internship;
    private bool $fulltime;
    private bool $parttime;
    private bool $remote;

    public function __construct(bool $internship, bool $fulltime, bool $parttime, bool $remote) {
        $this->internship = $internship;
        $this->fulltime = $fulltime;
        $this->parttime = $parttime;
        $this->remote = $remote;
    }

    // Getter functions
    public function isInternship(): bool {
        return $this->internship;
    }

    public function isFulltime(): bool {
        return $this->fulltime;
    }

    public function isParttime(): bool {
        return $this->parttime;
    }

    public function isRemote(): bool {
        return $this->remote;
    }

    // Setter functions
    public function setInternship(bool $internship): void {
        $this->internship = $internship;
    }

    public function setFulltime(bool $fulltime): void {
        $this->fulltime = $fulltime;
    }

    public function setParttime(bool $parttime): void {
        $this->parttime = $parttime;
    }

    public function setRemote(bool $remote): void {
        $this->remote = $remote;
    }

    public function getSearchCriteriaList(): array {
        return [
            'internship' => $this->internship,
            'fulltime' => $this->fulltime,
            'parttime' => $this->parttime,
            'remote' => $this->remote
        ];
    }
}

?>
