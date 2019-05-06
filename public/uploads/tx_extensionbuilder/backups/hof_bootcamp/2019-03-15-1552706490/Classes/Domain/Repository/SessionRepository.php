<?php
namespace HofBootCamp\HofBootcamp\Domain\Repository;


/***
 *
 * This file is part of the "Hof Typo3 Bootcamp" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * The repository for Sessions
 */
class SessionRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @param \HofBootCamp\HofBootcamp\Domain\Model\Speaker $speaker
     */
    public function getSpeakerSessions(\HofBootCamp\HofBootcamp\Domain\Model\Speaker $speaker)
    {
        $query = $this->createQuery();
        $query->matching($query->contains('speakers', $speaker));
        return $query->execute();
    }
}
