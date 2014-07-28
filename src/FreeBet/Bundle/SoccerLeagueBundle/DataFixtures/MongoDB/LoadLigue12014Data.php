<?php

namespace FreeBet\Bundle\SoccerLeagueBundle\DataFixtures\MongoDB;

/**
 * LoadLigue12014Data
 *
 * @author jobou
 */
class LoadLigue12014Data extends AbstractLeagueData
{
    /**
     * {@inheritDoc}
     */
    protected function getCompetitionReference()
    {
        return "ligue-1-2014";
    }
}
