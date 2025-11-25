<?php

namespace App\Twig\Extension;

use App\Repository\ConferenceRepository;
use Twig\Attribute\AsTwigFunction;

class AppExtension
{
    public function __construct(
        private ConferenceRepository $conferenceRepository,
    ) {
    }

    #[AsTwigFunction('conferences')]
    public function getConferences(): array
    {
        return $this->conferenceRepository->findAll();
    }
}
