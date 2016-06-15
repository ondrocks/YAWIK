<?php
/**
 * YAWIK
 *
 * @filesource
 * @copyright (c) 2013 - 2016 Cross Solution (http://cross-solution.de)
 * @license   MIT
 */

namespace Cv\Entity;

use Core\Entity\EntityInterface;

interface PreferredJobInterface extends EntityInterface
{
    /**
     * Apply for a job, internship or studies
     *
     * @param string $typeOfApplication
     *
     * @return \Cv\Entity\PreferredJob
     */
    public function setTypeOfApplication($typeOfApplication);

    /**
     * Gets the type of an Application. Freelancer, contract
     *
     * @return string
     */
    public function getTypeOfApplication();

    public function setDesiredJob($preferredJob);

    public function getDesiredJob();

    public function setDesiredLocation($preferredLocation);

    public function getDesiredLocation();

    public function setDesiredLocations($preferredLocations);

    public function getDesiredLocations();

    public function setWillingnessToTravel($willingnessToTravel);

    public function getWillingnessToTravel();

    public function setExpectedSalary($expectedSalary);

    public function getExpectedSalary();
}
